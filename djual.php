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
$jual1 = query("SELECT * FROM dtjual1 WHERE idk = $id ");
$jual2 = query("SELECT * FROM dtjual1,dtjual2 WHERE dtjual2.idbu = $id AND 
  dtjual2.id=dtjual1.id GROUP BY dtjual2.idjns ASC");

  if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'getposisiv.php?id=$id';
  </script>"; }

  if (isset($_POST["jual"])) 
  { echo "<script> 
  document.location.href = 'adjualp.php?idbu=$id';
  </script>"; }

if (isset($_POST["tampil"]))
  {
      $th = $_POST["thcari"];

      $jual1 = query("SELECT * FROM dtjual1 WHERE idk =$id AND tahun = '$th' ");
      // $laporsql = query("SELECT * FROM laporan WHERE idk = $id");
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>Data Penjualan</title>
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
    Berlaku sampai dengan :<?=tanggalindo($user["masaizin"]);?><br><br>
    DATA PENJUALAN BBM
</h4>

<hr />
<label style="color: blue; ">Tahun :</label>
<input type="text" name="thcari" placeholder="isi tahun">
<button type ="submit" name="tampil" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Cari</button> 
<hr />


<hr />
<table id="custom" style="font-size: 12px;text-align: center;width: 96%">
<?php $i = 1 ?>
<?php foreach ($jual1 as $row) : ?>
<tr>
  <td style="color: blue;cursor: pointer;"> 
<a href="adjualb.php?id=<?=$row["id"];?>&idbu=<?=$row["idk"];?>"><?=$row["jenis"]; ?> Tahun : <?=$row["tahun"]; ?> </a></td>
<!--     <td> <?= $row["id"]; ?></td>
    <td> <?= $row["idk"]; ?></td>  -->
</tr>
<tr>
  <td><center>
        <table id="custom" style="font-size: 12px;text-align: center;width: 96%">
          <?php 
          $idkonek1 = $row["id"]; 
          $idkonek2 = $row["idk"];
          $cari=query("SELECT * FROM dtjual2 WHERE
          idbu = '$idkonek2' AND idjns = '$idkonek1' "); 
          $sumkap = query("SELECT SUM(IF(idbu = '$idkonek2' AND idjns = '$idkonek1' , vol, 0)) AS kaptotal FROM dtjual2 ");
          ?>
        <tr>
            <!-- <th>No.</th> -->  
            <th>Bulan</th>
            <th>Volume<br>(KL)</th>    
            <th>Keterangan</th>
         </tr>
        <?php $i = 1 ?>
        <?php foreach ($cari as $row) : ?>
        <tr>
            <!-- <td style="text-align: center;"><?= $i; ?> </td>    -->
            <td> <?= $row["bulan"]; ?> </td>
            <td style="text-align: center;" > <?= $row["vol"]; ?></td>   
            <td> <?= $row["ket"]; ?> </td>
        </tr>
            <?php $i++ ; ?>
            <?php endforeach; ?>

    <tr>
     <?php foreach ($sumkap as $rowt) : ?>
      <td><strong>Total :</strong></td>
      <td><?=$rowt["kaptotal"];?></td>
    </tr>
    <?php endforeach; ?>
    

        </table> </center>
  </td>


</tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>
</table>


<!-- 
<table id="custom" style="font-size: 12px;text-align: center;width: 96%">
<tr>
    <th>No.</th>  
    <th>Bulan</th>
    <th>Volume<br>(KL)</th>    
    <th>Keterangan</th>
 </tr>

<?php $i = 1 ?>
<?php foreach ($jual2 as $row) : ?>

<tr>
    <td style="text-align: center;"><?= $i; ?> </td>   
    <td> <?= $row["bulan"]; ?> <?= $row["tahun"]; ?></td>
  	<td style="text-align: center;" > <?= $row["vol"]; ?></td>   
    <td> <?= $row["ket"]; ?> </td>

</tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>
   
</center>
</table> -->

<hr />

<table>
	<td style="position: right">
        <button type ="submit" name="jual" style="width: 170px;height: 50px;font-size: 12px;cursor: pointer; " >Tambah Data Produk</button>		
	</td>

  <td style="position: right">
     <button type ="submit" name="balik" style="width: 170px;height: 50px;font-size: 12px;cursor: pointer; " >Kembali</button>   
  </td>
</table><br>
</div>
<br>
</center>
<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>

</html>