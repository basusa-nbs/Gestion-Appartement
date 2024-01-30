<?php
namespace Appart\control;
use Appart\models\Dashboard;

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR .'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

require 'personne.php';
use Appart\models\Locataire;

// creation du controleur de la classe personne et association aux vues personnes

$content = getcontent();

$data = control($content[0], $content[1]);

$data = get_object_vars($data);

// creation d'un nouveau locataire ou Prprietaire
$locataire = new Locataire(
    nom:$data["Nom"],
    prenom:$data["Prenom"],
    numerotel1:get_object_vars($data["NumeroTel1"]), 
    numerotel2:get_object_vars($data["NumeroTel2"]),
    adresse1:get_object_vars($data["addresse1"]),
    adresse2:get_object_vars( $data["addresse2"]),
    codePostal:$data["codePostal"],
    photo:$data["images"],
    mail:$data["mail"]
);

// enregistre;ent du locataire
try {
    $locataire->EnregistrerLocataire();
    $dash = new Dashboard("Locataire", "Enregistrement", new \DateTime("now"));
    $dash->recents();
} catch(MyExceptions $e){
    $e->MaKeOutput();
}

$result["succes"] = "enregistrement du nouveau locataire effectuer";
echo json_encode($result);


