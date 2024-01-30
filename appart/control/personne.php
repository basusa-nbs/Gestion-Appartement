<?php
// creation du controleur de la classe personne et association aux vues personnes
namespace Appart\control;
use Appart\control\JsonSchema\Validator;


function getcontent(){
    try {
        $data = file_get_contents("php://input");
        $schema = file_get_contents("JsonSchema/personne.json");
    } catch(MyExceptions $e){
        $e->MaKeOutput();
    }

    return [$data, $schema];
}
function control($data, $schema){
    // recupetration du json envoyer en post
    // verification de donée
    $validator = new Validator();

    global $result;
    try {
        $data = $validator->isvalid($data, $schema);
    } catch(MyExceptions $e){
        $e->MaKeOutput();
    }
    
    return $data;
}