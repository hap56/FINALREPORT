<?php

class homepageController extends http\controller
{

public static function show()
{
$templateData['site_name'] = 'Todo Task Management';

session_start();
$templateData['userID'] = @$_SESSION["userID"];
if($templateData['userID']) {
header("Location: index.php?page=accounts&action=all");
}
self::getTemplate('homepage', $templateData);
}
public static function create()
{
//I just put a $_POST here but this is where you would put the code to add a record
print_r($_POST);
}
}
