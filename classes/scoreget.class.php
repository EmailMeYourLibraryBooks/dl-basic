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
				
				"SELECT a.title, a.composer, a.date, b.season, a.medium, a.publisher, a.call_no, c.rights, a.file
				    FROM scores a
  				    JOIN seasons b
                		ON b.id = a.season
  				    JOIN rights c
                		ON c.id = a.rights
  				    WHERE MATCH ($this->column)
				            AGAINST ('$this->search_term')";
				//"SELECT * 
				//FROM scores 
				//WHERE MATCH($this->column) 
				//AGAINST('$this->search_term')";
			if ($result = $this->con->query($search_query)) {
				
				require_once '../includes/results.inc.php' ;
				
		} else {
				echo $this->con->error;
			}
  
	}
	
	public function getAllScores() {
			$query = 
				"SELECT a.title, a.composer, a.date, b.season, a.medium, a.publisher, c.rights, a.call_no, a.file
				    FROM scores a
  				    JOIN seasons b
                		ON b.id = a.season
  				    JOIN rights c
                		ON c.id = a.rights";
				
				//"SELECT * 
				//FROM scores
				//ORDER BY composer";
			if ($result = $this->con->query($query)) {
				require_once 'includes/allscores.inc.php' ;
		}
		
	}
	
} 
?>







