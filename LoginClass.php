<?php 
	require_once ("MySqlDatabaseClass.php");
	
	class LoginClass
	{
		//fields
		private $id;
		private $email;
		private $password;
		private $userrole;
		private $activated;
		private $activationdate;
		
		//properties
		public function get_id() {return $this->id;}
		
		//constructor 
		public function __construct()
		{
			
			
		}
		public function find_by_sql($query)
		{
			global $database;
			$result = $database->fire_query($query);
			
			$object_array = array();
			
			while ( $row = mysql_fetch_array($result))
			{
				$object = new LoginClass();
				$object->id    				= $row['id'];
				$object->email 				= $row['email'];
				$object->password			= $row['password'];
				$object->userrole			= $row['userrole'];
				$object->activated			= $row['activated'];
				$object->activationdate		= $row['activationdate'];
				
				$object_array[] = $object;
				
				
			}
			return $object_array;
			
			
		}
	}
?>