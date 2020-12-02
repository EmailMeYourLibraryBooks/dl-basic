<?php
require_once "../classes/scoreset.class.php" ;

if (isset($_POST['title'], $_POST['composer'], $_POST['date'], $_POST['season'], $_POST['medium'], $_POST['call_no'], $_POST['publisher'], $_POST['rights'])) {
	
	// Declare variables
	$con = new DbH(); // Create connection variable for mysqli::real_escape_string()
	
	$title = $con->connect()->real_escape_string($_POST['title']) ;
	$composer = $con->connect()->real_escape_string($_POST['composer']) ;
	$date = $_POST['date'] ;
	$season = $_POST['season'] ;
	$medium = $_POST['medium'] ;
	$call_no = $_POST['call_no'] ;
	$publisher = $con->connect()->real_escape_string($_POST['publisher']) ;
	$rights = $_POST['rights'] ;
	
	// Retrieve and store file info
	$file_info = pathinfo($_FILES['file']['name']) ;
	$file = uniqid() . "." . $file_info['extension'] ;
	
	// Move uploaded file to uploads folder
	$file_loc = $_FILES['file']['tmp_name'] ;
	$folder = "../uploads/" ;
	move_uploaded_file($file_loc, $folder . $file) ;


	// Insert new score
	$newScore = new ScoreInsert($title,$composer,$date,$season,$medium,$call_no,$publisher,$rights,$file,$con);
	$newScore->scoreSet();
	
}


