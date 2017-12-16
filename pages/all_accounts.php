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
</head>

<body>
<h1> 
<?php

$config = Manage::config();
echo $config['site_name'];
?></h1>

<h2> HI, Manage your account here</h2>

</br>
<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<ul>
<li><b><font size="5"><a href="index.php?page=tasks&action=all"> My Todos List </a></font></b>
</li>
</ul>

<?php
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<ul>
<li>
<b> <font size="5">
<a href="index.php?page=accounts&action=logout">Logout</a>
</font> </b>
</li>
</ul>

<script src="js/scripts.js"></script>
</body>
</html>