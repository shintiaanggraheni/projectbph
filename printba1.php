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

$user     = query("SELECT * FROM badanusaha WHERE id = $id ")[0];
$tankisql = query("SELECT * FROM tanki WHERE idk = $id");



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
TRIWULAN : <?=$data["tw"]?>, TAHUN : <?=$data["tahun"]?> </h3>
<br><br>
<table border="1" width="85%" style="text-align: all;" >
<tr>
	<!-- style="padding-left: 30px;padding-right: 30px: " -->
<td colspan="3">
Pada hari ini <?=$data["hari"]?> tanggal <?=$data["tanggal"]?> bulan <?=$data["bulan"]?> tahun <?=$data["tahun"]?> telah dilakukan Monitoring dan verifikasi lapangan sebagai bagian dari program Monitoring Fasilitas Penyimpanan Badan Usaha Niaga Umum BBM pada <?=$user["bu"]?>, berdasarkan surat tugas Direktur BBM Nomor : <?=$data["stugas"]?> tanggal <?=$data["tglstugas"]?> dengan hasil sebagai berikut:
</td>
</tr>

<tr>
 <td colspan="3">1. DATA BADAN USAHA NIAGA UMUM BBM	</td>
</tr>

<tr >
 <td style="padding-left: 20px;">Nama Badan Usaha</td>
 <td>:</td>
 <td><?=$user["bu"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">No. Izin Usaha Niaga Migas</td>
 <td>:</td>
 <td><?=$user["noiz"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">Masa Berlaku</td>
 <td>:</td>
 <td>Berlaku sampai dengan :<?=$user["msiu"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">Alamat Badan Usaha</td>
 <td>:</td>
 <td><?=$user["alamat"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">NPWP</td>
 <td>:</td>
 <td><?=$user["noiz"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">No. Telp/ Fax</td>
 <td>:</td>
 <td><?=$user["noiz"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">Pimpinan</td>
 <td>:</td>
 <td><?=$user["namap"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">Alamat Fasilitas</td>
 <td>:</td>
 <td><?=$user["alamatf"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">Koordinat </td>
 <td>:</td>
 <td><?=$user["long"]?>,<?=$user["lat"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">Contact Person</td>
 <td>:</td>
 <td><?=$user["namac"]?></td>
</tr>

<tr >
 <td style="padding-left: 20px;">No. HP</td>
 <td>:</td>
 <td><?=$user["telpc"]?></td>
</tr>

</table></center>

<center><table>
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
</table></center>




</div>
<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>
</html>




