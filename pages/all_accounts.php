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
<h2>My Account</h2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h1>Hi <?=$user_data->fname?></h1>
								
<ul>
<li><a href="index.php?page=tasks&action=all">Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<?php
//print anything
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<script src="js/scripts.js"></script>
</body>
</html>