<?php 

	$sql1 = "UPDATE `producto` 
			 SET 
			`nombre` = :nombre,
			`presentacion` = :presentacion
			WHERE `id` = :id";
	$statement = $pdo->prepare($sql1);
	$statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	$statement->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR, 50);
	$statement->bindParam(':presentacion', $_POST['presentacion'], PDO::PARAM_STR, 150);
	$actualizado = $statement->execute();