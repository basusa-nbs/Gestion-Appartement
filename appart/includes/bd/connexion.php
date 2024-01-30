<?php
namespace Appart\includes\bd;

class connexion{
    

    public static function dbconnection(String $host, String $user, String $db, String $password){

        $dns="mysql:host=$host;dbname=$db;charset=utf8mb4";
        $options = array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION);
        return new \PDO($dns, $user, $password, $options);
        
    }

    public static function connexion(){
            
        $json = file_get_contents( __DIR__. DIRECTORY_SEPARATOR . 'OptionsConnexion.json');

        // Convertir la chaîne JSON en un tableau PHP
        $OptionsConnexion = json_decode($json, true);


        $host = $OptionsConnexion['server'];
        $db = $OptionsConnexion['database'];
        $user = $OptionsConnexion['username'];
        $password = $OptionsConnexion['password'];  

        $connexion = connexion::dbconnection($host, $user, $db, $password);
        return $connexion;
    }

    
    public static function ConGestion(){
            
        $host = "localhost";
        $db = "GestionAppart";
        $user = "root";
        $password = "";  

        $connexion = connexion::dbconnection($host, $user, $db, $password);
        return $connexion;
    }


}