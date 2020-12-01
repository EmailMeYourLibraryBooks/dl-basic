<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
	
	<title>SLEC Music DL | Login</title>
</head>
	
<body>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(isset($_SESSION["loggedin"])) {
    header("location: index.php");
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
        <a class="nav-link" href="items.php">All Items</a>
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

<div class="container">	
<div class="mt-4 row">
    <div class="p-4 col-lg-6">
		<h2>Saint Luke's Episcopal Church</h2>
		<h5>Digital Music Library</h5>
		
			<p>The purpose of this repository is to 1) function as a catalog for the physical music library, 2) provide discovery tools for the selection of liturgically appropriate musical works, and 3) provide full digital access to all materials held in the Saint Luke's Music Library in PDF form.</p>

			<p>DISCLAIMER: By using this digital library, you agree to refrain from sharing, distributing, or copying any works that may be protected under U.S. copyright law.</p>
	</div>
    <div class="col-lg-6 p-4 border">
		<h4>Please sign in.</h4>
        <form action="includes/login.inc.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" required="true" name="username" class="form-control" placeholder="Enter your username">        
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" required="true" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
	</div>
</div>	
</div>	

<!--Footer-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>