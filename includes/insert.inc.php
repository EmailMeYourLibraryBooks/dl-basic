<?php
require_once "config.inc.php";
require_once "../classes/scoreset.class.php" ;

if (isset($_POST['title'], $_POST['composer'], $_POST['date'], $_POST['season'], $_POST['medium'], $_POST['call_no'], $_POST['publisher'], $_POST['rights'])) {
	// Declare variables
	$title = $_POST['title'] ;
	$composer = $_POST['composer'] ;
	$date = $_POST['date'] ;
	$season = $_POST['season'] ;
	$medium = $_POST['medium'] ;
	$call_no = $_POST['call_no'] ;
	$publisher = $_POST['publisher'] ;
	$rights = $_POST['rights'] ;

	//echo $title . " | " . $composer . " | " . $date . " | " . $season . " | " . $medium . " | " . $call_no . " | " . $publisher . " | " . $rights;

	// Insert new score
	$newScore = new ScoreInsert($title,$composer,$date,$season,$medium,$call_no,$publisher,$rights,$con);
	echo $newScore->title;
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
    <div class="container mt-4 alert alert-success" role="alert"> Your record was successfuly added. <a href="../index.php">Click here to go home.</a> </div>

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