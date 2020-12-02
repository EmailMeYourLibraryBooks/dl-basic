<?php

class DbH {
	
	private $db_server ;
	private $db_username ;
	private $db_password ;
	private $db_name ;
	
	public function connect() {
		
		$this->db_server = "localhost" ;
		$this->db_username = "root" ;
		$this->db_password = "" ;
		$this->db_name = "slec_dl" ;
		
		try {
			$con = new mysqli($this->db_server,$this->db_username,$this->db_password,$this->db_name) ;
			return $con ;
		} catch (Exception $e) {
			$error = $e->getMessage();
			echo $error ;
		}
		
	}
	
}