<?php 
$sql = "DELETE FROM detalle WHERE `id` = :id ";
$statement = $pdo->prepare($sql);
$statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$borrado = $statement->execute();
echo 'detalle ';
var_dump($borrado);
