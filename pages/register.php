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

<h1>WSD FINAL PROJECT</h1>
<h2>Register</h2>

<form action="index.php?page=accounts&action=register" method="post">
    First name:<br> 
    <input type="text" name="fname" placeholder="first name"required><br><br>
    Last name:<br>  
    <input type="text" name="lname"placeholder="lastname" required><br><br>
    Email id :<br>  
    <input type="email" name="email" placeholder="email"required><br><br>
    Phone:<br>      
    <input type="tel" name="phone"placeholder="phone no" required><br><br>
    Birthday:<br>   
    <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br><br>
    Gender:<br>     
    <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br><br>
    Password:<br>   
    <input type="password" name="password" required><br><br><br>
    
    <input type="submit" class="btn btn-info" value="Submit">
</form>

<script src="js/scripts.js"></script>
</body>
</html>
