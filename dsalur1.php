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
// $tankisql = query("SELECT * FROM tanki WHERE idk = $id");
$laporsql = query("SELECT * FROM laporan WHERE idk = $id");
$laphari  = query("SELECT * FROM charian WHERE idk = $id ORDER BY jnsbbm");
// $lap3bln  = query("SELECT * FROM lap3bln WHERE idk = $id ORDER BY jnsbbm");

if (isset($_POST["aevaluasi"]))
{
      echo "<script>
          document.location.href = 'adsalur1.php?id=$id';        
        </script>";

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>Cadangan BBM(BPH-LEMIGAS) </title>
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
<center>
<h4><?= $user["wilayah"];?> <br> 
    <?= $user["bu"];?><br>
    <?= $user["alamat"]; ?><br>
    Titik koordinat: <?= $user["long"];  ?>-<?= $user["lat"];  ?><br>
    No. Izin :<?= $user["noizin"]; ?><br>
    Berlaku sampai dengan : <?=tanggalindo($user["masaizin"]); ?><br>

</h4>
<hr />

<ul>
  <li><a href="indexm.php">Home</a></li>
  <li><a href="dsalur.php?id=<?=$id?>">Back</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Tabel</a>
    <div class="dropdown-content">
      <!-- <a href="dsalur1.php?id=<?=$id?>">Tabel Evaluasi</a> -->
      <a href="dsalur2.php?id=<?=$id?>">Tabel Vol Penyaluran Rata"</a>
      <a href="dsalur3.php?id=<?=$id?>">Tabel Vol Penyaluran Harian</a>
    </div>
  </li>
</ul>

<form action="" method="post" style="width: 100%">
   
<center> 
  <label style="color: blue; ">TABEL EVALUASI</label>
<table id="custom" style="font-size: 12px;text-align: center;">
<tr>
    <th >No.</th>
    <th >TAHUN</th>
    <th >PERIODE</th>
    <th >JENIS<br>BBM</th>
    <th >NAMA<br>FASILITAS</th>
<!--     <th>TOTAL VOL<br>SALUR THN<br>SEBELUMNYA</th>
    <th>RATA" VOL<br>SALUR THN<br>SEBELUMNYA</th> -->
    <th>TOTAL VOL<br> CADANGAN<br>(PERIODE)</th>
    <th>TOTAL VOL <br>PENYALURAN HARIAN RATA" <br>(PERIODE)</th>
    <th>CADANGAN <br>OPERASIONAL <br>BBM (HARI)</th>
    <th>EVALUASI</th>
</tr>
<?php $i = 1 ?>
<?php foreach ($laporsql as $rowb) : ?>

<tr>
    <td style="text-align: center;"><?= $i; ?> </td>
    <td style="text-align: center;" > <?= $rowb["thn"]; ?>     </td>
    <td> <?= $rowb["priod"]; ?> </td>
    <td> <?= $rowb["jnsbbm"]; ?> </td>
    <td> <?= $rowb["fasilitas"]; ?> </td>
<!--     <td> <?= $rowb["tsalurthsbl"]; ?> </td>
    <td> <?= $rowb["ratasalurthsbl"]; ?> </td> -->
    <td> <?= $rowb["dtstok"]; ?> </td>
    <td> <?= $rowb["dtsalur"]; ?> </td>
    <td> <?= round((($rowb["dtstok"])/($rowb["dtsalur"]))) ?> </td>
    <td> 
      <?php $hari11 = round((($rowb["dtstok"])/($rowb["dtsalur"])));

    if ($hari11 > 11) {
      echo "$hari11 > 11";
    } else {
      echo "<font color=red> $hari11 < 11</font>";
    }  ?>  
    </td>
</tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>

<br></table>
<hr />
<table>
	<td style="position: right">
        <button type ="submite" name="aevaluasi" style="width: 230px;height: 35px;font-size: 12px;cursor: pointer; " >Tambah Data Evaluasi</button>		
	</td>
</table>


</center>
</div>
<br>
<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>

</html>