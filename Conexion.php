<?php

try {
    $bd = new PDO("mysql:host=localhost;dbname=prueba","root","");
    // set the PDO error mode to exception
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

  
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>