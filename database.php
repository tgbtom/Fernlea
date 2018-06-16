<?php

$dsn = 'mysql:host=127.0.0.1;dbname=fernlea_todolist';
$dsnUser = 'root';
$dsnPass = '';

try 
{
	$dbCon = new PDO($dsn, $dsnUser, $dsnPass);
}
catch(PDOException $e)
{
	$errorMessage = $e->getMessage();
	echo "<p>An error has occurred while trying to connect to the database: " . $errorMessage . "</p>";
	exit();
}

?>