<?php
// Initialize session
session_start();

// Required includes
require_once "../classes/scoreget.class.php" ;

if (isset($_GET['search'], $_GET['column'])) {
	// Declare variables
	$search = $_GET['search'] ;
	$column = $_GET['column'] ;
	// Query database
	$newSearch = new ScoreGet($search,$column) ;
	$newSearch->search();
} else {
	echo 'How did you get here? <a href="../index.php">Go away.</a>';
}
?>




