<?php
namespace Appart\control;
require ('../../vendor/autoload.php');
use Appart\control\MyExceptions;
use Appart\models\Tarif;
use Appart\models\Dashboard;

$result=[];

// recuperation de donnée poster
try {
    $code = $_POST["codeTarif"];
    $prixemHS = $_POST["prixemHS"];
    $prixemBS = $_POST["prixemBS"];
} catch (MyExceptions $e) {
    $e->MaKeOutput();
}

$tarif = new Tarif($code, $prixemHS, $prixemBS);

try {
    $tarif->CreerUntarif();
    $dash = new Dashboard("Tarif", "Création", new \DateTime("now"));
    $dash->recents();
} catch (MyExceptions $e) {
    $e->MaKeOutput();
}

$result["succes"] = "enregistrement du nouveau tarif effectuer";
echo json_encode($result);