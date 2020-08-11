<?php

	class Database{
		
		const USERNAME = 'smartfarmptixiaki@gmail.com';
		const PASSWORD = '1997smartfarm.';

		private $dsn = "mysql:host=localhost;dbname=db_user_system";
		private $dbuser = "root";
		private $dbpass = ""; 

		public $conn;
		public function __construct(){
			try{
				$this-> conn = new PDO($this-> dsn, $this-> dbuser, $this-> dbpass);

			}catch (PDOException $e){
				echo 'Error : '.$e->getMessage();
			}

			return $this->conn; 

		}

		//Check Input
		public function test_input($data){
			$data = trim($data);  
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data; 	 
		}  

		//Error Success Massege Alert
		public function showMessage($type, $message){
			return '<div class="alert alert-'.$type.' alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong class="text-center">'.$message.'</strong> 
					</div>';
		}
		
	
	}
?>