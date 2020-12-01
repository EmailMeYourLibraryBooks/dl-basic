<?php

session_start();

require_once "includes/config.inc.php" ;

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

require_once "classes/scoreget.class.php" ;

$search = "" ;
$column =  "" ;

$all = new ScoreGet($search,$column,$con) ;
$all->getAllScores() ;



