<?php

	$clasificacion = $_POST['clasificacion'];

	$sql1 = "INSERT INTO `clasificacion`(id, clasificacion) VALUES (0 , :clasificacion)";

	$statement = $pdo->prepare($sql1);
	$statement->bindParam(':clasificacion', $clasificacion, PDO::PARAM_STR, 150);
	$insertando = $statement->execute();

	if ($insertando)
	{
		
		$last_clasificacion= $pdo->lastInsertId();
	}
	   

	