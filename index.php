<?php
require ('vendor/autoload.php');

define("rootpath", __DIR__);


$routeur = new Appart\includes\Routeur\Routeur ($_GET['url']);

$routeur->get('/', 'Appart#redirection');
$routeur->get('/seConnecter', 'Appart#seConecter');
$routeur->get('/destroy', 'Appart#destroy');
$routeur->get('appart/:menu', 'Appart#menu');
$routeur->get('appart/contrat/:action', 'Appart#contracter');
$routeur->get('appart/imprimer/:print', 'Appart#imprimer');

$routeur->routage();

?>