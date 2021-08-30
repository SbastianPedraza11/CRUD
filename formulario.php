<?php
require_once("Conexion.php");
$sentencia = $bd->query("SELECT * FROM user;");
$user = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
    <form action="insertar.php" method="post">
        <div class="row">
            <h1 class="text-center">DATOS FORMULARIO</h1>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <label for="">NOMBRE</label>
                <input type="text" name="names" id="" class="form-control">
            </div>

            <div class="col-md-3">
                <label for="">APELLIDO</label>
                <input type="text" name="lastname" id="" class="form-control">

            </div>
        </div><br>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <label for="">EMAIL</label>
                <input type="text" name="email" id="" class="form-control">
            </div>

            <div class="col-md-3">
                <label for="">DOCUMENTO</label>
                <input type="number" name="document" id="" class="form-control">
            </div>

        </div><br>

        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <input type="hidden" name="oculto" value="1">
                <button class="btn btn-success form-control" type="submit">ENVIAR</button>
            </div>
        </div><br>
    </form>

    <table class="table">
        <thead class="table-success table-striped">
        <tr>
            <th>DOCUMENT</th>
            <th>NAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($user as $dato){
            ?>
            <tr>
                <td><?php echo $dato->document?></td>
                <td><?php echo $dato->names?></td>
                <td><?php echo $dato->lastname?></td>
                <td><?php echo $dato->email?></td>   
                <td>
                    <a href="editar.php?id=<?php echo $dato->iduser?>" class="btn btn-primary">EDITAR</a>
                </td> 
                <td>
                    <a href="eliminar.php?id=<?php echo $dato->iduser?>" class="btn btn-danger">ELIMINAR</a>
                </td> 
                
            </tr>
            <?php
                }
            ?>
        </tbody>
    
        </table>
    </div>
    
</body>
</html>
