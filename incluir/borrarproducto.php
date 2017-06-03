<?php 

$sql = "DELETE FROM producto WHERE  `id` = :id ";
$statement = $pdo->prepare($sql);
$statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$borrado = $statement->execute();
echo 'producto ';
var_dump($borrado);