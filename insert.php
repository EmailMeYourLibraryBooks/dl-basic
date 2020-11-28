<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>New Record</title>
  </head>
  <body>
	<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

?>
	  
	  
<!--Banner-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="index.php">SLEC Digital Music Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Items</a>
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
    </ul>
  </div>
  </div>
</nav>
	  
	  
	  
	  
	  
	  
<h1 class="container mt-5">Create a New Record.</h1>
<div  class="container border p-4 mt-4" > 
	<form action="includes/insert.inc.php" method="POST">
	  <div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Enter the title of the work">
	  </div>
	  <div class="form-group">
		<label for="composer">Composer</label>
		<input type="text" class="form-control" name="composer" placeholder="Enter the composer of the work">
	  </div>
	  <div class="form-group">
		<label for="date">Composition Year</label>
		<input type="text" class="form-control" name="date" placeholder="Enter the composition year of the work">
	  </div>
	  <div class="form-group">
	   <label for="season">Choose a Liturgical Season:</label>
	    <div class="form-group">
			<select class="form-control" id="season" name="season">
			  <option value="1">Advent</option>
			  <option value="2">Christmas</option>
			  <option value="3">Epiphany</option>
			  <option value="4">Lent</option>
			  <option value="5">Holy Week</option>
			  <option value="6">Easter</option>
			  <option value="7">Pentecost</option>
			  <option value="8">General Use</option>
			</select> 
		</div>
	   </div> 
	  <div class="form-group">
		<label for="medium">Medium of performance</label>
		<input type="text" class="form-control" name="medium" placeholder="Enter the medium of performance for the work">
	  </div>
	  <div class="form-group">
		<label for="call_no">Call Number</label>
		<input type="text" class="form-control" name="call_no" placeholder="Enter the call number for the copy in the library">
	  </div>
	  <div class="form-group">
		<label for="publisher">Publisher</label>
		<input type="text" class="form-control" name="publisher" placeholder="Enter the publisher of the edition">
	  </div>
	  <div class="form-group">
	   <label for="rights">Choose a Rights Statement: </label>
		<div class="form-group">
			<select class="form-control" id="rights" name="rights">
			  <option value="1">In Copyright</option>
			  <option value="2">In Copyright - EU Orphan Work</option>
			  <option value="3">In Copyright - Educational Use Permitted</option>
			  <option value="4">In Copyright - Non-Commercial Use Permitted</option>
			  <option value="5">In Copyright - Rights-holder(s) Unlocatable or Unidentifiable</option>
			  <option value="6">No Copyright - Contractual Restrictions</option>
			  <option value="7">No Copyright - Non-Commercial Use Only</option>
			  <option value="8">No Copyright - Other Known Legal Restrictions</option>
			  <option value="9">No Copyright - United States</option>
			  <option value="10">Public Domain</option>
			  <option value="11">Copyright Not Evaluated</option>
			  <option value="12">Copyright Undetermined</option>
			  <option value="13">No Known Copyright</option>
			</select>
		</div>
	   <div class="form-group mt-4"> 
	  <button type="submit" class="btn btn-primary">Submit</button>
		 </div
	</form>
</div> 
	  
	  
	  
	  
	  
	 
	  

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