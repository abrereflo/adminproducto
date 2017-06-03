<?php 

   	$sql3 = "UPDATE `clasificacion` 
			SET 
			`clasificacion`=:clasificacion
			WHERE `id` = :id";

	$statement = $pdo->prepare($sql3);
	$statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	$statement->bindParam(':clasificacion', $_POST['clasificacion'], PDO::PARAM_STR,150);
    $actualizado = $statement->execute();	