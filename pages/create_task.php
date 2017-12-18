<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WSD FINAL PROJECT</title>
    <meta name="description" content="WSD FINAL PROJECT">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css">


</head>

<body>
<h1>
WSD FINAL PROJECT</h1>
<h1>Add Todos</h1>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h1>Hi <?=$user_data->fname?></h1>
								
<ul>

<li><a href="index.php?page=accounts&action=all">My Account</a>
</li><br>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li><br>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li><br>
</ul>

<form action="index.php?page=tasks&action=save" method="post">
	Title:<br> 
  <input type="text" name="title" id="title" required><br>
	Body:<br> 
  <textarea name="body" id="body" required></textarea><br>
	Is Done:<br> 
  <input type="checkbox" name="isdone" id="isdone" value="1"><br><br>
  <input type="submit" value="Submit form"><br><br>
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</body>
</html>