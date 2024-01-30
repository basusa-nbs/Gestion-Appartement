<?php

namespace Appart\vues;
use Appart\control\Appart;
use Appart\models\Proprietaire;
use Appart\models\Locataire;
use Appart\vues\PicList;
use Appart\models\categorie;
use Appart\models\Typer;
use Appart\models\Appartements;
use Appart\models\Tarif;
use Appart\models\Search;

class AppartOption{
    private $action;
    public $params;
    private $media;
    private $css;
    private $templates;
    public function __construct($params){
        $this->params = $params;
        $appel = $this->params[0];
        $this->media = "/appart/includes/media/images/";
        $this->css = "/appart/includes/static/css/";
        $this->templates = dirname(__DIR__) . DIRECTORY_SEPARATOR .'includes' . DIRECTORY_SEPARATOR . 'templates'.DIRECTORY_SEPARATOR;
        $this->$appel();
    }

    public function dashboard(){
        $title = "dashboard";

        $data = [
            "proprioCount" => Proprietaire::getNombre(),
            "proprioCountContrat" => Proprietaire::getNombreContrat(),
            "locataireCount" => Locataire::getNombre(),
            "locataireCountContrat" => Locataire::getNombreContrat(),
            "appartCount" => Appartements::getNombre(),
            "TarifCount" => Tarif::getNombre(),
            "Recents" => PicList::recents()
        ];
        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'dashboard.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'login.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates. 'dashBoard.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    public function proprietaire(){
        $this->personne("proprietaire");
    }
    
    public function locataire(){
        $this->personne("locataire");
    }

    private function personne(string $personne){
        $title = $personne;
        $lastColumn = ($personne == "locataire") ? "Code postal" : "Chiffres" ;
        $personnes = ($personne == "locataire") ? Locataire::getListeLocataires() :  Proprietaire::getListeProprietaires();
        ob_start();
        ?>
            <table class="flexBox-Column-Center with100">
                <thead class="with100">
                  <tr class="titreTable with100">
                    <th class="p10">Photo</th>
                    <th class="p25">Identités</th>
                    <th class="p30">Adresses</th>
                    <th class="p20">Numéro de téléphone</th>
                    <th class="p"><?= $lastColumn ?></th>
                  </tr>
                </thead>
                <tbody class="with100 flexBox-Column-Center">
                    <?php
                    foreach ($personnes as $key => $value) {
                        $lastItem = ($personne == "locataire") ? $value->getCodePostal() : $value->getCodePostal() ;
                    ?>
                        <tr class="row with100">  
                            <td class="p10"><img src=<?php echo '"'.$this->media . $value->getPhoto().'"'?> alt="Photo"></td>
                            <td class="p25"><span class="nom" ><?php echo $value->getNom(). " " . $value->getPrenom() ?></span><br><span class="email" style="font-size:.8rem;"><?= $value->getMail()?></span></td>
                            <td class="p30 adresse" style="font-size:.8rem;">Adresse1 : <?php echo $value->getAdresse1()["Ville"] .'/'.$value->getAdresse1()["commune"].'/'.$value->getAdresse1()["quartier"].'/'.$value->getAdresse1()["avenu"].'/'.$value->getAdresse1()["Numero"] ?>
                                <br>Adresse2 :<?php echo $value->getAdresse2()["Ville"] .'/'.$value->getAdresse2()["commune"].'/'.$value->getAdresse2()["quartier"].'/'.$value->getAdresse2()["avenu"].'/'.$value->getAdresse2()["Numero"] ?>
                            </td>
                            <td class="p20" style="font-size:.8rem;">Tel1 : <?php echo $value->getNumerotel1()["codePays"] . " " . $value->getNumerotel1()["numero"] . '<br>Tel1 :' . $value->getNumerotel2()["codePays"] . " " . $value->getNumerotel2()["numero"] ?> </td>
                            <td class="p10" style="font-family: Poppins-bold;"><?= $lastItem ?></td>
                        </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        <?php
        $donnes = ob_get_clean();

        $data = [
            $donnes,
            PicList::pays()
        ];
        
        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php'?>">
        <?php
        $linkCss = ob_get_clean();


        $pathContent = dirname(__DIR__). DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR .'personne.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    private function formatImage(string $imageName){
        $imageName = str_replace(' ', '\ ', $imageName);
        $imageName = str_replace('(', '\(', $imageName);
        $imageName = str_replace(')', '\)', $imageName);

        return $imageName;
    }

    public  function cartApparts(){
        $appartement = Appartements::getListeAppartements();
        ob_start();
        foreach ($appartement as $key => $value) {
            $proprio = Proprietaire::getProprietaire($value->getIdProprio());
            $tarif = Tarif::getTarif($value->getIdTarif());
            $categorie = categorie::getcatego($value->getCategorie());
            $typ = Typer::gettyp($value->getTypes());
        ?>
            <div class="carte appartement  flexBox-Center">
                <div class="twoChild flexBox imZoom">
                    <div class="imageAppartemets zoom1-1" style="background-image: url(<?= $this->media . $this->formatImage($value->getPhoto()) ?>);">
                    </div>
                </div>
                <div class="aboutAppartement flexBox twoChild">
                    <div class="attributs flexBox prorpietaire">
                        <i class="proprietaire">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z"/>
                            </svg> 
                        </i>
                        <div class="info">
                            <p class="nom"><?= $proprio->getNom() ." ".$proprio->getPrenom() ?></p>
                            <p class="email"><a href="mailto:<?= $proprio->getMail() ?>"><?= $proprio->getMail() ?></a></p>
                            <p class="tel" style="display: flex; gap:1em;">
                                <span class="t1">prixSemHs : <?= $tarif->getprix_semhs() ?> </span>
                                <span class="t2">prixSemHs : <?= $tarif->getprix_semBs() ?> </span>
                            </p>
                        </div>
                    </div>
                    <div class="attributs flexBox adresse">
                        <i class="adresse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                            </svg>
                        </i>
                        <div class="info">
                            <p class="adresse">
                                <?= $value->getVille() .'/'.$value->getCommune().'/'.$value->getQuartier().'/'.$value->getAvenu().'/'.$value->getNumero() ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        $cartApparts = ob_get_clean();
        return $cartApparts;
    }
    
    private function Apparttement(){
        $title = "Apparttement";
        
        $tableApparts = $this->cartApparts();

        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates. 'Apparttement.php';
        
        $data = [
            PicList::personne("Proprietaire"),
            PicList::categorie(),
            PicList::types(),
            PicList::tarif(),
            $tableApparts
        ];

        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    private function tarif(){
        $title = "tarif";
        $tarifs = Tarif::getListetarifs();


        ob_start();
        foreach ($tarifs as $key => $value) {
        ?>
            <div class="tarif">
                <div class="temes with100">
                    <div class="contenThemes with100">
                        
                    </div>
                </div>
                <div class="tarifinfo">
                    <h3 class="codetarif"><?= $value->getcode_tarif() ?></h3>
                    <p class="prix">
                        <span>prixemHS</span>
                        <span><?= $value->getprix_semhs() ?></span>
                    </p>
                    <p class="prix">
                        <span>prixemBS</span>
                        <span><?= $value->getprix_semBs() ?></span>
                    </p>
                </div>
            </div>
        <?php
        }

        $tableTarifs = ob_get_clean();
        // var_dump($tableTarifs);

        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'tarif.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates. 'tarif.php';
        $this->Affichage($linkCss, $title, $pathContent, $tableTarifs);
    }

    private function search(){
        // var_dump($_GET);
        // die;
        $mot = $_GET["search"];
        $search = new Search("seraphin");
        $search->setMotcle("$mot");
        
        $result = $search->research();
        $retVal = (sizeof($result["locataires"])== 0 && sizeof($result["proprietaires"]) == 0) ? "zero reultat trouvé" : $result ;
        $result = [
            "motcle"=>$mot,
            "response"=>$retVal
        ];

        $title = "recherche";
        if($result["response"] == "zero reultat trouvé"){
           $donnes = "";
           $n = $retVal ;
        }
        else{
            ob_start();
            foreach ($result["response"] as $key => $value) {
                $personne = $key;
                $lastColumn = ($personne == "locataires ") ? "Code postal" : "Chiffres" ;
                $personnes = $value;
                ?>
                    <p class="who">la liste des <?=$key;?></p>
                    <table class="flexBox-Column-Center with100">
                        <thead class="with100">
                        <tr class="titreTable with100">
                            <th class="p10">Photo</th>
                            <th class="p25">Identités</th>
                            <th class="p30">Adresses</th>
                            <th class="p20">Numéro de téléphone</th>
                            <th class="p"><?= $lastColumn ?></th>
                        </tr>
                        </thead>
                        <tbody class="with100 flexBox-Column-Center">
                            <?php
                            foreach ($personnes as $key => $value) {
                                $lastItem = ($personne == "locataire") ? $value->getCodePostal() : $value->getCodePostal() ;
                            ?>
                                <tr class="row with100">  
                                    <td class="p10"><img src=<?php echo '"'.$this->media . $value->getPhoto().'"'?> alt="Photo"></td>
                                    <td class="p25"><span class="nom" ><?php echo $value->getNom(). " " . $value->getPrenom() ?></span><br><span class="email" style="font-size:.8rem;"><?= $value->getMail()?></span></td>
                                    <td class="p30 adresse" style="font-size:.8rem;">Adresse1 : <?php echo $value->getAdresse1()["Ville"] .'/'.$value->getAdresse1()["commune"].'/'.$value->getAdresse1()["quartier"].'/'.$value->getAdresse1()["avenu"].'/'.$value->getAdresse1()["Numero"] ?>
                                        <br>Adresse2 :<?php echo $value->getAdresse2()["Ville"] .'/'.$value->getAdresse2()["commune"].'/'.$value->getAdresse2()["quartier"].'/'.$value->getAdresse2()["avenu"].'/'.$value->getAdresse2()["Numero"] ?>
                                    </td>
                                    <td class="p20" style="font-size:.8rem;">Tel1 : <?php echo $value->getNumerotel1()["codePays"] . " " . $value->getNumerotel1()["numero"] . '<br>Tel1 :' . $value->getNumerotel2()["codePays"] . " " . $value->getNumerotel2()["numero"] ?> </td>
                                    <td class="p10" style="font-family: Poppins-bold;"><?= $lastItem ?></td>
                                </tr>
                            <?php
                            }?>
                        </tbody>
                    </table>
                <?php
            }
            $donnes = ob_get_clean();
            $n = "";
        }

        $data = [
            $mot,
            $donnes,
            $n
        ];
        
        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php'?>">
        <?php
        $linkCss = ob_get_clean();


        $pathContent = dirname(__DIR__). DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR .'search.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    private function Affichage($linkCss,  $title, $pathContent, $data = ""){
        
        ob_start();
        require $pathContent;
        $content = ob_get_clean();
        
        require dirname(__DIR__). DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'layout.php';
    }
}

