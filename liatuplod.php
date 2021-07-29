<?php 

session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }

require 'functions.php';
$id = $_GET["id"];
$queryk = query("SELECT * FROM uplod WHERE id = $id")[0];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
	<img src="img/<?= $queryk["poto"];  ?>  "> <br>
	<button style="width: 60px;height: 30px;cursor: pointer;" onclick="location.href = 'index.php' ">Kembali</button>
</body>
</html>