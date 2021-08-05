<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }


date_default_timezone_set('Asia/Jakarta');

require 'functions.php';

$djnsbbm = query("SELECT * FROM jbbm ORDER BY jnsbbm ");

  if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'indexm.php';
  </script>"; }

  if (isset($_POST["jnsbbm"])) 
  { echo "<script> 
  document.location.href = 'adjnsbbm.php';
  </script>"; }

?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>Data SK Izin Usaha</title>
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
<h4>KEGIATAN MONITORING DAN VERIFIKASI LAPORAN PENYEDIAAN CADANGAN OPERASIONAL BBM
<br>DAFTAR JENIS BBM 
</h4>

<hr />

<table id="custom" style="font-size: 12px;text-align: center;width: 96%">
<tr>
    <th>No.</th>  
    <th>Jenis BBM</th>
    <th>Keterangan</th>
</tr>

<?php $i = 1 ?>
<?php foreach ($djnsbbm as $row) : ?>

<tr>
    <td style="text-align: center;"><?= $i; ?> </td>   
  	<td style="text-align: center;" > <?=$row["jnsbbm"]; ?></td>
    <td style="text-align: center;" > <?=$row["ket"]; ?></td>  
</tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>
   
</center>
</table> 

<hr />

<table>
	<td style="position: right">
        <button type ="submit" name="jnsbbm" style="width: 170px;height: 50px;font-size: 12px;cursor: pointer; " >Tambah Data Jenis BBM</button>		
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