<?php
include("../database.php");

$notes = filter_input(INPUT_POST, 'notes');
$id = filter_input(INPUT_POST, 'id');
echo $notes;
echo 'ID IS: ' . $id;

//QUERY TO UPDATE THE NOTES COLUMN FOR THE SPECIFIED TASK/ROW
$query = 'UPDATE `tasks` SET `notes` = :newNotes WHERE `id` = :id';
$statement = $dbCon->prepare($query);
$statement->bindValue(':newNotes', $notes);
$statement->bindValue(':id', $id);
$statement->execute();
$statement->closeCursor();

header('location: ..');

?>