<?php
require_once('../database.php');

$completed = filter_input(INPUT_POST, 'complete');
$id = filter_input(INPUT_POST, 'id');

if ($completed)
{
	//item now marked as complete
	$query = 'UPDATE `tasks` SET `completed` = 1 WHERE `id` = :id';
	$statement = $dbCon->prepare($query);
	$statement->bindValue(':id', $id);
	$statement->execute();
	$statement->closeCursor();
}
else
{
	//item now marked as incomplete
	$query = 'UPDATE `tasks` SET `completed` = 0 WHERE `id` = :id';
	$statement = $dbCon->prepare($query);
	$statement->bindValue(':id', $id);
	$statement->execute();
	$statement->closeCursor();
}

header ('location: ..');
exit();
?>