<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

    <title>Sign Up</title>
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container">
	  <a class="navbar-brand" href="index.php">SLEC Digital Music Library</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="index.php">Home</a>
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
	  
  <div class="container mt-4">
        <h2>Sign Up</h2>
	    <p>Please fill this form to create an account.</p>
        
	  <form action="includes/register.inc.php" method="post" autocomplete="off">

		  <div class="form-group">
                <label>Username</label>
                <input type="text" required="true" name="username" class="form-control" placeholder="Enter a username"> 
            </div>  
            
		  <div class="form-group">
                <label>Password</label>
                <input type="password" required="true" name="password" class="form-control" placeholder="Enter a password">			
            </div>
		  
		   <div class="form-group">
                <label>Email</label>
                <input type="email" required="true" name="email" class="form-control" placeholder="Enter your email">
            </div>
            
		  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            
		  <p>Already have an account? <a href="login.php">Login here</a>.</p>
        
	  </form>
	  
    </div>    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>