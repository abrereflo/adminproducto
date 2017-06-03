<?php
/*validaciones -->*/
	$error = [];
	if (empty($_POST['nombre']))
	{
		$error[] = 'El nombre es requerido';
	}
	if (empty($_POST['presentacion'])) 
	{
		$error[] = 'La presentacion es requerido';
	}	
	if (empty($_POST['precio_compra']))
	{
		$error[] = 'El precio compra es requerido';
	}
	if (empty($_POST['precio_salida'])) 
	{
		$error[] = 'El precio salida es requerido';
	}

