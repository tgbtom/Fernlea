<html>
<head>
<link rel="stylesheet" type="text/css" href="design.css">
<?php 
require_once("database.php");
include("functions/functions.php");


//determine what view to load for the user
$page = filter_input(INPUT_POST, 'page');
if (!isset($page))
{
	$page = filter_input(INPUT_GET, 'page');
	if (!isset($page))
	{$page = 'taskTable';}
}

?>

</head>

<body>

<?php 

switch($page)
{
	case 'taskTable':
	include("view/taskTable.php");
	break;
	
	case 'addTask':
	include("view/addTask.php");
	break;
	
	default:
	include("view/taskTable.php");
	break;
}

?>
</body>

</html>