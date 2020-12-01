<?php

class rights {
	
	public $con ;

	function construct($con) {
		$this->con = $con ;
	}
		
	public function getRights() {
		$rights_query = 
			"SELECT DISTINCT
				rights.id,
				rights.rights
				from rights" ;			
		$result = $this->con->query($rights_query) ;
		
		$rights_array = $result->fetch_assoc();
		return $rights_array ;
	}
	
	
}