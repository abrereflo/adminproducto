<?php 
$sql = "DELETE FROM clasificacion WHERE  `id` = :id ";
$statement = $pdo->prepare($sql);
$statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$borrado = $statement->execute();
echo 'clasificacion ';
var_dump($borrado);