<?php
// namespace Appart\control;   
// require ('../../vendor/autoload.php');
// use Appart\control\MyExceptions;
// use Appart\models\AppartSeach;


// $data=[];


// // recuperation de donnée poster
// if(isset($_POST["motcle"])){
//     $motcle = $_POST["motcle"];
//     $search = new AppartSeach($motcle);

//     $rechers = $search->research();

// }
// else{
//     try {
//         $Etat = $_POST["Etat"];
//         $Locataire = $_POST["Locataire"];
//         $Appartement = $_POST["Appartement"];
//         $dateCreation = $_POST["dateCreation"];
//         $dateDebut = $_POST["dateDebut"];
//         $dateFin = $_POST["dateFin"];
//     } catch (MyExceptions $e) {
//         $e->MaKeOutput();
//     }
// }

// // var_dump($motcle);
// // die;
// $contrat = new Contrat(
//     Etat:$Etat ,
//     idLocataire:$Locataire ,
//     idApparts:$Appartement ,
//     DateCreation:$dateCreation ,
//     DateDebut:$dateDebut ,
//     DateFin:$dateFin );

// // echo json_encode(["eee"=>"kjss"]);
// if(isset($_POST["id"])){
//     $id = $_POST["id"];
//     try {
//         $contrat->ModifeirUnContrat($id);
//     } catch (MyExceptions $e) {
//         $e->MaKeOutput();
//     }
// }
// else{
//     try {
//         $contrat->CreerUnContrat();
//     } catch (MyExceptions $e) {
//         $e->MaKeOutput();
//     }
// }

// $data["succes"] = "enregistrement d'un nouvel Contrat effectuer";
// echo json_encode($data);
