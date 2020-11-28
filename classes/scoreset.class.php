<?php

	class ScoreInsert {
		
		// Properties
		public $title ;
		public $composer ;
		public $date ;
		public $season ;
		public $medium ;
		public $call_no ;
		public $publisher ;
		public $rights ;
		//public $file_name;
		public $insert_query ;
		public $con ;

		// Methods
		public function __construct($title, $composer, $date, $season, $medium, $call_no, $publisher, $rights, $con) {
			$this->title = $title ;
			$this->composer = $composer ;
			$this->date = $date ;
			$this->season = $season ;
			$this->medium = $medium ;
			$this->call_no = $call_no ;
			$this->publisher = $publisher ;
			$this->rights = $rights ;
			$this->con = $con ;
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
					rights
				) VALUES (
					'$this->title',
					'$this->composer',
					'$this->date',
					'$this->season',
					'$this->medium',
					'$this->call_no',
					'$this->publisher',
					'$this->rights')";
			$this->con->query($insert_query);
			echo $this->con->error;
		}
	}










