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

$user     = query("SELECT * FROM badanusaha WHERE id = $id ")[0];
$tankisql = query("SELECT * FROM tanki WHERE idk = $id");



  if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'getposisiv.php?id=$id';
  </script>"; }

  if (isset($_POST["atanki"]))
  { echo "<script> 
  document.location.href = 'addtanki.php?id=$id';
  </script>"; }

$sumkap = query("SELECT SUM(IF(idk =$id , kapt, 0)) AS kaptotal FROM tanki ");
?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>DATA TANGKI</title>
<style>
#header {
/*    background-image: url(hed.png);
*/    background-size: 100%;
    color:white;
    text-align:center;
    padding:1px;
}
#section {
    width:100%;
    float:left;
    padding:2px;
    /*color:blue;*/
}
#footer {
    background-size: 100%;
    color:white;
    clear:both;
    text-align:center;
    background-color: #5F9EA0;
}
input{
text-decoration:none;
border: none;
/*color:blue;*/
padding-top:5px;
padding-bottom:5px;
padding-left:3px;
padding-right:3px;
}
select{
text-decoration:none;
border: none;
}

#custom {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  font-size: 11px;text-align: center;
}

#custom td, #custom th {
  border: 1px solid #ddd;
  padding: 15px; text-align: center;
}

#custom tr:nth-child(even){background-color: #f2f2f2;} /*warna selang seling*/

#custom tr:hover {background-color: #ddd;} /*warna selang seling saat kursor*/

#custom th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #6495ED;
  color: white;text-align: center;
}
</style>

</head>
<body oncontextmenu="return false;" style="width: 100%">

<div id="header">
<table width="100%">
  <td style="position: left;width: 2%"><img src="kesdm.png" width="70px"></td>
  <td style="width: 96%"></td>
  <td style="position: right;width: 2%"><img src="logoBPHMigas.png" width="150px"></td>                  
</table>
</div>

<div id="section">
<form action="" method="post" style="width: 100%">

<center>
<h4><?= $user["wilayah"];?> <br> 
    <?= $user["bu"];?><br>
    <?= $user["alamat"]; ?><br>
    Titik koordinat: <?= $user["long"];  ?>-<?= $user["lat"];  ?><br>
    No. Izin :<?= $user["noizin"]; ?><br>
    Berlaku sampai dengan :<?=tanggalindo($user["masaizin"]);?>

</h4>
</center>
<hr />

<center>
<table id="custom" style="font-size: 12px;text-align: center;width: 100%">
<tr>
    <th rowspan="2">No.</th> 
    <th rowspan="2">No. Tangki</th>       
    <th rowspan="2">Jenis BBM</th>
    <th colspan="2">Kapasitas Tangki<br>(KL)</th>
    <th rowspan="2">CD Pumpable</th>
    <th colspan="3">Data Tangki<br></th>

<!--     <th rowspan="2">Kalibrasi</th>
    <th rowspan="2">Bentuk</th>
    <th rowspan="2">Jenis</th> --> 

    <th rowspan="2">Jenis Alat<br> Penyalur</th>
    <th rowspan="2">Kalibrasi <br>Alat Penyalur</th>
    <th rowspan="2">Jam Catat<br>Stok</th>
    <th rowspan="2">OKU-<br>PANSI,%</th>
    <th rowspan="2">Kepemilikan</th>
    <th rowspan="2">Berkas</th>
</tr>
  <tr> 
    <td style="background-color: #6495ED;color: white;">Kapasitas Pumpable</td> 
    <td style="background-color: #6495ED;color: white;">Kapasitas Total</td> 

    <td style="background-color: #6495ED;color: white;">Kalibrasi</td>
    <td style="background-color: #6495ED;color: white;">Bentuk</td>
    <td style="background-color: #6495ED;color: white;">Jenis</td>
  </tr>
<?php $i = 1 ?>
<?php foreach ($tankisql as $row) : ?>

<tr>
    <td style="text-align: center;"><?= $i; ?> </td>
    <td> <?= $row["namat"]; ?> </td>
    <td style="text-align: center;" > <?= $row["jenist"]; ?>  </td>
    <td> <?= $row["kapp"]; ?> </td>
    <td> <?= $row["kapt"]; ?> </td>
    <td> <?= $row["cdpump"]; ?> </td>
    <td> <?= $row["kalibt"]; ?> </td>
    <td> <?= $row["bentukt"]; ?> </td>
    <td> <?= $row["jnstank"]; ?> </td>
    <td> <?= $row["altukut"]; ?> </td>
    <td> <?= $row["kalibu"]; ?> </td>
    <td> <?= $row["jamstok"]; ?> </td>
    <td> <?= $row["oku"]; ?> </td>
    <td> <a href="poto.php?id=<?=$row["id"];?>&idk=<?=$row["idk"];?> "><?= $row["stat"]; ?></a> </td>
    <td> 
      <a href="bview.php?id=<?=$row["id"]; ?>&idk=<?=$row["idk"];?>"><?= $row["smbpas"]; ?></a></td>
</tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>
   
   <tr>
      <?php foreach ($sumkap as $rowt) : ?>
      <td>Total Kapasitas</td><td></td><td></td><td></td>
      <td ><?=$rowt["kaptotal"];?></td>
    </tr>
    <?php endforeach; ?>
</center>
</table>

<hr />

<table>
	<td style="position: right">
        <button type ="submitt" name="atanki" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Tambah Data Tanki</button>		
	</td>

  <td style="position: right">
     <button type ="submitk" name="balik" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Kembali</button>   
  </td>
</table>

<br><br>
</div>

<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>

</html>