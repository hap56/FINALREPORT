<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//Autoloader class to load all the different pages
include_once "autoload.php";

//database credentials here
include_once "database.php";
//this starts the program as a static.
$response = http\processRequest::createResponse();
?>
