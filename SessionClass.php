<?php

	class SessionClass
	{
		//fields
		private $id;
		private $email;
		private $userrole;
		private $logged_in;
		
		/* constructor van een php-class heeft altijd dezelfde naam:
		 * __construct() let op de dubbele underscore. onthoud dat iedere php method
		 * altijd het woord function gebruikt
		 */
		public function  __construct()
		{
			
		}
		
		/* maak een method die het id , email , userrole en loggen_in opslaat 
		 * in sessie variabelen
		 * 
		 */
		 public function login($loginClassObject)
		 {
		 	$this->id = $_SESSION['id'] = $loginClassObject->get_id();
			$this->email = $_SESSION ['email'] = $loginClassObject->get_email();
			$this->userrole = $_SESSION ['userrole'] = $loginClassObject->get_userrole();
			$this->logged_in = $_SESSION ['logged_in'] = $loginClassObject->get_logged_in();
			$this->logged_in = true;
		
			
		 }
		 public function logout()
		 {
		 	/*
			 * de functie session_destroy vernietigd alle session variabelen,
			 * zoals $_SESSION['id'], $_SESSION['email'], enz..........
			 */
		 	
			session_destroy();
			unset($this->id);
		 }
		
	}



?>