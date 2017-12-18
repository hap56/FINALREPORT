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
<h1>All Todos</h1>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); ?>

<h1>Hi <?=$user_data->fname?></h1>

<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=create">Add Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<?php
//print anything
if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data);
} else {
	echo 'Data not found';
}
?>

<script src="js/scripts.js"></script>
</body>
</html>