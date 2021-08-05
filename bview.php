<?php 

session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }

require 'functions.php';
$id = $_GET["id"];
$idk = $_GET["idk"];

$queryk = query("SELECT smbpas FROM tanki WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
	<button style="width: 60px;height: 30px;cursor: pointer;" 
	onclick="location.href = 'dtangki.php?id=<?=$idk?>' ">Kembali</button>
	
	<!-- <img src="berkas/<?= $queryk["smbpas"];  ?>  "> <br> -->
	<embed src="berkas/<?= $queryk["smbpas"]; ?> "    type='application/pdf' width='100%' height='1000px'/> 
</body>
</html>