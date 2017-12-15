<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <style>
    body {background-color: powderblue;}
h1   {color: blue;}
h2    {color: red;}
</style>
</head>

<body> 
<h1>
<?php
$config = Manage::config();
echo $config['site_name'];
?></h1>

<h2> User Login</h2> 
<form action="index.php?page=accounts&action=login" method="POST">
    <div class="container">
        <label><b>  Username  </b></label>
        <input type="text" placeholder=" Enter Username " name="email" required></br></br>
        <label><b>  Password  </b></label>
        <input type="password" placeholder=" Enter Password " name="password" required></br></br>
        <button type="submit">Login</button>
    </div>
</form>

<h1><a href="index.php?page=accounts&action=register"> Create an Account </a></h1>
<script src="js/scripts.js"></script>
</body>
</html>