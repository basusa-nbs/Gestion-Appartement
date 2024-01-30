<?php
require ('../../vendor/autoload.php');
use Appart\vues\Imprimer;

$html = $_POST["html"];

Imprimer::imprimer($html, "ListAppartement");


