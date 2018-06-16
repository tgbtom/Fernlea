<?php
require_once('../database.php');

$id = filter_input(INPUT_POST, 'id');

$query = 'DELETE FROM `tasks` WHERE `id` = :id';
$statement = $dbCon->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$statement->closeCursor();

header ('location: ..');
exit();
?>