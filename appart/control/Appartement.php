<?php
namespace Appart\control;   
require ('../../vendor/autoload.php');
use Appart\control\MyExceptions;
use Appart\models\Appartements;
use Appart\models\Dashboard;

$data=[];
function str_to_array(string $str, string $tag){
    $newTableau = [];
    $valeur = "";
    $i = 0;
    foreach (str_split($str.$tag,1) as $key => $value) {
        if($value != $tag){
            $valeur = $valeur . $value;
        }else{
            $newTableau[$i] = $valeur;
            $valeur = "";
            $i = $i+1;
        }
    }
    return $newTableau;
}
// recuperation de donnée poster
try {
    $NbrePersonnes = $_POST["NbrePersonnes"];
    $Ville = $_POST["Ville"];
    $commune = $_POST["commune"];
    $Quartier = $_POST["Quartier"];
    $Avenu = $_POST["Avenu"];
    $numero = $_POST["numero"];
    $idProprio = $_POST["idProprio"];
    $idTarif = $_POST["idTarif"];
    $Categorie = $_POST["Categorie"];
    $Types = $_POST["Types"];
    $photo = $_POST["photo"];
    $equipement = str_to_array($_POST["equipements"], ",");
} catch (MyExceptions $e) {
    $e->MaKeOutput();
}
$appart = new Appartements(
    _NbrePersonnes:$NbrePersonnes,
    _ville:$Ville,
    _commune:$commune,
    _quartier:$Quartier,
    _avenu:$Avenu,
    _numero:$numero,
    _idpropprio:$idProprio,
    _idTarif:$idTarif,
    _Categorie:$Categorie,
    _Types:$Types,
    _photo:$photo,
    equipement:$equipement);
    
// echo json_encode(["eee"=>"kjss"]);
try {
    
    $appart->EnregistrerAppartements();
} catch (MyExceptions $e) {
    $e->MaKeOutput();
}

//activites
$dash = new Dashboard("Appartement", "Enregistrement", new \DateTime("now"));
$dash->recents();


$data["succes"] = "enregistrement d'un nouvel Appartemt effectuer";
echo json_encode($data);


