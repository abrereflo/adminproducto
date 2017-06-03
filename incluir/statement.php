
	
<?php 
	$statement->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR, 50);
	$statement->bindParam(':presentacion', $_POST['presentacion'], PDO::PARAM_STR, 150);
	$statement->bindParam(':precio_compra', $_POST['precio_compra'], PDO::PARAM_INT);
	$statement->bindParam(':precio_salida', $_POST['precio_salida'], PDO::PARAM_INT);
	$statement->bindParam(':fecha_ingreso', $_POST['fecha_ingreso'], PDO::PARAM_STR);
	$statement->bindParam(':imagen', $_POST['fecha_ingreso'], PDO::PARAM_STR, 255);
	$statement->bindParam(':clasificacion', $_POST['clasificacion'], PDO::PARAM_STR, 150);

	