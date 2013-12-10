<?php
	/* als je een method wilt gebruiken uit de sessionclass, dat 
	 * moet je het bestand waar de class definitie instaat toevoegen
	 * aan dit bestand. gebruik daarvoor require_once  
	 * 
	 */
	require_once("class/SessionClass.php");
	/*
	 * we roepen de method logout() aan uit de SessionClass 
	 */
	 
	 
	 
	session_destroy();
	header("location:index.php?content=homepage");
?>