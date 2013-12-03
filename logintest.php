<?php
	require_once ('class/LoginClass.php');
	
	$loginClassObj = new LoginClass();
	
	$query = "SELECT * FROM 'login'";
	
	$result_array = $loginClassObj->find_by_sql($query);
	
	echo "<table>";
	
	foreach ( $result_array as $value)
	{
		echo "<tr>
				<td>".$value->get_id()."<br>"</td>
				<td>".$value->get_email()."<br>"</td>
			  </tr>"
	}
	echo "</table>";
?>

	