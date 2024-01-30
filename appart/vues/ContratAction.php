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

class ContratAction{
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

    public function passerUnContrat(){
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
                        <p class="nom">Propriétaire <br> <?= $proprio->getNom(). " " . $proprio->getPrenom()  ?></p>
                        <p class="nom">Locataire <br> <?= $Locataire->getNom(). " " . $Locataire->getPrenom()  ?></p>
                        <p>Date création : <?= $value->getDateCreation() ?></p>
                        <p>Date Début : <?= $value->getDateDebut() ?></p>
                        <p>Date Fin : <?= $value->getDateFin() ?></p>
                </div>
                <div class="tarifinfo <?= $value->getEtat()?>">
                    <h2><?= $value->getEtat()?> ...</h2>
                </div>
            </div>
        <?php
        }
        $dataContrats = ob_get_clean();
        
        $data=[
            PicList::cartApparts(),
            PicList::personne("locataire"),
            $dataContrats];
        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'tarif.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates. 'Contrat.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    public function modifierUnContrat(){
        $title = "modifier un contrat";
        $Contrats = Contrat::getListeContrats();

        ob_start();
        foreach ($Contrats as $key => $value) {
            $appartement = Appartements::getAppartement($value->getIdApparts());
            $proprio = Proprietaire::getProprietaire($appartement->getIdProprio());
            $Locataire = Locataire::getLocataire($value->getIdLocataire()); 
            ?>
            <div class="tarif">
                <input type="hidden" name="id" id="id" value="<?= $key ?>">
                <input type="hidden" name="idLocataire" id="idLocataire" value="<?= $value->getIdLocataire() ?>">
                <input type="hidden" name="idapparts" id="idapparts" value="<?= $value->getIdApparts() ?>">
                <div class="contratinfo flexBox with100">
                        <div class="choisir flexBox-Center add addtarif"></div>
                        <p class="nom np">Propriétaire <br> <span><?= $proprio->getNom(). " " . $proprio->getPrenom()  ?></span></p>
                        <p class="nom nl">Locataire  <br> <span><?= $Locataire->getNom(). " " . $Locataire->getPrenom()  ?></span></p>
                        <p class="dc">Date création : <span><?= $value->getDateCreation() ?></span></p>
                        <p class="dd">Date Début : <span><?= $value->getDateDebut() ?></span></p>
                        <p class="df">Date Fin : <span><?= $value->getDateFin() ?></span></p>
                </div>
                <div class="tarifinfo <?= $value->getEtat()?>">
                    <h2><span><?= $value->getEtat()?></span>...</h2>
                </div>
            </div>
        <?php
        }
        $dataContrats = ob_get_clean();
        
        $data=[
            PicList::cartApparts(),
            PicList::personne("locataire"),
            $dataContrats];
        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'tarif.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates. 'ModifierUnContrat.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    public function resilieUnContrat(){
        $title = "resilie un contrat";
        $Contrats = Contrat::getListeContrats();

        ob_start();
        foreach ($Contrats as $key => $value) {
            $appartement = Appartements::getAppartement($value->getIdApparts());
            $proprio = Proprietaire::getProprietaire($appartement->getIdProprio());
            $Locataire = Locataire::getLocataire($value->getIdLocataire()); 
            ?>
            <div class="tarif">
                <input type="hidden" name="id" id="id" value="<?= $key ?>">
                <input type="hidden" name="idLocataire" id="idLocataire" value="<?= $value->getIdLocataire() ?>">
                <input type="hidden" name="idapparts" id="idapparts" value="<?= $value->getIdApparts() ?>">
                <div class="contratinfo flexBox with100">
                        <div class="choisir cc flexBox-Center add "></div>
                        <p class="nom np">Propriétaire <br> <span><?= $proprio->getNom(). " " . $proprio->getPrenom()  ?></span></p>
                        <p class="nom nl">Locataire  <br> <span><?= $Locataire->getNom(). " " . $Locataire->getPrenom()  ?></span></p>
                        <p class="dc">Date création : <span><?= $value->getDateCreation() ?></span></p>
                        <p class="dd">Date Début : <span><?= $value->getDateDebut() ?></span></p>
                        <p class="df">Date Fin : <span><?= $value->getDateFin() ?></span></p>
                </div>
                <div class="tarifinfo <?= $value->getEtat()?>">
                    <h2><span><?= $value->getEtat()?></span>...</h2>
                </div>
            </div>
        <?php
        }
        $dataContrats = ob_get_clean();
        
        $data=[
            $dataContrats];
        ob_start();
        ?>
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'base.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'tarif.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Appartement.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'Proprietaire.php'?>">
            <link rel="stylesheet" media="screen" type="text/css" href="<?= $this->css . 'sidebard.php'?>">
        <?php
        $linkCss = ob_get_clean();
        $pathContent = $this->templates. 'resilieUnContrat.php';
        $this->Affichage($linkCss, $title, $pathContent, $data);
    }

    private function Affichage($linkCss,  $title, $pathContent, $data = ""){
        
        ob_start();
        require $pathContent;
        $content = ob_get_clean();
        
        require dirname(__DIR__). DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'layout.php';
    }
}