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
$laporsql = query("SELECT * FROM laporan WHERE idk = $id");
$laphari  = query("SELECT * FROM charian WHERE idk = $id ORDER BY jnsbbm");
// $lap3bln  = query("SELECT * FROM lap3bln WHERE idk = $id ORDER BY jnsbbm");

if (isset($_POST["hevaluasi"]))
{
      echo "<script>
          document.location.href = 'adsalur3.php?id=$id';        
        </script>";

}


if (isset($_POST["caritgl"]))
  {
  $awal  = $_POST["awal"];
  $akhir = $_POST["akhir"];
  $jnsbbm  = $_POST["jnsbbm"];
  $laphari  = query("SELECT * FROM charian
  WHERE idk='$id' AND  jnsbbm='$jnsbbm' AND tgl BETWEEN '$awal' AND '$akhir' ORDER BY jnsbbm ASC");     
       
  }

// if (isset($_POST["carijenis"]))
//   {
//   $jnsbbm  = $_POST["jnsbbm"];
//   $laphari  = query("SELECT * FROM charian
// WHERE idk='$id'AND jnsbbm='$jnsbbm' ORDER BY tgl ASC");
   
//   }




?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>Vol Cadangan BBM Harian</title>
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
  min-width: 100px;
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

<ul>
  <li><a href="indexm.php">Home</a></li>
  <li><a href="getposisiv.php?id=<?=$id?>">Back</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Tabel</a>
    <div class="dropdown-content">
      <a href="dsalur1.php?id=<?=$id?>">Tabel Evaluasi</a>
      <a href="dsalur2.php?id=<?=$id?>">Tabel Vol Penyaluran Rata"</a>
      <!-- <a href="dsalur3.php?id=<?=$id?>">Tabel Vol Penyaluran Harian</a> -->
    </div>
  </li>
</ul>

<form action="" method="post" style="width: 100%">
<label style="color: blue;" >DATA PENYEDIAAN CADANGAN OPERASIONAL BBM<br>(Harian)</label> <br>
<hr />
        <label for = "jnsbbm" style="cursor: pointer;">Pilih Jenis BBM :  </label>
          <select name="jnsbbm">
           <?php 
           
           $cari=mysqli_query($konek,"SELECT jnsbbm FROM charian WHERE idk LIKE '$id' GROUP BY jnsbbm "); ?>
           <option value="">...</option>
           <?php
            while ($data=mysqli_fetch_array($cari)) {
           ?>
             
             <option value="<?=$data['jnsbbm']?>"><?=$data['jnsbbm']?></option> 
            
           <?php
            }
           ?>
          </select>
<!--       <button type ="submit" name="carijenis" style="cursor: pointer;height: 40px;width: 100px">Cari by Jenis BBM</button> -->
<br>
      <label>Pencarian dari</label>  
      <input type="date" name="awal"  autofocus placeholder="Masukan tgl awal" autocomplete="off" style="cursor: pointer;">  
      <label>sampai</label>
      <input type="date" name="akhir" autofocus placeholder="Masukan tgl akhir" autocomplete="off" style="cursor: pointer;">  
      <button type ="submit" name="caritgl" style="cursor: pointer;height: 40px;width: 100px">Cari</button><br>
<hr />
       <button type ="submit" name="hevaluasi" style="width: 200px;height: 40px;font-size: 12px;cursor: pointer; " >Tambah Vol Cadangan Harian (Liter)</button> 

<hr />
<table id="custom" style="font-size: 12px;text-align: center;">

<tr>
    <th >No.</th>
    <th >Tanggal</th>
    <th >Jenis BBM</th>
    <th >Volume Cadangan (L)</th>
    <th >Vol Penyaluran<br> Rata-rata</th>
    <th >Volume Cadangan<br> BBM (Hari)</th>
    <!-- <th >CD Cadangan BBM (Hari) calcu</th> -->

</tr>
<?php $j = 1 ?>
<?php foreach ($laphari as $rowh) : ?>

<tr>
    <td style="text-align: center;"><?= $j; ?> </td>
    <td style="text-align: center;" > <?= tanggalindo($rowh["tgl"]); ?>     </td>
    <td> <?=$rowh["jnsbbm"]; ?> </td>
    <td> <?=$rowh["salur"]; ?> </td>
    <td> <?=$rowh["cdtl"]; ?> </td>
    <td> <?=$rowh["cdh"]; ?> </td>
    <!-- <td> <?= round((($rowh["salur"])/($rowh["cdtl"]))) ?> </td> -->
</tr>
    <?php $j++ ; ?>
    <?php endforeach; ?>
<tr>
  <?php 
  $idbu = $rowh["idk"];
  $jnsbbm = $rowh["jnsbbm"]; 

  $sum = query("SELECT 
  SUM(IF(idk = '$idbu' AND jnsbbm = '$jnsbbm' , salur, 0)) AS totalsalur ,
  SUM(IF(idk = '$idbu' AND jnsbbm = '$jnsbbm' , cdtl, 0)) AS totalcdtl
  FROM charian ");

  ?>

  <td>Evaluasi(Total)</td>
  <td></td>
  <td></td>
<?php $s = 1 ?>
<?php foreach ($sum as $rowx) : ?>
  <td><?=$rowx["totalsalur"]?></td>
  <td><?=$rowx["totalcdtl"]?></td>
  <td><?=round($rowx["totalsalur"]/$rowx["totalcdtl"])?></td>
    <?php $s++ ; ?>
    <?php endforeach; ?>
</tr>

</table>
<hr />
<table>
<!-- 	<td style="position: right">
        <button type ="submit" name="hevaluasi" style="width: 150px;height: 60px;font-size: 12px;cursor: pointer; " >Tambah Vol Cadangan Harian (Liter)</button>		
	</td>
</table> -->

<br>

</center>
</div>

<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>

</html>