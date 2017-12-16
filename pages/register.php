<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Create your Todo Account </title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">
   <link rel="stylesheet" href="css/styles.css?v=1.0">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h1>
<?php
$config = Manage::config();
echo $config['site_name'];
?></h1>

<h2 style="color:darkblue"> Enter your details Here</h2>
<form action="index.php?page=accounts&action=register" method="post" style="color:purple">
<b><i><font size="4">
    First name:<input type="text" name="fname" placeholder="first name"required size="30"><br><br>
    Last name: <input type="text" name="lname"placeholder="lastname" required size="29"><br><br>
    Email or username: <input type="email" name="email" placeholder="username"required size="21.5"><br><br>
    Phone: <input type="tel" name="phone"placeholder="phone no" required size="33"><br><br>
    Birthday: <input type="text" name="birthday" placeholder="yyyy-mm-dd" required size="30"><br><br>
    Gender: <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br><br>
    Password: <input type="password" name="password" required size="30"><br><br>
    <input type="submit" value="Save"><br>
   </font></i></b> 
</form>

<script src="js/scripts.js"></script>
</body>
</html>
