<?php
namespace Appart\models;
use Appart\includes\bd\connexion;

class Personne{
    private string $nom;
    private string $prenom;
    private array $numerotel1;
    private array $numerotel2;
    private array $adresse1;
    private array $adresse2;
    private string $codePostal;
    private string $mail;
	private string $photo;

	

    public function __construct(string $nom, string $prenom, array $numerotel1, array $numerotel2, array $adresse1, array $adresse2, string $codePostal, string $mail, string $photo){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numerotel1 = $numerotel1;
        $this->numerotel2 = $numerotel2;
        $this->adresse1 = $adresse1;
        $this->adresse2 = $adresse2;
        $this->codePostal = $codePostal;
		$this->photo = $photo;
		$this->mail = $mail;

    }

	public function EnregistrerPersonne($personne){
        $connexion = connexion::connexion();
        $requete = "INSERT INTO $personne (
            Nom,
            Prenom,
            idPays1,
            idPays2,
            NumeroTel1,
            NumeroTel2,
            Ville1,
            Ville2,
            Commune1,
            Commune2,
            Quartier1,
            Quartier2,
            Avenue1,
            Avenue2,
            Numero1,
            Numero2,
            codePostal,
            mail,
            photo
          )
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
        
        $statment = $connexion->prepare($requete) ; 

        $execution = $statment->execute([
            $this->getNom(),
            $this->getPrenom(),
            $this->getNumerotel1()["codePays"],
            $this->getNumerotel2()["codePays"],
            $this->getNumerotel1()["numero"],
            $this->getNumerotel2()["numero"],
            $this->getAdresse1()["Ville"],
            $this->getAdresse2()["Ville"],
            $this->getAdresse1()["commune"],
            $this->getAdresse2()["commune"],
            $this->getAdresse1()["quartier"],
            $this->getAdresse2()["quartier"],
            $this->getAdresse1()["avenu"],
            $this->getAdresse2()["avenu"],
            $this->getAdresse1()["Numero"],
            $this->getAdresse2()["Numero"],
            $this->getCodePostal(),
            $this->getMail(),
            $this->getPhoto()
        ]) ;

        if (!$execution) {
            throw new \Exception("Error : erreur lors de la connexion, veuillez essayer plus tard");
        } 
    }

	static function schematisedata(array $data, $Personne){
		$id = $Personne == "locataire" ? "idLocataire": "idProprio";
        $shemas = [
            "id"=>$data[$id],
            "Num"=> $data["Num"],
            "Nom"=>$data["Nom"],
            "Prenom"=>$data["Prenom"],
            "NumeroTel1"=>[
                "codePays"=>$data["idPays1"],
                "numero"=>$data["NumeroTel1"]
            ],
            "NumeroTel2"=>[
                "codePays"=>$data["idPays2"],
                "numero"=>$data["NumeroTel2"]
            ],
            "addresse1"=>[
                "Ville"=>$data["Ville1"],
                "commune"=>$data["Commune1"],
                "quartier"=>$data["Quartier1"],
                "avenu"=>$data["Avenue1"],
                "Numero"=>$data["Numero1"]
            ],
            "addresse2"=>[
                "Ville"=>$data["Ville2"],
                "commune"=>$data["Commune2"],
                "quartier"=>$data["Quartier2"],
                "avenu"=>$data["Avenue2"],
                "Numero"=>$data["Numero2"]
            ],
            "codePostal"=>$data["codePostal"],
            "mail"=>$data["mail"],
            "photo"=>$data["photo"],
        ];
        return $shemas;
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
	 * @return array
	 */
	public function getNumerotel1(): array {
		return $this->numerotel1;
	}
	
	/**
	 * @param array $numerotel1 
	 * @return self
	 */
	public function setNumerotel1(array $numerotel1): self {
		$this->numerotel1 = $numerotel1;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getNumerotel2(): array {
		return $this->numerotel2;
	}
	
	/**
	 * @param array $numerotel2 
	 * @return self
	 */
	public function setNumerotel2(array $numerotel2): self {
		$this->numerotel2 = $numerotel2;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getAdresse1(): array {
		return $this->adresse1;
	}
	
	/**
	 * @param array $adresse1 
	 * @return self
	 */
	public function setAdresse1(array $adresse1): self {
		
		$this->adresse1 = $adresse1;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getAdresse2(): array {
		return $this->adresse2;
	}
	
	/**
	 * @param array $adresse2 
	 * @return self
	 */
	public function setAdresse2(array $adresse2): self {
		$this->adresse2 = $adresse2;
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

}