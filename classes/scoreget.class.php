<?php

class ScoreGet {
	
	// Properties
	public $search_term ;
	public $column ;
	public $con ;
	
	// Methods
	public function __construct($search_term,$column,$con) {
		$this->search_term = $search_term ;
		$this->column = $column ;
		$this->con = $con ;
	}
	
	public function search() {
			$search_query = 
				"SELECT * 
				FROM scores 
				WHERE MATCH($this->column) 
				AGAINST('$this->search_term')";
			if ($result = $this->con->query($search_query)) {
				require_once '../includes/results.inc.php' ;
		}
  
	}
	
	public function getAllScores() {
			$query = 
				"SELECT * 
				FROM scores
				ORDER BY composer";
			if ($result = $this->con->query($query)) {
				require_once 'includes/allscores.inc.php' ;
		}
		
	}
	
} 
?>







