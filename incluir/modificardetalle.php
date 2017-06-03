<?php 
	

	$sql2 = "UPDATE `detalle` 
			 SET
			 `precio_compra` =:precio_compra, 	
			 `precio_salida` =:precio_salida 
			 WHERE `id` = :id";

	$statement = $pdo->prepare($sql2);
	$statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	$statement->bindParam(':precio_compra', $_POST['precio_compra'], PDO::PARAM_INT);
    $statement->bindParam(':precio_salida', $_POST['precio_salida'], PDO::PARAM_INT);
    $actualizado = $statement->execute(); 
	
