<?php
	//Hier wordt contact gemaakt met de mysql-server
	$db = mysql_connect("localhost", "root", "");	
	
	//Hier wordt er een database gekozen op de mysql-server
	mysql_select_db("am1a", $db) or die("De database is niet gevonden dus");
?>