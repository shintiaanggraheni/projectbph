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
$tankisql = query("SELECT * FROM tanki WHERE idk = $id");
$laporsql = query("SELECT * FROM laporan WHERE idk = $id");
$laphari  = query("SELECT * FROM charian WHERE idk = $id ORDER BY jnsbbm");
$lap3bln  = query("SELECT * FROM lap3bln WHERE idk = $id ORDER BY jnsbbm");

// $que = mysqli_query($konek,"SELECT masaizin FROM badanusaha WHERE id = $id "); 
// $row = mysqli_fetch_assoc($que);

if (isset($_POST["submitk"]))
{
      echo "<script>
          document.location.href = 'getposisie.php?id=$id';        
        </script>";

}

  if (isset($_POST["cetak"]))
  { echo "<script> 
  document.location.href = 'getposisip.php?id=$id';
  </script>"; }

  if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'indexm.php';
  </script>"; }

  if (isset($_POST["atanki"]))
  { echo "<script> 
  document.location.href = 'addtanki.php?id=$id';
  </script>"; }

?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>MonevBBM(BPH-LEMIGAS) </title>
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
  font-size: 12px;text-align: center;
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

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #5F9EA0;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color:  #6495ED;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #6495ED;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<!-- CSS FOR MAPS -->
<style>
.map-container{
overflow:hidden;
padding-bottom:1%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:50%;
width:50%;
position:absolute;
}
  </style>
<!-- END CSS FOR MAPS -->
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
<ul>
  <li><a href="indexm.php">Home</a></li>
  <!-- <li><a href="getposisipv.php?id=$id">Back</a></li> -->
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Input</a>
    <div class="dropdown-content">
      <a href="dtims.php?id=<?=$id?>">Nama Tim Survey</a>
      <a href="dtangki.php?id=<?=$id?>">Data Tangki</a>
      <a href="dpasok.php?id=<?=$id?>">Data Penyedia BBM</a>
      <a href="dpenyalur.php?id=<?=$id?>">Data Penyaluran BBM</a>
      <a href="dmoda.php?id=<?=$id?>">Data Sarana dan Fasilitas</a>
      <a href="djual.php?id=<?=$id?>">Data Penjualan</a>
      <a href="ddepo.php?id=<?=$id?>">Kantor Cabang & Depo</a>
      <a href="dsalur.php?id=<?=$id?>">Data CD Harian </a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Print</a>
    <div class="dropdown-content">
      <a href="dtimsmp.php?id=<?=$id?>">Berita Acara</a>
      <a href="$.php?id=<?=$id?>">Data Fasilitas Penyimpanan</a>
      <a href="#.php?id=<?=$id?>">Data Penyedian BBM</a>
      <a href="#.php?id=<?=$id?>">Data Penyaluran BBM</a>
      <a href="#.php?id=<?=$id?>">Data Sarana dan Fasilitas</a>
      <a href="#.php?id=<?=$id?>">Data Penjualan perbulan</a>  
      <a href="#.php?id=<?=$id?>">Kantor Cabang & Depo</a>    
      <a href="#.php?id=<?=$id?>">Data CD Harian(bulan)</a>
    </div>
  </li>
</ul>

<form action="" method="post" style="width: 100%">
<!-- CSS FOR MAPS -->
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>
<!-- END CSS FOR MAPS -->
<br><br>
</div>

<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>
</html>