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
<h1>Edit Todos</h1>
<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h2>Hi <?=$user_data->fname?></h2>
								
<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">
	Title: <input type="text" name="title" id="title" value="<?php echo $data->title; ?>" required><br>
	Body: <textarea name="body" id="body" required><?php echo $data->body; ?></textarea><br>
	Is Done: <input type="checkbox" name="isdone" id="isdone" value="1" <?php if($data->isdone == '1'){echo 'checked="checked"';}?>><br>
	<input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>">
    <input type="submit" value="Submit form">
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</body>
</html>