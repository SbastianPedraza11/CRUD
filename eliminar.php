<?php
if(!isset($_GET["iduser"])){
    header("Location: formulario.php");
}
$codigo = $_GET["id"];
require_once("Conexion.php");
$sentencia = $bd->prepare("DELETE FROM user WHERE iduser=?;");
$resultado = $sentencia->execute([$codigo]);

if($resultado==true){
    header("Location: formulario.php");
}else{
    echo "error";
}


?>