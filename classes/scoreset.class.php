<?php
	require_once "DbH.class.php";
	class ScoreInsert extends DbH {
		
		// Properties
		private $title ;
		private $composer ;
		private $date ;
		private $season ;
		private $medium ;
		private $call_no ;
		private $publisher ;
		private $rights ;
		private $file ;
		private $insert_query ;

		// Methods
		public function __construct($title, $composer, $date, $season, $medium, $call_no, $publisher, $rights, $file) {
			$this->title = $title ;
			$this->composer = $composer ;
			$this->date = $date ;
			$this->season = $season ;
			$this->medium = $medium ;
			$this->call_no = $call_no ;
			$this->publisher = $publisher ;
			$this->rights = $rights ;
			$this->file = $file ;
		}
		
		public function scoreSet () {
			$insert_query = 
				"INSERT INTO scores (
					title,
					composer,
					date,season,
					medium,
					call_no,
					publisher,
					rights,
					file
				) VALUES (
					'$this->title',
					'$this->composer',
					'$this->date',
					'$this->season',
					'$this->medium',
					'$this->call_no',
					'$this->publisher',
					'$this->rights',
					'$this->file')";
			if ($this->connect()->query($insert_query)) {
				header("location: ../insert-success.php") ;
			} else {
				echo $this->connect()->error;
		}
	}
}










