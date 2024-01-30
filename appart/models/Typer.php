<?php
namespace Appart\models;
use Appart\includes\bd\connexion;

class Typer{

    private string $Type;
    private string $description;

    public function __construct(string $_Type, string $_description){
        $this->Type = $_Type;
        $this->description = $_description;
    }

    public static function getListType(){
        $connexion = connexion::connexion();
        
        $requete = "SELECT * FROM types ORDER BY idTypes ASC";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $Types = [];
        if($execution) {
            while($data = $stetment -> fetch() ) {
                $typ = new Typer($data["Types"], $data["descriptions"] );
                $Types[$data['idTypes']] = $typ;   
            }
            return $Types;
        }
        else return [];
    }

	public static function gettyp(int $id){
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM types WHERE idTypes = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        if($execution) {
            while($data = $stetment->fetch() ) {
                $typ = new Typer($data["Types"], $data["descriptions"] );
                return $typ;
            }
        }
    }

	/**
	 * @return string
	 */
	public function getType(): string {
		return $this->Type;
	}
	
	/**
	 * @param string $Type 
	 * @return self
	 */
	public function setType(string $Type): self {
		$this->Type = $Type;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}
	
	/**
	 * @param string $description 
	 * @return self
	 */
	public function setDescription(string $description): self {
		$this->description = $description;
		return $this;
	}
}