<?php
    $archivos=fopen("../data/usuarios.json","r");
    $linea="";
    $jsonAreglos=array();
    while(($linea=fgets($archivos))){
        $json=json_decode($linea,true);
        $jsonAreglos[]=$json;
    }
    fclose($archivos);
    echo json_encode($jsonAreglos);
?>