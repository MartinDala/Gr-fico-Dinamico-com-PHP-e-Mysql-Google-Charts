<?php
	use PDO;
	class Connection{
		
		private $server;
		private $user;
		private $password;
		private $dbname;
		
		public function __constrcut(){
			$this->server = 'localhst';
			$this->user = 'root';
			$this->password = '';
			$this->dbname = 'loja';
		}
	
		public function connect(){
			
			return new PDO("mysql:host={$this->server};dbname={$this->dbname};",$this->user, $this->password);
			
		}
		
	}

?>
