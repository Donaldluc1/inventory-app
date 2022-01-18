<?php
	/**
	* 
	*/
	class Database
	{
		private $con;
		
		public function connect (){

			include_once("constants.php");
			$this->con = new Mysqli("localhost","root","","project_inv");
			if ($this->con) {
				return $this->con;
			}
			return "DATABASE_CONNECTION_FAIL";
		}
	}

//$db = new Database();
//$db->connect();
?>