<?php
    if(!isset($_GET["id"])){
      header("formulario.php");
    }
    $id = $_GET["id"];
    require_once("Conexion.php");
    $sentencia = $bd->prepare("SELECT * FROM user WHERE iduser= ?;");
    $sentencia->execute([$id]);
    $user = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="editarinsertar.php" method="post">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <h1>EDITAR DATOS</h1><br>
                    <div class="col-md-5 text-center">
                        <label for="">DOCUMENTO</label>
                        <input type="number" name="document"class="form-control" value="<?php echo $user->document?>">    
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <div class="col-md-5 text-center">
                        <label for="">NAME</label>
                        <input type="text" name="names"class="form-control" value="<?php echo $user->names?>">    
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <div class="col-md-5 text-center">
                        <label for="">LASTNAME</label>
                        <input type="text" name="lastname"class="form-control" value="<?php echo $user->lastname?>">    
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <div class="col-md-5 text-center">
                        <label for="">EMAIL</label>
                        <input type="text" name="email"class="form-control" value="<?php echo $user->email?>">    
                    </div>
                </div>
            </div><br>
            
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-5">
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $user->iduser?>">
                    <input type="submit" value="EDITAR" class="btn btn-primary">
                </div>
            </div>
            
        </form>
    </div>
    
</body>
</html>


