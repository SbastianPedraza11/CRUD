<?php

if(!isset($_POST["oculto"])){
    exit();
}else{
    require_once("Conexion.php");
    $document = $_POST["document"];
    $name = $_POST["names"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $sentencia = $bd->prepare("INSERT INTO user(document, names, lastname, email)
    VALUES(?,?,?,?)");

    $resultado = $sentencia->execute([$document, $name, $lastname, $email]);

    if($resultado==true){
        header("location: formulario.php");
    }else{
        echo "no se agregaron los datos";
    }
}


?>