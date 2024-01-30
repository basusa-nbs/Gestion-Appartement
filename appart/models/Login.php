<?php

namespace Appart\models;
use Appart\control\MyExceptions;
use Appart\includes\bd\connexion;


class Login{
    private string $email;
    private string $password;

    public function __construct(string $email, string $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function seConnecter(){
        $connexion = connexion::connexion();
        
        $requete = "SELECT * FROM identifiants WHERE email = ? ";

        $stetment = $connexion->prepare($requete) ;
        $stetment ->execute([$this->email]);

        $response = $stetment->fetchAll(\PDO::FETCH_ASSOC);
        if (sizeof($response) == 1){
            session_start();
            if(password_verify($this->password, $response[0]["password"])){
                $_SESSION["email"] = $this->email;
                $_SESSION["phto"] = $response[0]["photo"];
                $_SESSION["nom"] = $response[0]["nom"];
                return true;
            }
            else{
                throw new MyExceptions("mot de passe incorect");
            }
        }else{
            throw new MyExceptions("Adresse mail invalid");
        }

    }
}
    
