<?php 


date_default_timezone_set('Asia/Jakarta');

require 'functions.php';
require 'gettgl.php';

$id = $_GET["id"];
$user = query("SELECT * FROM badanusaha WHERE id = $id ")[0];


// $queryA = mysqli_query($konek, "SELECT * FROM badanusaha ORDER BY id ASC "); 

if (isset($_POST["submit1"]))
  {
      $provinsi = $_POST["provinsi"];

      $sqlc = ("SELECT * FROM badanusaha WHERE prov LIKE '%$provinsi%' ORDER BY prov ASC ");
      $queryA = mysqli_query($konek,$sqlc); 

      echo "DATA BADAN USAHA (TBB)";
        echo "<script> initialize() </script>";
  }

if (isset($_POST["submit2"]))
  {
      $mor = $_POST["mor"];

      $sqld = ("SELECT * FROM badanusaha WHERE mor LIKE '%$mor%' ORDER BY mor ASC ");
      $queryA = mysqli_query($konek,$sqld); 

      echo "DATA BADAN USAHA (TBB)";
        echo "<script> initialize() </script>";
  }



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DATA BADAN USAHA(TBBM)</title>
<!-- 	<style>
	#mapid{
		width: 100%;
		height: 70%;
	}
	</style> -->

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        #mapid {
            width: 100%;
            height: 70%;
        }

        body {
            padding: 0; margin: 0;
        }

        #mapid {
            height: 45%; width: 100vw;
        }
	</style>

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>





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


 
            // <?php $i = 1 ?>
            // <?php foreach ($user as $row) : ?> 

            	marker = new L.marker([<?=$user["lat"]; ?>, <?=$user["long"]; ?>]).bindPopup('<?=$row["bu"]; ?>-<?=$row["Wilayah"]; ?>,<?=$row["prov"]; ?>').addTo(map);
            // <?php $i++ ; ?>
            // <?php endforeach; ?> 
          }
	</script>

</head>
<body onload="initialize()" oncontextmenu="return false;">
	<div id="mapid"></div>


<form action="" method="post">

<!-- <label style="width: 12px">Pilih Provinsi :</label>

        <select name="provinsi" >
          <option value=""></option>
           <?php 

           $cari=mysqli_query($konek,"SELECT * FROM badanusaha GROUP BY prov ORDER BY prov ASC ");
            while ($data=mysqli_fetch_array($cari)) {
           ?>
             
             <option value="<?=$data['prov']?>"><?=$data['prov']?></option> 
            
           <?php

            }
           ?>
          </select>

<button type ="submit" name="submit1" style="cursor: pointer;height: 25px;width: 100px">Tampilkan</button> 

<label style="width: 12px">Pilih MOR :</label>

        <select name="mor" >
          <option value=""></option>
           <?php 

           $cari=mysqli_query($konek,"SELECT * FROM badanusaha GROUP BY mor ORDER BY mor ASC ");
            while ($data=mysqli_fetch_array($cari)) {
           ?>
             
             <option value="<?=$data['mor']?>"><?=$data['mor']?></option> 
            
           <?php

            }
           ?>
          </select>

<button type ="submit" name="submit2" style="cursor: pointer;height: 25px;width: 100px">Tampilkan</button>  -->

<a href="index.html">Ke Menu</a>




</form>
<!-- <table border="1" cellpadding="10" cellspacing="0" style="width: 100%;border: all;">

 
    <thead>
            <tr>
                <th>No.</th>
                <th>Wilayah</th>
                <th style="width: 200px">Badan Usaha</th>
                <th>Nama TBBM/DPPU</th>
                <th>Alamat</th>
            </tr>
    </thead>

  <tbody> 
            <?php $i = 1 ?>
            <?php foreach ($queryA as $row) : ?>
             <tr>
                <td style="text-align: center;"><?= $i; ?> </td>
                <td style="text-align: center;"><?= $row["mor"];  ?> </td>
                <td style="text-align: center;"><?= $row["bu"];  ?> </td>
                <td style="text-align: center;"><a class="link" href= "form1.php?id=<?= $row["id"]; ?>" ><?= $row["jenis"];  ?> - <?= $row["nama"];  ?> </a> </td>
                 <td style="text-align: center;"> <?= $row["alamat"];  ?> </td>
            </tr>  
            <?php $i++ ; ?>
            <?php endforeach; ?>


   </tbody> 

  </table> -->


</body>
</html>