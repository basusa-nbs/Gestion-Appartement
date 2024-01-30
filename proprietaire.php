<?php

class Proprietaire{
    private string $nom;
    private string $prenom;
    private string $codePostal;
    private string $mail;
	private string $photo;
    private string $ville;
    private int $cacumule;
    private array $adresse;
    private array $tels;

    public function __construct(string $nom, string $prenom, int $cacumule = 0, string $ville, string $codePostal, string $mail, string $photo, array $adresse, array $tels){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->cacumule = $cacumule;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
		$this->photo = $photo;
		$this->mail = $mail;
        $this->adresse = $adresse;
        $this->tels = $tels;
    }

	public function EnregistrerProprietaire() : bool{
        global $connexion;
        $requete = "INSERT INTO proprietaire (
            nom,
            prenom,
            codePostal
            ville,
            CAcumule,
            email,
            photo
          )
        VALUES (?,?,?,?,?,?,?);";
        
        $statment = $connexion->prepare($requete) ; 

        $execution = $statment->execute([
            $this->getNom(),
            $this->getPrenom(),
            $this->getCodePostal(),
            $this->getVille(),
            $this->getCacumule(),
            $this->getMail(),
            $this->getPhoto()
        ]) ;

        if (!$execution) {
            return false;
        } 

        $bool1 = $this->AjouterLesAdresses();
        $bool2 = $this->AjouterLesNumTels();

        if (!$bool1 || !$bool2) {
            return false;
        }
        return true;
    }	

    public static function getProprietaire(int $id){
        global $connexion;
        

        $requete = "SELECT * FROM proprietaire WHERE numProprietaire = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        if($execution) {
            while($datasql = $stetment->fetch() ) {
                
                $Proprietaire = new Proprietaire(
                    $datasql["nom"],
                    $datasql["prenom"],
                    $datasql["codePostal"],
                    $datasql["ville"],
                    $datasql["CAcumule"],
                    $datasql["email"],
                    $datasql["photo"],
                    Proprietaire::recuperLesAdresse($datasql["numProprietaire"]),
                    Proprietaire::recuperLestels($datasql["numProprietaire"])
                ) ;
                return $Proprietaire;
            }
        }
        return null;
    }

    private function AjouterLesAdresses() : bool{
        global $connexion;
        $requete = "INSERT INTO adresseproprietaire (
            quartier,
            avenue,
            numero,
            numProprietaire
          )
        VALUES (?,?,?,?);";
        
        $statment = $connexion->prepare($requete) ; 
        $id = $this->getLastid();

        foreach ($this->adresse as $key => $value) {
            $execution = $statment->execute([
                $value["quartier"],
                $value["avenue"],
                $value["numero"],
                $id
            ]) ;

            if (!$execution) {
                return false;
            } 
        }
        return true;
    }

    private function AjouterLesNumTels(){
        global $connexion;
        $requete = "INSERT INTO telproprietaire (
            tel,
            numProprietaire
          )
        VALUES (?,?);";
        
        $statment = $connexion->prepare($requete) ; 
        $id = $this->getLastid();

        foreach ($this->tels as $key => $value) {
            $execution = $statment->execute([
                $value,
                $id
            ]) ;

            if (!$execution) {
                return false;
            } 
        }
        return true;
    }

    private  static function recuperLesAdresse($id){
        global $connexion;
        
        $requete = "SELECT * FROM adresseproprietaire WHERE numProprietaire = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        $adrese = [];
        if($execution) {
            while($datasql = $stetment->fetch() ) {
                array_push($adrese,[
                    $datasql["quartier"],
                    $datasql["avenue"],
                    $datasql["numero"]
                ]);
            }
            $adreses = [
                "adresse1"=>$adrese[0],
                "adresse2"=>$adrese[1]
            ];
            return $adreses;
        }
        
    }
    private  static function recuperLestels($id){
        global $connexion;
        
        $requete = "SELECT * FROM telproprietaire WHERE numProprietaire = ?";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute([$id]);

        $tel = [];
        if($execution) {
            while($datasql = $stetment->fetch() ) {
                array_push($tel, $datasql["tel"]);
            }
            $tels = [
                "tel1"=>$tel[0],
                "tel2"=>$tel[1]
            ];
            return $tels;
        }
    }

    private function getLastid(){
        global $connexion;
        $requete = "SELECT numProprietaire FROM proprietaire ORDER BY numProprietaire DESC LIMIT 1";
        $stetment = $connexion->prepare($requete);
        $execution = $stetment ->execute();
        $id = 0;
        if($execution){
            while ($datasql = $stetment->fetch()) {
                $id = $datasql["numProprietaire"];
            }
        }
        return $id;
    }

    public static function getListeProprietaire(){
        global $connexion;

        $requete = "SELECT * FROM Proprietaire ";

        $stetment = $connexion->prepare($requete) ;
        $execution = $stetment ->execute();

        $listeProprietaires = [];
        if($execution) {
            while($datasql = $stetment->fetch()) {
                $Proprietaire = new Proprietaire(
                    $datasql["nom"],
                    $datasql["prenom"],
                    $datasql["codePostal"],
                    $datasql["ville"],
                    $datasql["CAcumule"],
                    $datasql["email"],
                    $datasql["photo"],
                    Proprietaire::recuperLesAdresse($datasql["numProprietaire"]),
                    Proprietaire::recuperLestels($datasql["numProprietaire"])
                );
                $listeProprietaires[$datasql["numProprietaire"]] = $Proprietaire;
            }
        }
        return $listeProprietaires;
    }

	/**
	 * @return string
	 */
	public function getNom(): string {
		return $this->nom;
	}

	/**
	 * @return string
	 */
	public function getPrenom(): string {
		return $this->prenom;
	}
	
	/**
	 * @param string $nom 
	 * @return self
	 */
	public function setNom(string $nom): self {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * @param string $prenom 
	 * @return self
	 */
	public function setPrenom(string $prenom): self {
		$this->prenom = $prenom;
		return $this;
	}
	/**
	 * @return string
	 */
	public function getCodePostal(): string {
		return $this->codePostal;
	}
	
	/**
	 * @param string $codePostal 
	 * @return self
	 */
	public function setCodePostal(string $codePostal): self {
		$this->codePostal = $codePostal;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getMail(): string {
		return $this->mail;
	}
	
	/**
	 * @param string $mail 
	 * @return self
	 */
	public function setMail(string $mail): self {
		$this->mail = $mail;
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
	 * @return string
	 */
	public function getVille(): string {
		return $this->ville;
	}
	
	/**
	 * @param string $ville 
	 * @return self
	 */
	public function setVille(string $ville): self {
		$this->ville = $ville;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCacumule(): int {
		return $this->cacumule;
	}
	
	/**
	 * @param int $cacumule 
	 * @return self
	 */
	public function setCacumule(int $cacumule): self {
		$this->cacumule = $cacumule;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getAdresse(): array {
		return $this->adresse;
	}
	
	/**
	 * @param array $adresse 
	 * @return self
	 */
	public function setAdresse(array $adresse): self {
		$this->adresse = $adresse;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getTels(): array {
		return $this->tels;
	}
	
	/**
	 * @param array $tels 
	 * @return self
	 */
	public function setTels(array $tels): self {
		$this->tels = $tels;
		return $this;
	}
}