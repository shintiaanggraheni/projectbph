<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }


date_default_timezone_set('Asia/Jakarta');

require 'functions.php';
require 'gettgl.php';

$id = $_GET["id"];
$user = query("SELECT * FROM badanusaha WHERE id = $id ")[0];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DATA BADAN USAHA(TBBM)</title>
<!-- 	<style>
	#mapid{
		width: 100%;
		height: 700px;
	}
	</style> -->

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        #mapid {
            width: 100%;
            height: 600px;
        }

        body {
            padding: 0; margin: 0;
        }

        #mapid {
            height: 55%; width: 100vw;
        }
	</style>

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script src="leaflet.ajax.min.js"></script>

	<script>  

		function initialize() {
		var map = L.map('mapid').setView([-0.3761095,115.9474994],3.8); 

  // var map = L.map('mapid').setView([-6.2660556,106.9188065],11.4);


		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
			maxZoom: 30,
			id: 'mapbox.streets',
			accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		}).addTo(map);

		L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=Rz5pVRx80j1aFL7EI9yL', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);


 
            <?php $i = 1 ?>
            <?php foreach ($user as $row) : ?> 

            	marker = new L.marker([<?=$row["lat"]; ?>, <?=$row["long"]; ?>]).bindPopup('<?=$row["bu"]; ?>,<?=$row["Wilayah"]; ?>').addTo(map);
            <?php $i++ ; ?>
            <?php endforeach; ?> }
	</script>

</head>
<body onload="initialize()" oncontextmenu="return false;">
<div id="mapid"></div>
</body>
</html>