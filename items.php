<?php

session_start();

require_once "includes/config.inc.php" ;
require_once "classes/scoreget.class.php" ;

$search = "" ;
$column =  "" ;

$all = new ScoreGet($search,$column,$con) ;
$all->getAllScores() ;



