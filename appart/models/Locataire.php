<?php
namespace Appart\models;
use Appart\includes\bd\connexion;
use Appart\models\Personne;

class Locataire extends Personne{
    
    public function __construct(string $nom, string $prenom, array $numerotel1, array $numerotel2, array $adresse1, array $adresse2, string $codePostal, string $mail, string $photo){
        parent::__construct($nom, $prenom, $numerotel1, $numerotel2, $adresse1, $adresse2, $codePostal, $mail, $photo);
    }

    public function EnregistrerLocataire(){
        return $this->EnregistrerPersonne("locataire");
    }   
    static function getListeLocataires() {
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM locataire ORDER BY idLocataire DESC";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $Locataires = [];
        if($execution) {
            while($datasql = $stetment -> fetch() ) {
                $data = Locataire::schematisedata($datasql, "locataire" );
                $Locataire = new Locataire($data["Nom"], $data["Prenom"], $data["NumeroTel1"], $data["NumeroTel2"], $data["addresse1"], $data["addresse2"], $data["codePostal"], $data["mail"], $data["photo"]) ;
                $Locataires[$data['id']]= $Locataire;   
            }
            return $Locataires;
        }
        else return [];
    }
    public static function getLocataire(int $id){
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM Locataire WHERE idLocataire = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        if($execution) {
            while($datasql = $stetment->fetch() ) {
                $data = Locataire::schematisedata($datasql, "locataire" );
                $Locataire = new Locataire($data["Nom"], $data["Prenom"], $data["NumeroTel1"], $data["NumeroTel2"], $data["addresse1"], $data["addresse2"], $data["codePostal"], $data["mail"], $data["photo"]) ;
                return $Locataire;
            }
        }
    }
    public static function getNombre(){
        $connexion = connexion::connexion();

        $requete = "SELECT COUNT(*) AS nb FROM Locataire;";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute();

        $count = 0;
        if($execution) {
            while($datasql = $stetment->fetch() ) {
                $count = $datasql["nb"];
                return $count;
            }
        }
        return $count;
    }

    public static function getNombreContrat(){
        $connexion = connexion::connexion();

        $requete = "SELECT DISTINCT idLocataire FROM contrat;";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $count = 0;

        if($execution){
            return sizeof($stetment->fetchAll());
        }
        
        return $count;
    }

}