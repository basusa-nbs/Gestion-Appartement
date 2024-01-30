<?php
namespace Appart\models;
use Appart\includes\bd\connexion;

class categorie{

    private string $categorie;

    public function __construct(string $_categorie){
        $this->categorie = $_categorie;
    }

    public static function getcatego(int $id){
        $connexion = connexion::connexion();

        $requete = "SELECT * FROM categorie WHERE idCategorie = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        if($execution) {
            while($data = $stetment->fetch() ) {
                $catego = new categorie($data["Categorie"]);
                return $catego;
            }
        }
    }
    public static function getListCategorie(){
        $connexion = connexion::connexion();
        
        $requete = "SELECT * FROM categorie ORDER BY idCategorie ASC";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([]);

        $categories = [];
        if($execution) {
            while($data = $stetment -> fetch() ) {
                $categ = new categorie($data["Categorie"]);
                $categories[$data['idCategorie']] = $categ;   
            }
            return $categories;
        }
        else return [];
    }

	/**
	 * @return string
	 */
	public function getCategorie(): string {
		return $this->categorie;
	}
	
	/**
	 * @param string $categorie 
	 * @return self
	 */
	public function setCategorie(string $categorie): self {
		$this->categorie = $categorie;
		return $this;
	}
}