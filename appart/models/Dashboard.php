<?php
namespace Appart\models;
use Appart\includes\bd\connexion;
class Dashboard{

    private string $tablename;
    private string $Typeopetation;
    private object $datetime;

    public function __construct(string $NomOperation, string $typeOperation, object $datetime){
        $this->tablename = $NomOperation;
        $this->Typeopetation = $typeOperation;
        $this->datetime = $datetime;
    }

    public function recents(){
        $connexion = connexion::ConGestion();

        $requete = "INSERT INTO Acticites(
            idOperation,
            TableName,
            TempCreation,
            typeOperation
          )
        VALUES (?,?,?,?);";
        
        $statment = $connexion->prepare($requete) ; 

        $execution = $statment->execute([
            1,
            $this->getTablename(),
            $this->getDatetime()->format("Y-m-d H:i:s"),
            $this->getTypeopetation()
        ]);

        if (!$execution) {
            throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
        } 
    }

    public static function activites(){
        $connexion = connexion::ConGestion();

        $requete = "SELECT * FROM Acticites ORDER BY id DESC";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $Activites = [];
        if($execution) {
            while($data = $stetment->fetch() ) {
                $activite = new Dashboard($data["TableName"], $data["typeOperation"], new \DateTime($data["TempCreation"])) ;
                $Activites[$data['id']]= $activite;   
            }
            return $Activites;
        }
        else return [];
    }
    

	/**
	 * @return string
	 */
	public function getTablename(): string {
		return $this->tablename;
	}
	
	/**
	 * @param string $tablename 
	 * @return self
	 */
	public function setTablename(string $tablename): self {
		$this->tablename = $tablename;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTypeopetation(): string {
		return $this->Typeopetation;
	}
	
	/**
	 * @param string $Typeopetation 
	 * @return self
	 */
	public function setTypeopetation(string $Typeopetation): self {
		$this->Typeopetation = $Typeopetation;
		return $this;
	}

	/**
	 * @return object
	 */
	public function getDatetime(): object {
		return $this->datetime;
	}
	
	/**
	 * @param object $datetime 
	 * @return self
	 */
	public function setDatetime(object $datetime): self {
		$this->datetime = $datetime;
		return $this;
	}
}