<title>Add New Task</title>
<link rel="stylesheet" type="text/css" href="../design.css">
<div class='container'>
<form action='functions/createTask.php' method='post'>
	<fieldset>
	<legend>New Task Details</legend>
		<label>Title:</label>
		<input type='text' value='' name='title' required>
		<br>
		
		<label>Description:</label>
		<textarea name='description' rows=3 cols=50 required></textarea>
		<br>
		
		<label>Due-Date:</label>
		<input type='date' name='dueDate' required>
		<br>
		
		<label>Priority:</label>
		<select name='priority'>
			<option value=1>Low Priority</option>
			<option value=2>Medium Priority</option>
			<option value=3>High Priority</option>
			<option value=4>Urgent</option>
		</select>
		<br>
		
		<label>Notes:</label>
		<textarea name='notes' rows=3 cols =50></textarea>
		<br>
		
		<input type='submit' value='Add Task'>
</form>
</div>
