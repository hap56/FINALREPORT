<?php

//displaying debugging messages 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
//autoloader class to load all the different files on different pages
include_once "autoload.php";
//database details
include_once "database.php";
//starts a program.
$response = http\processRequest::createResponse();

?>
