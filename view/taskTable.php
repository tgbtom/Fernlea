<title>To-Do List</title>
<?php
//query the database to find all tasks that need to be completed
$query = 'SELECT * FROM `tasks`';
$statement = $dbCon->prepare($query);
$statement->execute();
$results = $statement->fetchAll();
$statement->closeCursor();
?>

<script type='text/javascript'>
function verify(arg1)
{
var currentCheck = document.getElementById(arg1).checked;
var theForm = 'checker' + arg1;

	if (currentCheck == true)
	{
		if (confirm('Are you sure you would like to mark this task as complete?'))
		{
			document.forms[ theForm ].submit();
		}
		else
		{
			document.getElementById(arg1).checked = false;
		}
	}
	else if (currentCheck == false)
	{
		if(confirm('Are you sure you would like to mark this task as incomplete?'))
		{
			document.forms[ theForm ].submit();
		}
		else
		{
			document.getElementById(arg1).checked = true;
		}
	}
}

function confirmDelete(arg1, arg2)
{
	var message = 'Are you sure you would like to delete task #' + arg1 + ': ' + arg2 + '?';
	var theForm2 = 'delete' + arg1;
	if (confirm(message))
	{}
	else
	{
		document.forms[ theForm2 ].action = ".";
	}
}
</script>

<div class='container2'>
<table class="toDoTable">

	<tr>
		<th>id</th><th>Complete?</th><th>Title</th><th>Description</th><th>Due By</th><th>Priority</th><th>Notes</th><th>Delete?</th>
	</tr>
	<!-- Find all results from the initiated query at the beginning of the script -->
	<?php foreach ($results as $result) : ?>
	<tr>
		<td><?php echo $result['id'];?></td>
		<td class='checkbox'>
			<?php $completed = $result['completed'];
			if ($completed)
			{
				echo "<form action='functions/saveComplete.php' method='post' name='checker" . $result['id'] . "'>
				<input hidden name='id' value='" . $result['id'] . "'>
				<input type='checkbox' class='checkbox' name='complete' id='" . $result['id'] . "' onclick=verify(`" . $result['id'] . "`) checked></form>";
				$completion = true;
			}
			else
			{
				echo "<form action='functions/saveComplete.php' method='post' name='checker" . $result['id'] . "'>
				<input hidden name='id' value='" . $result['id'] . "'>
				<input type='checkbox' class='checkbox' name='complete' id='" . $result['id'] . "' onclick=verify(`" . $result['id'] . "`)></form>";
				$completion = false;
			}
			?>			
			
		</td>
		<td class='title'><?php echo $result['title'];?></td>
		<td><?php echo $result['description'];?></td>
		<td><?php echo $result['dueDate'];?></td>
		<td><?php echo formatPriority($result['priority']);?></td>
		<td>
			<form method='post' action='functions/saveNotes.php'>
			<input hidden value='<?php echo $result['id'];?>' name='id'>
			<textarea name='notes' rows='3' cols='70'><?php echo $result['notes'];?></textarea>
			<input type='submit' value='save'>
			</form>
		</td>
		<td>
			<form method='post' action='functions/deleteRow.php' name='delete<?php echo $result["id"];?>'>
			<input hidden value='<?php echo $result['id'];?>' name='id'>
			<input onclick='confirmDelete(<?php echo $result['id'];?>, "<?php echo $result['title'];?>")' type='submit' value='DELETE'>
			</form>
		</td>
	</tr>
	<?php endforeach; ?>
	
</table>

<form action='.' method='post'>
<input hidden name='page' value='addTask'>
<input type='submit' value='Add New Task'>
</form>
</div>