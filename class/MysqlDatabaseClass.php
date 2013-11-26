<?php
	require_once 'config/config.php';
	
	class MysqlDatabaseClass
	{
		//Fields
		private $db_connection;
		
		// dit is de contructor van de MysqlDatabaseClass
		// een contructor herken je in PHP aan de naam. de naam is altijd 
		// __construct* /
		public function __construct()
		{
			// velden roep je aan met $this->naam_van_het_veld_zonder_$
			// er wordt hier een verbinding emaakt met de mysql server
			$this->db_connection = mysql_connect(SERVERNAME,USERNAME,PASSWORD);
			// er wordt hier een database geselecterd 
			mysql_select_db(DATABASE, $this->db_connection) or 
				die('MySqlDatabaseClass, database niet geselecteerd');
		}
		
		
	}






?>