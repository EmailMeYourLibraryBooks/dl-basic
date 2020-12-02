<?php
require_once "DbH.class.php";
class ScoreGet extends DbH {
	
	// Properties
	private $search_term ;
	private $column ;
	
	// Methods
	public function __construct($search_term,$column) {
		$this->search_term = $search_term ;
		$this->column = $column ;
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
			if ($result = $this->connect()->query($search_query)) {
				require_once '../includes/results.inc.php' ;				
			} else {
				echo $this->connect()->error;
		}
	}
	
	public function getAllScores() {
			$query = 
				"SELECT a.title, a.composer, a.date, b.season, a.medium, a.publisher, c.rights, a.call_no, a.file
				    FROM scores a
  				    JOIN seasons b
                		ON b.id = a.season
  				    JOIN rights c
                		ON c.id = a.rights
					ORDER BY title asc";
			if ($result = $this->connect()->query($query)) {
				require_once 'includes/allscores.inc.php' ;
		} else {
				echo $this->connect()->error;
			}
	}
} 
?>







