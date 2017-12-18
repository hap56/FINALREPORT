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

<h2>Edit Account</h2>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">
    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
</form>

<a href="index.php?page=accounts&action=all"><button type="button">Back</button></a>

<script src="js/scripts.js"></script>
</body>
</html>