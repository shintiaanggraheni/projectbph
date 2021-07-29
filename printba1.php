<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }


date_default_timezone_set('Asia/Jakarta');

require 'functions.php';
require 'gettgl.php';

$id   = $_GET["id"];
$stgs = $_GET["stugas"];

$user   = query("SELECT * FROM badanusaha WHERE id = $id ")[0];
$tims   = mysqli_query($konek,"SELECT * FROM tims WHERE idk = $id AND stugas LIKE '%$stgs%' ");
$data=mysqli_fetch_array($tims);

//   $tgls = $data["tglstugas"];
//   $tahun = substr($tgls, 0, 4);
//   $bulan = substr($tgls, 5, 2);
//   $tgl   = substr($tgls, 8, 2);
// echo("$tgl/$bulan/$tahun");
?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>MonevBBM(BPH-LEMIGAS) </title>
<style>
#header {
	background-size: 100%;
    color:white;
    text-align:center;
    padding:1px;
}
#section {
    width:100%;
    float:left;
    padding:2px;
}
#footer {
    background-size: 100%;
    color:white;
    clear:both;
    text-align:center;
    background-color: #5F9EA0;
}
</style>
</head>
<body oncontextmenu="return false;" style="width: 100%">

<div id="header">
<table width="100%"> 

  <td style="position: left;width: 2%"><a href="getposisiv.php?id=<?=$id?>"><img src="kesdm.png" width="70px"></a></td>
  <td style="width: 96%"></td>
  <td style="position: right;width: 2%"><img src="logoBPHMigas.png" width="150px"></td>                  
</table>
</div>

<div id="section">
<center><h2>Berita Acara<br>MONITORING DAN VERIFIKASI DATA</h2></center></td>
<center><h3>
PENYEDIAAN CADANGAN OPERASIONAL BBM dan <br>
PEMETAAN FASILITAS PENYIMPANAN BBM<br>
TRIWULAN : <?=$data["tw"]?>, TAHUN : <?=$data["tahun"]?> </h3></center>
<br><br>
<table width="80%" style="text-align: all;;" >
  <tr>
Pada hari ini <?=$data["hari"]?> tanggal <?=$data["tanggal"]?> bulan <?=$data["bulan"]?> tahun <?=$data["tahun"]?> telah dilakukan Monitoring dan verifikasi lapangan sebagai bagian dari program Monitoring Fasilitas Penyimpanan Badan Usaha Niaga Umum BBM pada <?=$user["bu"]?>, berdasarkan surat tugas Direktur BBM Nomor : <?=$data["stugas"]?> tanggal <?=$data["tglstugas"]?> dengan hasil sebagai berikut:
<tr>
</table>

</div>
<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>
</html>




