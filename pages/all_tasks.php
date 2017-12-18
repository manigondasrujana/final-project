<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management Application</title>
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
<h2>My Todos List</h2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); 
?>


<ul><b><i><font size="4">
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=create">Add Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</font></i></b></ul>

<?php
if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data);
} else {
	echo 'No Todos added';
}
?>

<script src="js/scripts.js"></script>
</body>
</html>
