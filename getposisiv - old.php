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
// $laporsql = query("SELECT * FROM laporan WHERE idk = $id");
// $laphari  = query("SELECT * FROM charian WHERE idk = $id ORDER BY jnsbbm");
// $lap3bln  = query("SELECT * FROM lap3bln WHERE idk = $id ORDER BY jnsbbm");

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

        html, body {
            height: 100%;
            margin: 0;
        }

        #mapid {
            width: 100%;
            height: 100%;
        }

        body {
            padding: 0; margin: 0;
        }

        #mapid {
            height: 100%; width: 100%;
        }

</style>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
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
            // <?php foreach ($queryA as $row) : ?> 

              marker = new L.marker([<?=$user["lat"]; ?>, <?=$user["long"]; ?>]).bindPopup('<?=$row["bu"]; ?>,<?=$row["wilayah"]; ?>').addTo(map);
            // <?php $i++ ; ?>
            // <?php endforeach; ?>

             }
  </script>

</head>
<body oncontextmenu="return false;" style="width: 100%" onload="initialize()" >

<div id="header">
<table width="100%">
  <td style="position: left;width: 2%"><img src="kesdm.png" width="70px"></td>
  <td style="width: 96%"></td>
  <td style="position: right;width: 2%"><img src="logoBPHMigas.png" width="150px"></td>                  
</table>
</div>

<div id="section" >

<!-- <center><strong><p style="font-size: 14px">KEGIATAN MONITORING, VERIFIKASI LAPORAN DAN <br>EVALUASI PENYEDIAAN CADANGAN OPERASIONAL BBM BU NIAGA UMUM</p> </center></strong> -->
<center>
<h4><?= $user["wilayah"];?> <br> 
    <?= $user["bu"];?><br>
    <?= $user["alamat"]; ?><br>
    Titik koordinat: <?= $user["long"];  ?>-<?= $user["lat"];  ?><br>
    No. Izin NRU :<?= $user["noizin"]; ?><br>
    Berlaku sampai dengan :<?=tanggalindo($user["masaizin"]);?>
</h4>
</center>
<hr />

<ul>
  <li><a href="indexm.php">Home</a></li>
  <li><a href="getposisie.php?id=<?=$id?>">Edit</a></li>
  <!-- <li><a href="getposisipv.php?id=$id">Back</a></li> -->
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Data Input</a>
    <div class="dropdown-content">
      <a href="dtims.php?id=<?=$id?>">Nama Tim Survey</a>
      <a href="dnosk.php?id=<?=$id?>">Data SK Izin Usaha</a>
      <a href="dcp.php?id=<?=$id?>">Data Kontak Person</a>
      <a href="dtangki.php?id=<?=$id?>">Data Tangki</a>
      <a href="dpasok.php?id=<?=$id?>">Data Penyedia BBM</a>
      <a href="dpenyalur.php?id=<?=$id?>">Data Penyaluran BBM</a>
      <a href="dmoda.php?id=<?=$id?>">Data Sarana dan Fasilitas</a>
      <a href="djual.php?id=<?=$id?>">Data Penjualan</a>
      <a href="ddepo.php?id=<?=$id?>">Kantor Cabang & Depo</a>
      <a href="dsalur.php?id=<?=$id?>">Data CD Harian </a>
      <a href="dsaran.php?id=<?=$id?>">Masukan </a>
      <a href="dtindak.php?id=<?=$id?>">Tindak Lanjut </a>
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
<center>
<table border="1" width="95%">
  <td width="40%">
  <table>
<!--   <input type="text" name="tglterbit" hidden> 
  <input type="text" name="jnsush" hidden>-->
  <input type="text" name="kec" hidden>
 <!--  <input type="text" name="status" hidden> -->
  <input type="text" name="kab" hidden>
  <input type="text" name="prov" hidden>
<!-- 
  <input type="text" name="tgliu" hidden>
  <input type="text" name="msiu" hidden>
  <input type="text" name="stiu" hidden> -->

  <tr>
    <td><label>Wilayah</label></td>
    <td>:</td>
    <td><label><?= $user["wilayah"];?></label></td>
  </tr>
  <tr>
    <td><label>Nama Badan Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="bu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["bu"];?> "  ></td>
  </tr>
  <tr>
    <td><label>NPWP</label></td>
    <td>:</td>
    <td><input type="text" name="npwp" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["npwp"];?> "></td>
  </tr>

  <tr>
    <td><label>Jenis Izin Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="jnsush" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Niaga Terbatas/Niaga Umum/Pengolahan Hasil Olahan/dll" value="<?= $user["jnsush"];?> "></td>
  </tr>

  <tr>
    <td><label>No. Izin Usaha Niaga Migas</label></td>
    <td>:</td>
    <td><input type="text" name="noiz" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["noiz"];?> "  ></td>
  </tr>

  <tr>
    <td><label>Tgl. Izin Usaha Niaga Migas</label></td>
    <td>:</td>
    <td><input type="text" name="tgliu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tgliu"];?> " ></td>
  </tr>

  <tr>
    <td><label>Masa Berlaku Izin Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="msiu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["msiu"];?> " ></td>
  </tr>

    <tr>
    <td><label>Status Izin Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="stiu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["stiu"];?> " ></td>
  </tr>

  <tr>
    <td><label>No. Sertifikat NRU</label></td>
    <td>:</td>
    <td><input type="text" name="noizin" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["noizin"];?> " ></td>
  </tr>
  
  <tr>
    <td><label>Tgl. Terbit NRU</label></td>
    <td>:</td>
    <td><input type="text" name="tglterbit" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tglterbit"];?> " ></td>
  </tr>

  <tr>
    <td><label>Masa Berlaku NRU</label></td>
    <td>:</td>
    <td><input type="text" name="masaizin" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["masaizin"];?> " ></td>
  </tr>

    <tr>
    <td><label>Status NRU</label></td>
    <td>:</td>
    <td><input type="text" name="status" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["status"];?> " ></td>
  </tr>

  <tr>
    <td><label>Alamat Badan Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="alamat" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["alamat"];?> " ></td>
  </tr>

  <tr>
    <td><label>No. Telp</label></td>
    <td>:</td>
    <td><input type="text" name="telp" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["telp"];?> " ></td>
  </tr>

  <tr>
    <td><label>No. Fax</label></td>
    <td>:</td>
    <td><input type="text" name="fax" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["fax"];?> " ></td>
  </tr>

  <tr>
    <td><label>Nama Penanggung Jawab</label></td>
    <td>:</td>
    <td><input type="text" name="namap" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["namap"];?> " ></td>
  </tr>

 </table>  

</td>
<!-- --------------sisi sebelahnya--------------------- -->

<td width="45%"> <table>

  <tr>
    <td><label>Jabatan</label></td>
    <td>:</td>
    <td><input type="text" name="jabatan" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jabatan"];?> " ></td>
  </tr>

  <tr>
    <td><label>No.HandPhone</label></td>
    <td>:</td>
    <td><input type="text" name="nohpjab" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["nohpjab"];?> " ></td>
  </tr>

  <tr>
    <td><label>Alamat Fasilitas Penyimpanan</label></td>
    <td>:</td>
    <td><input type="text" name="alamatf" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["alamatf"];?> " ></td>
  </tr>

  <tr>
    <td><label>Titik Koordinat <br>Fas. Penyimpanan (long/lat)</label></td>
    <td>:</td>
    <td><input type="text" name="long" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="longitude" value="<?= $user["long"];?> "></td>
  </tr><tr><td></td><td>:</td>
    <td><input type="text" name="lat" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="latitude" value="<?= $user["lat"];?> " ></td>
  </tr>

  <tr>
    <td><label>Nama Contact Person</a></label></td>
    <td>:</td>
    <td><input type="text" name="namac" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["namac"];?> " ></td>
  </tr>

  <tr>
    <td><label>No. HP Contact Person</label></td>
    <td>:</td>
    <td><input type="text" name="telpc" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["telpc"];?> " ></td>
  </tr>

  <tr>
    <td><label>Email Contact Person</label></td>
    <td>:</td>
    <td><input type="text" name="emailc" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["emailc"];?> " ></td>
  </tr>
  
  <tr>
    <td><label>Total Jumlah Tanki Penyimpanan </label></td>
    <td>:</td>
    <td><input type="text" name="sumtanki" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["sumtanki"];?> " ></td>
  </tr>

  <tr>
    <td><label>Rencana pembangunan tangki</label></td>
    <td>:</td>
    <td><input type="text" name="tankiplant" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tankiplant"];?> " ></td>
  </tr>

  <tr>
    <td><label>Volume stok BBM saat kunjungan(L)</label></td>
    <td>:</td>
<!--     <td><input type="text" name="visitstok" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="L" id="inputAngka"><br>
      <label id="showTextRibuan"></label> -->
    
  <td>  
  <div class="box">
    <input type="text" name="visitstok" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["visitstok"];?> " id="inputAngka"><br>
    <center><label id="showTextRibuan" ></label></center>
    </div>
  </div>
</td>

  </tr>
  <tr></tr>

  <tr>
    <td><label>Sistem Aplikasi Laporan yang digunakan</label><br>
    <label>Bahasa Pemograman</label></td>
    <td>:</td>
    <td><input type="text" name="bhsapk" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["bhsapk"];?> " ></td>
  </tr>

  <tr>
    <td><label>Type Database</label></td>
    <td>:</td>
    <td><input type="text" name="dbapk" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["dbapk"];?> " ></td>
  </tr>

  <tr>
    <td><label>SDM IT yang dimiliki</label></td>
    <td>:</td>
    <td><select name="itsdm1" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="<?= $user["itsdm1"];?> "><?= $user["itsdm1"];?></option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Jumlahnya SDM IT, jika ada</label></td>
    <td>:</td>
    <td><input type="text" name="itsdm2" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["itsdm2"];?> " ></td>
  </tr>

  <tr>
    <td><label>Infrastruktur Server yang dimiliki</label></td>
    <td>:</td>
    <td><select name="server1" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="<?= $user["server1"];?> "><?= $user["server1"];?></option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Jika ada, sebutkan</label></td>
    <td>:</td>
    <td><input type="text" name="server2" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["server2"];?> "></td>
  </tr>

</td>


</table>


</table>
</center>

<hr />

<br><br>
<hr />
<!--     <center>
        <button type ="submitk" name="submitk" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Edit</button> 
        <button type ="submitp" name="cetak" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Cetak</button>
        <button type ="submitl" name="balik" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer; " >Kembali</button>
    </center> -->
</div>

<div id="footer" >
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>

</html>