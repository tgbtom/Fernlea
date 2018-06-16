<?php

function formatPriority($argument1)
{
	//1 = Low Priority, 4 = Urgent
	switch ($argument1)
	{
		case '1':
		return 'Low Priority';
		break;
		
		case '2':
		return 'Medium Priority';
		break;
		
		case '3':
		return 'High Priority';
		break;
		
		case '4':
		return 'Urgent';
		break;
		
		default:
		return 'No Priority Set';
		break;
	}
}

?>