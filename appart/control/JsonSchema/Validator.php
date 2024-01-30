<?php
namespace Appart\control\JsonSchema;
use Appart\control\MyExceptions;

Class Validator{

    public function __construct(){

    }
    public function isvalid($json, $schema) {
        $JsonPost = json_decode($json);
    
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new MyExceptions('Erreur : Le code JSON nest pas valide.');
        }
    
        $schemaObj = json_decode($schema);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new MyExceptions('Erreur : Le schéma JSON nest pas valide.');
        }
        
        $result = $this->validateObject($JsonPost, $schemaObj);
    
        if (!$result->valid) {
            throw new MyExceptions('Erreur : Les données JSON ne respectent pas le schéma JSON. Les erreurs sont : ' . implode(', ', $result->errors));
        }

        return $JsonPost;
    }
    
    function validateObject($JsonPost, $schemaObj) {
        $result = (object) array(
            'valid' => true,
        );
    
        foreach ($schemaObj as $key => $value) {
            if (!property_exists($JsonPost, $key)) {
                $result->valid = false;
                throw new MyExceptions('La propriété "' . $key . '" est manquante.');
            }
    
            switch ($value->type) {
                case 'string':
                    if (!is_string($JsonPost->$key)) {
                        $result->valid = false;
                        throw new MyExceptions('La propriété "' . $key . '" doit être une chaîne de caractères.');
                    }
                    break;
                case 'integer':
                    if (!is_int($JsonPost->$key)) {
                        $result->valid = false;
                        throw new MyExceptions('La propriété "' . $key . '" doit être un entier.');
                    }
                    break;
                case 'object':
                    if (!is_object($JsonPost->$key)) {
                        $result->valid = false;
                        throw new MyExceptions('La propriété "' . $key . '" doit être un objet.');
                    } else {
                        $subResult = $this->validateObject($JsonPost->$key, $value->properties);
                        if (!$subResult->valid) {
                            $result->valid = false;
                            $result->errors = array_merge($result->errors, $subResult->errors);
                        }
                    }
                    break;
                // Ajouter d'autres types de données ici si nécessaire
            }
        }
    
        return $result;
    }
}

