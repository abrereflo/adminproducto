<?php 

//obtiene la id producto
function get_producto($id){
	global $pdo;
	
	$sql = 'SELECT * FROM `producto` WHERE `id`=:id';

	$statement = $pdo->prepare($sql);
	$statement->bindParam(':id', $id, PDO::PARAM_INT);
	$statement->execute();
	$producto = $statement->fetch(PDO::FETCH_ASSOC);
	return $producto;
}


function get_producto2($id){
	global $pdo;
	
	$sql = 'SELECT producto.*, detalle.*, clasificacion.clasificacion
			FROM producto
			LEFT JOIN detalle on detalle.id_producto = producto.id
  		 	LEFT JOIN clasificacion on clasificacion.id = detalle.id_clasificacion
			where producto.id = :id';

	$statement = $pdo->prepare($sql);
	$statement->bindParam(':id', $id, PDO::PARAM_INT);
	$statement->execute();
	$producto = $statement->fetch(PDO::FETCH_ASSOC);
	return $producto;
}
//para guardar imagenes
function guardar_archivo($ruta_origen, $ruta_destino){
	if (is_file($ruta_destino)) {
		$arr_path = pathinfo($ruta_destino);
		$contador = 1;
		do {
			$ruta_destino = $arr_path['dirname'].'/'.$arr_path['filename'].'-'.($contador++).'.'.$arr_path['extension'];
		} while(is_file($ruta_destino));
	}
	
	$resultado = move_uploaded_file($ruta_origen, $ruta_destino);
	if ($resultado==true) {
		return $ruta_destino;
	} else {
		return false;
	}
}
