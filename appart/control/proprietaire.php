<?php
namespace Appart\control;

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR .'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

require 'personne.php';
use Appart\models\Proprietaire;
use Appart\models\Dashboard;

// creation du controleur de la classe personne et association aux vues personnes
$result=[];

$content = getcontent();

$data = control($content[0], $content[1]);

$data = get_object_vars($data);

// creation d'un nouveau Proprietaire ou Prprietaire
$Proprietaire = new Proprietaire(
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



// enregistre;ent du Proprietaire
try {
    $Proprietaire->EnregistrerProprietaire();
    $dash = new Dashboard("Prorietaire", "Enregistrement", new \DateTime("now"));
    $dash->recents();
} catch(MyExceptions $e){
    $e->MaKeOutput();
}


// mise a jour du nouveau Caculule
// try {
//     $Proprietaire->setCaCumule($Proprietaire->lastid() + 1);
// } catch(MyExceptions $e){
//     $e->MaKeOutput();
// }


$result["succes"] = "enregistrement du nouveau Proprietaire effectuer";
echo json_encode($result);



