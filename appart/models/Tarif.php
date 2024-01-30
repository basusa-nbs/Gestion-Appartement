<?php
namespace Appart\models;
use Appart\includes\bd\connexion;


class Tarif{
    private int $code_tarif;
    private int $prix_semhs;
    private int $prix_semBs;


    public function __construct(int $code_tarif, int $prix_semhs, int $prix_semBs){
        $this->code_tarif = $code_tarif;
        $this->prix_semhs = $prix_semhs;
        $this->prix_semBs = $prix_semBs;
        
    }

    
    public function CreerUntarif(){
        $connexion = connexion::connexion();

        $requete = "INSERT INTO tarif(
            code_tarif,
            prix_semhs,
            prix_semBs
          )
        VALUES (?,?,?);";
        
        $statment = $connexion->prepare($requete) ; 

        $execution = $statment->execute([
            $this->getcode_tarif(),
            $this->getprix_semhs(),
            $this->getprix_semBs()
        ]);

        if (!$execution) {
            throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
        } 
    }

    public static function getTarif(int $id){
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM tarif WHERE idTarif = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        if($execution) {
            while($data = $stetment->fetch() ) {
                $tarif = new tarif($data["code_tarif"], $data["prix_semhs"], $data["prix_semBs"]) ;
                return $tarif;
            }
        }
    }
    public static function getListetarifs(){
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM tarif ORDER BY idTarif DESC";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $tarifs = [];
        if($execution) {
            while($data = $stetment->fetch() ) {
                $tarif = new tarif($data["code_tarif"], $data["prix_semhs"], $data["prix_semBs"]) ;
                $tarifs[$data['idTarif']]= $tarif;   
            }
            return $tarifs;
        }
        else return [];
    }
    public function ModifeirUntarif(){
        $connexion = connexion::connexion();

        $requete = "UPDATE TABLE tarif SET 
            code_tarif = ?
            prix_semhs = ?
            prix_semBs = ?"; 

        $statement = $connexion->prepare($requete);

        global $connexion;
        $statment = $connexion->prepare($requete) ; 

        $execution = $statment->execute([
            "code_tarif"=>$this->getcode_tarif(),
            "prix_semhs"=>$this->getprix_semhs(),
            "prix_semBs"=>$this->getprix_semBs()
        ]);
                
        if (!$execution) {
            throw new \Exception("Error => erreur lors de la connexion, veuillez essayer plus tard");
        } 

    }

    public static function getNombre(){
        $connexion = connexion::connexion();

        $requete = "SELECT COUNT(*) AS nb FROM tarif;";

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
	 * @return int
	 */
	public function getcode_tarif(): int {
		return $this->code_tarif;
	}
	
	/**
	 * @return int
	 */
	public function getprix_semhs(): int {
		return $this->prix_semhs;
	}
	
	/**
	 * @return int
	 */
	public function getprix_semBs(): int {
		return $this->prix_semBs;
	}
}