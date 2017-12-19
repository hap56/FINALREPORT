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
WSD FINAL PROJECT
</h1>
<h2>Login</h2>

<form action="index.php?page=accounts&action=login" method="POST">
    <div class="container">
        <label><b>Email id</b></label><br>
        <input type="text" placeholder="Enter Email id" name="email" required><br>

        <label><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="password" required><br><br>

        <button type="submit">Login</button>
    </div>
</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

<script src="js/scripts.js"></script>
</body>
</html>