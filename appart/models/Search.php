<?php
namespace Appart\models;
use Appart\includes\bd\connexion;

class Search{

    private string $motcle;

    public function __construct(string $motcle){
        $this->$motcle = $motcle;
    }

    // recherche selon les tables

    public function research(){

        // table proprietaires 
        $proprietaires = $this->personne("proprietaire");

        // tables locataires
        $locataires = $this->personne("locataire");

        $recherches = [
            "proprietaires" => $proprietaires,
            "locataires" => $locataires];
        
        return $recherches;
      
    }

    public function personne(string $who){
        $connexion = connexion::connexion();
        
        $motcle = $this->getMotcle();
        $requete = "SELECT * FROM $who WHERE `Nom` LIKE '%$motcle%'
        OR `Prenom` LIKE '%$motcle%'
        OR `mail` LIKE '%$motcle%';";


        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([
        ]);

        $Locataires=[];
        $Proprietaires= [];
        
        if($execution) {
            if($who == "locataire"){
                while($datasql = $stetment -> fetch() ) {
                    $data = Locataire::schematisedata($datasql, "locataire" );
                    $Locataire = new Locataire($data["Nom"], $data["Prenom"], $data["NumeroTel1"], $data["NumeroTel2"], $data["addresse1"], $data["addresse2"], $data["codePostal"], $data["mail"], $data["photo"]) ;
                    $Locataires[$data['id']]= $Locataire;   
                }
                return $Locataires;
            }
            else{
                while($datasql = $stetment -> fetch() ) {
                    $data = Proprietaire::schematisedata($datasql, "Proprietaire" );
                    $Proprietaire = new Proprietaire($data["Nom"], $data["Prenom"], $data["NumeroTel1"], $data["NumeroTel2"], $data["addresse1"], $data["addresse2"], $data["codePostal"], $data["mail"], $data["photo"]) ;
                    $Proprietaires[$data['id']]=$Proprietaire ;  
                    
                }
                return $Proprietaires;
            }
        }
        else return [];
    }


	/**
	 * @return string
	 */
	public function getMotcle(): string {
		return $this->motcle;
	}
	
	/**
	 * @param string $motcle 
	 * @return self
	 */
	public function setMotcle(string $motcle): self {
		$this->motcle = $motcle;
		return $this;
	}
}


