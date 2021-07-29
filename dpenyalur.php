<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }


date_default_timezone_set('Asia/Jakarta');

require 'functions.php';

$id = $_GET["id"];
$bulan1 = "Januari";
$bulan2 = "Pebruari";
$bulan3 = "Maret";
$tahunn = "2021";

$user = query("SELECT * FROM badanusaha WHERE id = $id ")[0];
$timsr = query("SELECT * FROM penyaluran WHERE idk = $id ");

  if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'getposisiv.php?id=$id';
  </script>"; }

  if (isset($_POST["penyalur"]))
  { echo "<script> 
  document.location.href = 'adpenyalur.php?id=$id';
  </script>"; }

?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>Data Penyaluran</title>
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
    Berlaku sampai dengan :<?=$user["masaizin"]; ?><br>

</h4>
</center>
<hr />

<center>
<table id="custom" style="font-size: 12px;text-align: center;width: 100%">
<tr>
    <th rowspan="2">No.</th> 
    <th rowspan="2">Opsi</th>
    <th rowspan="2">Tahun</th>
    <th rowspan="2">Lokasi Konsumen</th>
    <th rowspan="2">Jenis BBM</th>
    <th colspan="12">Volume Penyaluran (KL)</th>
</tr>
<tr colspan="6">
    <th><?="Jan";?> </th> 
    <th><?="Peb";?> </th>
    <th><?="Mar";?> </th>
    <th><?="April";?> </th>
    <th><?="Mei";?> </th>
    <th><?="Jun";?> </th>
    <th><?="Jul";?> </th>
    <th><?="Augt"?> </th>
    <th><?="Sept";?> </th>
    <th><?="Okt";?> </th>
    <th><?="Nop";?> </th>
    <th><?="Des";?> </th>
</tr>

<?php $i = 1 ?>
<?php foreach ($timsr as $row) : ?>

<tr style="text-align: center;font-size: 11px">
    <td><?= $i; ?> </td>
    <td> <a href="adpenyalure.php?id=<?=$row["id"];?>" >Edit</a></td>
    <td> <?= $row["thn"]; ?></td>
    <td> <?= $row["lokasi"]; ?></td>
	  <td> <?= $row["jnsbbm"]; ?></td>   
    <td><?= $row["voljanuari"];?></td>
    <td><?= $row["volpebruari"];?></td>
    <td><?= $row["volmaret"];?></td>
    <td><?= $row["volapril"];?></td>
    <td><?= $row["volmei"];?></td>
    <td><?= $row["voljuni"];?></td>
    <td><?= $row["voljuli"];?></td>
    <td><?= $row["volagustus"];?></td>
    <td><?= $row["volseptember"];?></td>
    <td><?= $row["voloktober"];?></td>
    <td><?= $row["volnopember"];?></td>
    <td><?= $row["voldesember"];?></td>

</tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>
   
</center>
</table>

<hr />
<br>
<table>
	<td style="position: right">
        <button type ="submit" name="penyalur" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Tambah Data Penyaluran</button>		
	</td>

  <td style="position: right">
     <button type ="submit" name="balik" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Kembali</button>   
  </td>
</table>


</div>

<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>

</html>