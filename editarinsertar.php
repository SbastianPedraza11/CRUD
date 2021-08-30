<?php
if (!isset($_POST["oculto"])){
    header("Location: formulario.php");
}

require_once("Conexion.php");
$id2 = $_POST ["id2"];
$document = $_POST ["document"];
$names = $_POST ["names"];
$lastname = $_POST ["lastname"];
$email = $_POST ["email"];

$sentencia = $bd->prepare("UPDATE user SET document=?, names=?, lastname=?, email=? WHERE iduser=?;");
$resultado = $sentencia->execute([$document, $names, $lastname, $email, $id2]);

if($resultado=== true){
    header("Location: formulario.php");
}else
    echo "Error de actualizacion";
   
?>