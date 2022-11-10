<?php

function conectarDB()
{
    $db = '';
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $dbConect = 'bienesraices_crud';
    try {
        $db = mysqli_connect($host, $user, $password, $dbConect);
    } catch (Throwable $ex) {
        echo 'Ha ocurrido un problema: ' . $ex->getMessage() . '<br>' . ' Código de error: ' . $ex->getCode();
        exit;
    }

    // $db = mysqli_connect($host, $user, $password, $dbConect);

    // if($db){
    //     echo "Se pudo conectar";
    // } else{
    //    echo "no se pudo conectar";
    //    exit;
    // }

    return $db;
}
