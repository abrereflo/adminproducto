
	<?php	
	$precio_compra = $_POST['precio_compra'];
     $precio_salida = $_POST['precio_salida'];   
     $fechaActual = date("Y-m-d");      
     $sql2 = "INSERT INTO `detalle`(id, precio_compra, precio_salida,fecha_ingreso,  id_producto, id_clasificacion) VALUES (0,:precio_compra, :precio_salida,:fecha, :id_producto, :id_clasificacion)";
  
     $statement2 = $pdo->prepare($sql2);
     $statement2->bindParam(':precio_compra', $precio_compra, PDO::PARAM_INT);
     $statement2->bindParam(':precio_salida', $precio_salida, PDO::PARAM_INT); 
     $statement2->bindParam(':fecha', $fechaActual, PDO::PARAM_STR);   
     $statement2->bindParam(':id_producto', $last_producto, PDO::PARAM_INT);
     $statement2->bindParam(':id_clasificacion', $last_clasificacion, PDO::PARAM_INT);

     $insertando = $statement2->execute();

	   

	

	