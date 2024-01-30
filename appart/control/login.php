<?php
namespace Appart\control;
require ('../../vendor/autoload.php');
use Appart\control\MyExceptions;
use Appart\models\Login;

session_start();
session_destroy();

// recuperation de donnée poster
try {
    $email = $_POST["email"];
    $password = $_POST["password"];
} catch (MyExceptions $e) {
    $e->MaKeOutput();
}

$login = new Login($email, $password);

try {
    $login->seConnecter();
} catch (MyExceptions $e) {
    $e->MaKeOutput();
}

$_SESSION["login"] = $password;

$result["succes"] = "connexion de l'aministrateur " . $_SESSION["nom"];
echo json_encode($result);