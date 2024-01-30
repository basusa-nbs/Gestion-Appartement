<?php
movefile();
function movefile(){
    
    $nameFile = $_FILES['image']['name'];
    $temprep = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    
    if($error != 0 || !$temprep ){
        echo json_encode(["error"=>$error]);
        die();
    }

    if(move_uploaded_file($temprep, './'.$nameFile)){
        echo json_encode(["succes"=> $nameFile]);
    }else{
        echo json_encode(["erorr"=> $nameFile ]);
    }

}