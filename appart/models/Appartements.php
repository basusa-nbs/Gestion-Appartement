<?php
namespace Appart\models;
use Appart\includes\bd\connexion;



class Appartements{
    private int $NbrePersonnes ;
    private string $Ville ;
    private string $commune ;
    private string $Quartier ;
    private string $Avenu ;
    private string $numero ;
    private int $idProprio ;
    private int $idTarif ;
    private int $Categorie ;
    private int $Types ;
    private string $photo;
	private array $equipement;

	public function __construct(int $_NbrePersonnes, string $_ville, string $_commune, string $_quartier, string $_avenu, string $_numero,  int $_idpropprio, int $_idTarif, int $_Categorie, int $_Types, string $_photo, array $equipement){
        $this->NbrePersonnes = $_NbrePersonnes;
        $this->Ville = $_ville;
        $this->commune = $_commune;
        $this->Quartier = $_quartier;
        $this->Avenu = $_avenu;
        $this->numero = $_numero;
        $this->idProprio = $_idpropprio;
        $this->idTarif = $_idTarif;
        $this->Categorie = $_Categorie;
        $this->Types = $_Types;
        $this->photo = $_photo;
		$this->equipement = $equipement;
    }

	public function EnregistrerAppartements(){
        $connexion = connexion::connexion();
        $requete = "INSERT INTO appartements(
            NbrePersonnes,
            Ville,
            commune,
            Quartier,
            Avenue,
            numero,
            idProprio,
            idTarif,
            Categorie,
            Types,
            photo
          )
        VALUES (?,?,?,?,?,?,?,?,?,?,?);";
        
        $statment = $connexion->prepare($requete) ; 

        $execution = $statment->execute([
            $this->getNbrePersonnes(),
            $this->getVille(),
            $this->getCommune(),
            $this->getQuartier(),
            $this->getAvenu(),
            $this->getNumero(),
            $this->getIdProprio(),
            $this->getIdTarif(),
            $this->getCategorie(),
            $this->getTypes(),
            $this->getPhoto()
        ]);


        if (!$execution) {
            throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
        } 

		$this->EnregistrerEquipements();
    }

	public function EnregistrerEquipements(){
		$connexion = connexion::connexion();

        $requete = "INSERT INTO equipements(
            Equipements,
            idAppartement
          )
        VALUES (?,?);";
        

		foreach ($this->equipement as $key => $value) {
			
			$statment = $connexion->prepare($requete) ; 

			$execution = $statment->execute([
				$value,
				$this->lastid()
			]);

			if (!$execution) {
				throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
			}
		}
	}

	private function lastid(){
		$connexion = connexion::connexion();

        $requette = "SELECT idApparts FROM appartements ORDER BY idApparts DESC LIMIT 1";
        $statement = $connexion->prepare($requette);
        $execution = $statement->execute([]);
        
		if($execution){
			while($data = $statement->fetch()){  ;
                return $data["idApparts"];
            }
		}else{
			return 0;
		}
	}
   
    static function getListeAppartements() {
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM appartements ORDER BY idApparts DESC";

        $statment = $connexion->prepare($requete) ; 
        $execution = $statment->execute([]);

        $Appartements = [];
        if($execution) {
            while($data = $statment->fetch()){  ;
                $Appartement = new Appartements($data["NbrePersonnes"], $data["Ville"], $data["commune"], $data["Quartier"], $data["Avenue"], $data["numero"], $data["idProprio"], $data["idTarif"], $data["Categorie"], $data["Types"], $data["photo"], Appartements::equipement($data["idApparts"])) ;
                $Appartements[$data['idApparts']] = $Appartement;
            }
            return $Appartements;
        }
        else return [];
    }

	public static function getNombre(){
        $connexion = connexion::connexion();

        $requete = "SELECT COUNT(*) AS nb FROM appartements;";

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

 /**
  * Summary of getAppartement
  * @param int $id
  * @return Appartements|bool
  */
	static function getAppartement(int $id){
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM appartements WHERE  idApparts = ?";

        $statment = $connexion->prepare($requete) ; 
        $execution = $statment->execute([
			$id
		]);

        if($execution) {
            while($data = $statment->fetch()){ 
                $Appartement = new Appartements($data["NbrePersonnes"], $data["Ville"], $data["commune"], $data["Quartier"], $data["Avenue"], $data["numero"], $data["idProprio"], $data["idTarif"], $data["Categorie"], $data["Types"], $data["photo"], Appartements::equipement($data["idApparts"])) ;
                return $Appartement;
            }
			return false;
        }
        else return false;
    }
	private static function equipement(string $id){
		$connexion = connexion::connexion();

        $requete = "SELECT Equipements FROM equipements WHERE idAppartement = $id";

        $statment = $connexion->prepare($requete) ; 
        $execution = $statment->execute([]);

        $equipements = [];
        if($execution) {
            while($data = $statment->fetch()){  ;
                $equipements[]= $data["Equipements"];
            }
            return $equipements;
        }
        else return [];
	}
	/**
	 * @return int
	 */
	public function getNbrePersonnes(): int {
		return $this->NbrePersonnes;
	}
	
	/**
	 * @param int $NbrePersonnes 
	 * @return self
	 */
	public function setNbrePersonnes(int $NbrePersonnes): self {
		$this->NbrePersonnes = $NbrePersonnes;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVille(): string {
		return $this->Ville;
	}
	
	/**
	 * @param string $Ville 
	 * @return self
	 */
	public function setVille(string $Ville): self {
		$this->Ville = $Ville;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCommune(): string {
		return $this->commune;
	}
	
	/**
	 * @param string $commune 
	 * @return self
	 */
	public function setCommune(string $commune): self {
		$this->commune = $commune;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getQuartier(): string {
		return $this->Quartier;
	}
	
	/**
	 * @param string $Quartier 
	 * @return self
	 */
	public function setQuartier(string $Quartier): self {
		$this->Quartier = $Quartier;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAvenu(): string {
		return $this->Avenu;
	}
	
	/**
	 * @param string $Avenu 
	 * @return self
	 */
	public function setAvenu(string $Avenu): self {
		$this->Avenu = $Avenu;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumero(): string {
		return $this->numero;
	}
	
	/**
	 * @param string $numero 
	 * @return self
	 */
	public function setNumero(string $numero): self {
		$this->numero = $numero;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdProprio(): int {
		return $this->idProprio;
	}
	
	/**
	 * @param int $idProprio 
	 * @return self
	 */
	public function setIdProprio(int $idProprio): self {
		$this->idProprio = $idProprio;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getIdTarif(): int {
		return $this->idTarif;
	}
	
	/**
	 * @param int $idTarif 
	 * @return self
	 */
	public function setIdTarif(int $idTarif): self {
		$this->idTarif = $idTarif;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCategorie(): int {
		return $this->Categorie;
	}
	
	/**
	 * @param int $Categorie 
	 * @return self
	 */
	public function setCategorie(int $Categorie): self {
		$this->Categorie = $Categorie;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getTypes(): int {
		return $this->Types;
	}
	
	/**
	 * @param int $Types 
	 * @return self
	 */
	public function setTypes(int $Types): self {
		$this->Types = $Types;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoto(): string {
		return $this->photo;
	}
	
	/**
	 * @param string $photo 
	 * @return self
	 */
	public function setPhoto(string $photo): self {
		$this->photo = $photo;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getEquipement(): array {
		return $this->equipement;
	}
	
	/**
	 * @param array $equipement 
	 * @return self
	 */
	public function setEquipement(array $equipement): self {
		$this->equipement = $equipement;
		return $this;
	}
}