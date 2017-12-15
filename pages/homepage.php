<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title >Todo Task Management Application</title>
    <meta name="description" content="Todo Task Management Application">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <style>
    body {
   
    background-image: url(http://i66.tinypic.com/155taxe.jpg), url(http://i68.tinypic.com/s0vcqg.jpg);
    background-position:center, right top;
background-repeat: no-repeat, repeat;
background-size: 800px,600px, auto}
h1   {color: blue;}
h2    {color: red;}
</style>
</head>

<body style="text-align:center;"> 
<h1>
<?php
$config = Manage::config();
echo $config['site_name'];
?></h1>

<h2 style="text-align:center;" style="color:crimson"> User Login</h2> 
<form action="index.php?page=accounts&action=login" method="POST">
    <div style="text-align:center;" class="container">
        <label style="color:darkgreen"><b>  Username  </b></label>
        <input type="text" placeholder=" Enter Username " name="email" required></br></br>
        <label style="color:darkgreen"><b>  Password  </b></label>
        <input type="password" placeholder=" Enter Password " name="password" required></br></br>
        <button type="submit">Login</button>
    </div>
</form>

<h1  style="text-align:center"><a href="index.php?page=accounts&action=register"  style="color:crimson"> Create an Account </a></h1>
<script src="js/scripts.js"></script>
</body>
</html>