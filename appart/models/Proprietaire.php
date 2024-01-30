<?php
namespace Appart\models;
use Appart\models\Personne;
use Appart\control\MyExceptions;
use Appart\includes\bd\connexion;
class Proprietaire extends Personne{

    private String $caCumule;
    private string $id;
    
    public function __construct(string $nom, string $prenom, array $numerotel1, array $numerotel2, array $adresse1, array $adresse2, string $codePostal, string $mail, string $photo){
        parent::__construct($nom, $prenom, $numerotel1, $numerotel2, $adresse1, $adresse2, $codePostal, $mail, $photo);
        $this->caCumule = 0;
    }

    public function EnregistrerProprietaire(){
        return $this->EnregistrerPersonne("Proprietaire");
    }
    static function getListeProprietaires() {
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM Proprietaire ORDER BY idProprio DESC";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $Proprietaires = [];
        if($execution) {
            while($datasql = $stetment -> fetch() ) {
                $data = Proprietaire::schematisedata($datasql, "Proprietaire" );
                $Proprietaire = new Proprietaire($data["Nom"], $data["Prenom"], $data["NumeroTel1"], $data["NumeroTel2"], $data["addresse1"], $data["addresse2"], $data["codePostal"], $data["mail"], $data["photo"]) ;
                $Proprietaires[$data['id']]=$Proprietaire ;  
                
            }
            return $Proprietaires;
        }
        else return [];
    }

    public static function getProprietaire(int $id){
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM Proprietaire WHERE idProprio = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        if($execution) {
            while($datasql = $stetment->fetch() ) {
                $data = Proprietaire::schematisedata($datasql, "Proprietaire" );
                $Proprietaire = new Proprietaire($data["Nom"], $data["Prenom"], $data["NumeroTel1"], $data["NumeroTel2"], $data["addresse1"], $data["addresse2"], $data["codePostal"], $data["mail"], $data["photo"]) ;
                return $Proprietaire;
            }
        }
    }

    public static function getNombre(){
        $connexion = connexion::connexion();

        $requete = "SELECT COUNT(*) AS nb FROM proprietaire;";

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

        $requete = "SELECT DISTINCT idApparts FROM contrat;";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $count = 0;

        if($execution){
            return sizeof($stetment->fetchAll());
        }
        
        return $count;
    }

	/**
	 * @return string
	 */
	public function getCaCumule(): string {
		return $this->caCumule;
	}
	
	/**
	 * @param string $caCumule 
	 * @return self
	 */
	public function setCaCumule(): self {
        global $connexion;
        $this->id = $this->lastid();

        $requette = "UPDATE TABLE Proprietaire SET Cacumule = ? WHERE idProprio = ?";
        $statement = $connexion->prepare($requette);
        $execution = $statement->execute([
            "Cacumule"=>$this->id + 1,
            "Num"=>$this->lastid()]);
        
        if (!$execution){
            throw new MyExceptions("error: caCumule n'a pas pu être mise à jour");
        }
		return $this;
	}

    public function lastid():string{
        $connexion = connexion::connexion();

        $requette = "SELECT idProprio FROM Proprietaire ORDER BY idProprio DESC LIMIT 1";
        $statement = $connexion->prepare($requette);
        $execution = $statement->execute([]);
        
        try {
            if($execution){
                while($data = $statement->fetch()){
                    return $data["Cacumule"];
                }
            }else{
                throw new MyExceptions("error: execution de la requette à generer une erreur ");
            }
        } catch (MyExceptions $e) {
            $e->MaKeOutput();
        }
        return "0";
    }
}