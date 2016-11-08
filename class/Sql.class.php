<?php
	class Sql{
		public $host;
		protected $user;
		private $password;
		public $db;
		public $conn;

		public function __construct($address = "localhost", $database = "poema", $user = "localhost", $password = ""){
			$this->host = $address != "localhost" ? $address : "localhost";
			$this->db = $database != "poema" ? $database : "poema";
			$this->user = $user ? $user : "localhost";
			$this->password = $password ? $password : "";

			try{
				$this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
				$this->conn->set_charset("utf8");
			}
			catch(Exception $e){
				echo $e;
			}
		}

		public function __destruct(){
			if($this->conn != null){
				$this->conn->close();
				unset($this->conn);
			}
		}

		//Query de poemas

		public function getPoems(){
			$query = "SELECT * FROM poema";

			if($result = $this->conn->query($query)){
				$row = $result->fetch_array(MYSQLI_ASSOC);
				return $row;
			}
			else{
				return null;
			}
		}
	}
?>