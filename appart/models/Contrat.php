<?php
namespace Appart\models;
use Appart\includes\bd\connexion;


class Contrat{

    private string $Etat;
    private string $DateCreation;
    private string $DateDebut;
    private string $DateFin;
    private int $idApparts;
    private int $idLocataire;


    /**
     * Constructeur de la classe Contrat, cette classe lie un Contrat à un locataire, sachant aussi q'un appqrtement est lie a un proprietaire
     * Exemple $contrat = new Contrat(Etat, 12-12-22, 20-12-22, 20-6-22  23, 5, 7)
     * @param string $Etat
     * @param string $DateCreation
     * @param string $DateDebut
     * @param string $DateFin
     * @param int $idApparts
     * @param int $idLocataire
     */
    public function __construct( string $Etat,int $idLocataire,  int $idApparts, string $DateCreation, string $DateDebut, string $DateFin){
        $this->Etat = $Etat;
        $this->DateCreation = $DateCreation;
        $this->DateDebut = $DateDebut;
        $this->DateFin = $DateFin; 
        $this->idApparts = $idApparts;
        $this->idLocataire = $idLocataire;
    }

    public function CreerUnContrat(){
        $requete = "INSERT INTO contrat(
            Etat,
            DateCreation,
            DateDebut,
            DateFin,
            idApparts,
            idLocataire
          )
        VALUES (?,?,?,?,?,?);";
        
        $this->execute($requete);
    }

    static function getListeContrats(){
        
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM contrat ORDER BY idContrat DESC";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $Contrats = [];
        if($execution) {
            while($data = $stetment->fetch() ) {
                $Contrat = new Contrat($data["Etat"], $data["idLocataire"], $data["idApparts"], $data["DateCreation"], $data["DateDebut"], $data["DateFin"]) ;
                $Contrats[$data['idContrat']]= $Contrat;   
            }
            return $Contrats;
        }
        else return [];
    }
    public function ModifeirUnContrat(int $identifiant){
        $connexion = connexion::connexion();
        
        $requete = "UPDATE contrat 
        SET Etat = '".$this->getEtat()."',
        DateCreation='".$this->getDateCreation()."',
        DateDebut= '".$this->getDateDebut()."',
        DateFin= '".$this->getDateFin()."',
        idApparts= '".$this->getidApparts()."',
        idLocataire= '".$this->getidLocataire()."'
        WHERE  idContrat= '".$identifiant."';";

        $statment = $connexion->prepare($requete) ; 

        $execution = $statment->execute([]);

        if (!$execution) {
            throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
        } 


    }

    public static function resilieContrat(array $identifiants){
        $connexion = connexion::connexion();
        $array = "";
        
        foreach ($identifiants as $key => $value) {
            
            $requete = "UPDATE contrat SET Etat = 'resilie' WHERE idContrat = '".$value."';";

            $statement = $connexion->prepare($requete);

            $execution = $statement->execute([]);
        }

        if (!$execution) {
            throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
        } 

    }

    private  function execute($requete){
        $connexion = connexion::connexion();
        $statment = $connexion->prepare($requete) ; 

        
        $execution = $statment->execute([
            $this->getEtat(),
            $this->getDateCreation(),
            $this->getDateDebut(),
            $this->getDateFin(),
            $this->getidApparts(),
            $this->getidLocataire()

        ]);


        if (!$execution) {
            throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
        } 

    }

	
	/**
	 * @return string
	 */
	public function getEtat(): string {
		return $this->Etat;
	}
	
 /**
  * @return string
  */
	public function getDateCreation() {
        $DateCreation = date_create($this->DateCreation);
		return $DateCreation->format("Y-m-d");
	}
	
	/**
	 * @return string
	 */
	public function getDateDebut(): string {
        $DateDebut = date_create($this->DateDebut);
		return $DateDebut->format("Y-m-d");
		
	}
	
	/**
	 * @return string
	 */
	public function getDateFin(): string {
        $DateFin = date_create($this->DateFin);
		return $DateFin->format("Y-m-d");
		
	}
	
	/**
	 * @return int
	 */
	public function getIdApparts(): int {
		return $this->idApparts;
	}
	
	/**
	 * @return int
	 */
	public function getIdLocataire(): int {
		return $this->idLocataire;
	}
}