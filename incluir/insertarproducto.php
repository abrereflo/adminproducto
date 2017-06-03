<?php 	


	$nombre = $_POST['nombre'];
    $presentacion = $_POST["presentacion"];

    $pdo = new PDO("mysql:host=localhost;dbname=bdproducto;", "root", "");

    $sql = "INSERT INTO `producto`(id, nombre, presentacion) VALUES (0, :nombre, :presentacion)";

    $statement1 = $pdo->prepare($sql);
    $statement1->bindParam(':nombre', $nombre, PDO::PARAM_STR, 50);
    $statement1->bindParam(':presentacion', $presentacion, PDO::PARAM_STR, 150);    
    $insertando = $statement1->execute();

      if($insertando)
      {
        $last_producto = $pdo->lastInsertId();
      }
      