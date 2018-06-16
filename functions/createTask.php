<?php
require_once('../database.php');

$title = filter_input(INPUT_POST, 'title');
$description = filter_input(INPUT_POST, 'description');
$dueDate = filter_input(INPUT_POST, 'dueDate');
$priority = filter_input(INPUT_POST, 'priority');
$notes = filter_input(INPUT_POST, 'notes');

//ADD THE TASK TO THE DB
$query = 'INSERT INTO `tasks` 
	(title, completed, description, dueDate, priority, notes) 
VALUES 
	(:title, 0, :description, :dueDate, :priority, :notes)';
$statement = $dbCon->prepare($query);
$statement->bindValue(':title', $title);
$statement->bindValue(':description', $description);
$statement->bindValue(':dueDate', $dueDate);
$statement->bindValue(':priority', $priority);
$statement->bindValue(':notes', $notes);
$statement->execute();
$statement->closeCursor();

header('location: ..');

?>