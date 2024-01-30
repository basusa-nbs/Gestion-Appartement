<?php
namespace Appart\control;   
require ('../../vendor/autoload.php');
use Appart\control\MyExceptions;
use Appart\models\Contrat;
use Appart\models\Dashboard;

$data=[];


// recuperation de donnée poster
if(isset($_POST["resilie"])){
    $ids = $_POST;
    unset($ids["resilie"]);
    Contrat::resilieContrat($ids);
    
    $data["succes"] = "les contrat ont été resiliés";
    echo json_encode($data);
    die();
}
else{
    try {
        $Etat = $_POST["Etat"];
        $Locataire = $_POST["Locataire"];
        $Appartement = $_POST["Appartement"];
        $dateCreation = $_POST["dateCreation"];
        $dateDebut = $_POST["dateDebut"];
        $dateFin = $_POST["dateFin"];
    } catch (MyExceptions $e) {
        $e->MaKeOutput();
    }
}

// var_dump($ids);
// die;

$contrat = new Contrat(
    Etat:$Etat ,
    idLocataire:$Locataire ,
    idApparts:$Appartement ,
    DateCreation:$dateCreation ,
    DateDebut:$dateDebut ,
    DateFin:$dateFin );

// echo json_encode(["eee"=>"kjss"]);
if(isset($_POST["id"])){
    $id = $_POST["id"];
    try {
        $contrat->ModifeirUnContrat($id);
        $dash = new Dashboard("Contrat", "Modification", new \DateTime("now"));
        $dash->recents();
    } catch (MyExceptions $e) {
        $e->MaKeOutput();
    }
}
else{
    try {
        $contrat->CreerUnContrat();
        $dash = new Dashboard("Contrat", "Création", new \DateTime("now"));
        $dash->recents();
    } catch (MyExceptions $e) {
        $e->MaKeOutput();
    }
}

$data["succes"] = "enregistrement d'un nouvel Contrat effectuer";
echo json_encode($data);

