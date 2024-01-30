<?php

namespace Appart\vues;

use Appart\models\Contrat;
use Appart\models\Proprietaire;
use Appart\models\Locataire;
use Appart\vues\PicList;
use Appart\models\categorie;
use Appart\models\Typer;
use Appart\models\Appartements;
use Appart\models\Tarif;
use Dompdf\Dompdf;
use Dompdf\Options;


class Imprimer{
    private $action;
    public $params;
    private $media;
    private $css;
    private $templates;
    public function __construct($params)
    {
        $this->params = $params;
        $appel = $this->params[0];
        $this->media = "/appart/includes/media/images/";
        $this->css = "/appart/includes/static/css/";
        $this->templates = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;
        $this->$appel();
    }


    public function printPropietaire()
    {
        $this->personne("proprietaire");
    }

    public function printLocataire()
    {
        $this->personne("locataire");
    }

    private function personne(string $personne)
    {
        $title = $personne;
        $lastColumn = ($personne == "locataire") ? "Code postal" : "Chiffres";
        $personnes = ($personne == "locataire") ? Locataire::getListeLocataires() : Proprietaire::getListeProprietaires();
        ob_start();
        ?>
        <table style="
        font-family: 'Poppins-regular',  'courier','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border-spacing:border-collapse: collapse;
        ">
            <thead style="background-color: transparent !important;">
                <tr style="text-align: start; margin-bottom: 10px;
                background-color:#4e73df; color:#fff; padding:5px">
                    <th style="width:15%; text-align: center;">Photo</th>
                    <th style="width:20%; text-align: start;">Identités</th>
                    <th style="width:25%; text-align: start;">Adresses</th>
                    <th style="width:20%; text-align: left;">Numéro de téléphone</th>
                    <th style="width:12%; text-align: center;">
                        <?= $lastColumn ?>
                    </th>
                </tr>
            </thead>
            <tbody style="diplay:block; margin-top:10px" >
                <?php
                foreach ($personnes as $key => $value) {
                    $lastItem = ($personne == "locataire") ? $value->getCodePostal() : $value->getCodePostal();
                    ?>
                    <tr style="border-bottom:1px solid black; background-color:#fefefe">
                        <td style="width:15%; text-align: center; padding:10px;"><img style="border-radius: 50%; width:100px !important;" width="100px" height="100px" src=<?php echo '"' . $this->media . $value->getPhoto() . '"' ?> alt="Photo"></td>
                        <td style="width:20%;"><span class="nom">
                                <?php echo $value->getNom() . " " . $value->getPrenom() ?>
                            </span><br><span class="email" >
                                <?= $value->getMail() ?>
                            </span></td>
                        <td style="font-size:.8rem; width:25%; center; padding:10px;">Adresse1 :
                            <?php echo $value->getAdresse1()["Ville"] . '/' . $value->getAdresse1()["commune"] . '/' . $value->getAdresse1()["quartier"] . '/' . $value->getAdresse1()["avenu"] . '/' . $value->getAdresse1()["Numero"] ?>
                            <br>Adresse2 :
                            <?php echo $value->getAdresse2()["Ville"] . '/' . $value->getAdresse2()["commune"] . '/' . $value->getAdresse2()["quartier"] . '/' . $value->getAdresse2()["avenu"] . '/' . $value->getAdresse2()["Numero"] ?>
                        </td>
                        <td style="font-size:.8rem; width:20%; padding:10px; text-align: left;">Tel1 :
                            <?php echo $value->getNumerotel1()["codePays"] . " " . $value->getNumerotel1()["numero"] . '<br>Tel2 : ' . $value->getNumerotel2()["codePays"] . " " . $value->getNumerotel2()["numero"] ?>
                        </td>
                        <td style="width:10%; center; padding:10px; text-align: center;">
                            <?= $lastItem ?>
                        </td>
                    </tr>
                    <?php
                } ?>
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
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php' ?>">
        <?php
        $linkCss = ob_get_clean();


        $pathContent = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'printLocataire.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    private function formatImage(string $imageName){
        $imageName = str_replace(' ', '\ ', $imageName);
        $imageName = str_replace('(', '\(', $imageName);
        $imageName = str_replace(')', '\)', $imageName);

        return $imageName;
    }

    public function cartApparts()
    {
        $appartement = Appartements::getListeAppartements();
        ob_start();
        foreach ($appartement as $key => $value) {
            $proprio = Proprietaire::getProprietaire($value->getIdProprio());
            $tarif = Tarif::getTarif($value->getIdTarif());
            $categorie = categorie::getcatego($value->getCategorie());
            $typ = Typer::gettyp($value->getTypes());
            ?>
            <div class="carte appartement  flexBox-Center"
            style="flex-direction: column; width: 100%;align-items: stretch!important; display: flex;justify-content: center;">
                <div class="twoChild flexBox imZoom"
                style="width: 100% !important;flex-grow: 1;
                        align-items: stretch!important;
                        overflow: hidden;display: flex;"  >
                    <div class="imageAppartemets zoom1-1"
                        style="background-image: url(<?= $this->media . $this->formatImage($value->getPhoto()) ?>);
                        height: 250px;flex-grow: 1;background-size: cover;">
                    </div>
                </div>
                <div class="aboutAppartement flexBox twoChild"
                style="padding: 1em;
                        gap: .1em;
                        flex-direction: column;display: flex; width: 100% !important;">
                    <div class="attributs flexBox prorpietaire">
                        <i class="proprietaire">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 640 512">
                                <path
                                    d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z" />
                            </svg>
                        </i>
                        <div class="info">
                            <p class="nom">
                                <?= $proprio->getNom() . " " . $proprio->getPrenom() ?>
                            </p>
                            <p class="email"><a href="mailto:<?= $proprio->getMail() ?>"><?= $proprio->getMail() ?></a></p>
                            <p class="tel" style="display: flex; gap:1em;">
                                <span class="t1">prixSemHs :
                                    <?= $tarif->getprix_semhs() ?>
                                </span>
                                <span class="t2">prixSemHs :
                                    <?= $tarif->getprix_semBs() ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="attributs flexBox adresse">
                        <i class="adresse">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 384 512">
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                            </svg>
                        </i>
                        <div class="info">
                            <p class="adresse">
                                <?= $value->getVille() . '/' . $value->getCommune() . '/' . $value->getQuartier() . '/' . $value->getAvenu() . '/' . $value->getNumero() ?>
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

    private function printApparts(){
        $title = "Apparttement";

        $tableApparts = $this->cartApparts();

        ob_start();
        ?>
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php' ?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates . 'printApparts.php';

        $data = [
            PicList::personne("Proprietaire"),
            PicList::categorie(),
            PicList::types(),
            PicList::tarif(),
            $tableApparts
        ];

        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    public function printcontrat()
    {
        $title = "passer un contrat";
        $Contrats = Contrat::getListeContrats();

        ob_start();
        foreach ($Contrats as $key => $value) {
            $appartement = Appartements::getAppartement($value->getIdApparts());
            $proprio = Proprietaire::getProprietaire($appartement->getIdProprio());
            $Locataire = Locataire::getLocataire($value->getIdLocataire());
            ?>
            <div class="tarif">
                <div class="contratinfo flexBox with100">
                    <p class="nom">Propriétaire <br>
                        <?= $proprio->getNom() . " " . $proprio->getPrenom() ?>
                    </p>
                    <p class="nom">Locataire <br>
                        <?= $Locataire->getNom() . " " . $Locataire->getPrenom() ?>
                    </p>
                    <p>Date création :
                        <?= $value->getDateCreation() ?>
                    </p>
                    <p>Date Début :
                        <?= $value->getDateDebut() ?>
                    </p>
                    <p>Date Fin :
                        <?= $value->getDateFin() ?>
                    </p>
                </div>
                <div class="tarifinfo <?= $value->getEtat() ?>">
                    <h2>
                        <?= $value->getEtat() ?> ...
                    </h2>
                </div>
            </div>
            <?php
        }
        $dataContrats = ob_get_clean();

        $data = [
            PicList::cartApparts(),
            PicList::personne("locataire"),
            $dataContrats
        ];
        ob_start();
        ?>
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'tarif.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php' ?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates . 'printcontrat.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    private function tarif()
    {
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
                    <h3 class="codetarif">
                        <?= $value->getcode_tarif() ?>
                    </h3>
                    <p class="prix">
                        <span>prixemHS</span>
                        <span>
                            <?= $value->getprix_semhs() ?>
                        </span>
                    </p>
                    <p class="prix">
                        <span>prixemBS</span>
                        <span>
                            <?= $value->getprix_semBs() ?>
                        </span>
                    </p>
                </div>
            </div>
            <?php
        }

        $tableTarifs = ob_get_clean();
        // var_dump($tableTarifs);

        ob_start();
        ?>
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'tarif.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php' ?>">
        <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php' ?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates . 'tarif.php';
        $this->Affichage($linkCss, $title, $pathContent, $tableTarifs);
    }

    private function Affichage($linkCss, $title, $pathContent, $data = "")
    {

        ob_start();
        require $pathContent;
        $content = ob_get_clean();

        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'layout.php';
    }

    public static function imprimer($html, $who)
    {
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        // instantiate and use the dompdf class

        $dompdf = new Dompdf($options);
        // Remplacez par votre contenu HTML
        $dompdf->loadHtml($html);


        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        
        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        // $dompdf->stream();
        $output = $dompdf->output(); // Récupérer le contenu PDF dans une variable
        file_put_contents($who.'.pdf', $output); // Enregistrer le PDF dans un fichier

    }
}