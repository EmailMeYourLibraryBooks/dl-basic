<?php
require_once "config.inc.php";
require_once "../classes/scoreset.class.php" ;

if (isset($_POST['title'], $_POST['composer'], $_POST['date'], $_POST['season'], $_POST['medium'], $_POST['call_no'], $_POST['publisher'], $_POST['rights'])) {
	
	// Declare variables
	$title = $con->real_escape_string($_POST['title']) ;
	$composer = $con->real_escape_string($_POST['composer']) ;
	$date = $_POST['date'] ;
	$season = $_POST['season'] ;
	$medium = $_POST['medium'] ;
	$call_no = $_POST['call_no'] ;
	$publisher = $con->real_escape_string($_POST['publisher']) ;
	$rights = $_POST['rights'] ;
	
	$file_info = pathinfo($_FILES['file']['name']) ;
	$file = uniqid() . "." . $file_info['extension'] ;
	
	// Move uploaded file to uploads folder
	$file_loc = $_FILES['file']['tmp_name'] ;
	$folder = "../uploads/" ;
	move_uploaded_file($file_loc, $folder . $file) ;


	// Insert new score
	$newScore = new ScoreInsert($title,$composer,$date,$season,$medium,$call_no,$publisher,$rights,$file,$con);
	$newScore->scoreSet();
	?>	
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Success!</title>
  </head>
  <body>
	  
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container">
		  <a class="navbar-brand" href="../index.php">SLEC Digital Music Library</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="../items.php">Items</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Resources
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="https://www.lectionarypage.net/" target="_blank">Lecionary Page</a>
				  <a class="dropdown-item" href="https://www.hymnary.org" target="_blank">Hymnary</a>        
				</div>
			  </li>
			<li>
				<a href="includes/logout.php">
					<button type="button" class="btn btn-outline-dark">Sign Out</button>
				</a>
			</li>
			</ul>

		  </div>
		  </div>
		</nav>

    <div class="container mt-4 alert alert-success" role="alert"> The record was successfuly added. <a href="../index.php">Click here to go home</a>, or <a href="../insert.php">click here to add another record.</a> </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>	


<?php		
	} else {
		echo "Oops. Something went wrong. Return to the previous page to try again.";
}
	?>