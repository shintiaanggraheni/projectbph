<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }
 
date_default_timezone_set('Asia/Jakarta');

require 'functions.php';


$lat  = $_GET["param1"];
$long = $_GET["param2"];


if (isset($_POST["submitk"]))
{
$wilayah  =htmlspecialchars($_POST["wilayah"]);
$bu       =htmlspecialchars($_POST["bu"]);
$noizin   =htmlspecialchars($_POST["noizin"]);
$tglterbit=htmlspecialchars($_POST["tglterbit"]);
$masaizin =htmlspecialchars($_POST["masaizin"]);
$alamat   =htmlspecialchars($_POST["alamat"]);
$telp     =htmlspecialchars($_POST["telp"]);
$nosk     =htmlspecialchars($_POST["nosk"]);
$namap    =htmlspecialchars($_POST["namap"]);
$alamatf  =htmlspecialchars($_POST["alamatf"]);
$kec      =htmlspecialchars($_POST["kec"]);
$kab      =htmlspecialchars($_POST["kab"]);
$prov     =htmlspecialchars($_POST["prov"]);
$long     =htmlspecialchars($_POST["long"]);
$lat      =htmlspecialchars($_POST["lat"]);
$namac    =htmlspecialchars($_POST["namac"]);
$status   =htmlspecialchars($_POST["status"]);
$telpc    =htmlspecialchars($_POST["telpc"]);
$emailc   =htmlspecialchars($_POST["emailc"]);
$sumtanki =htmlspecialchars($_POST["sumtanki"]);
$tankiplant=htmlspecialchars($_POST["tankiplant"]);
$visitstok=htmlspecialchars($_POST["visitstok"]);
$bhsapk   =htmlspecialchars($_POST["bhsapk"]);
$dbapk    =htmlspecialchars($_POST["dbapk"]);
$itsdm1   =htmlspecialchars($_POST["itsdm1"]);
$itsdm2   =htmlspecialchars($_POST["itsdm2"]);
$server1  =htmlspecialchars($_POST["server1"]);
$server2   =htmlspecialchars($_POST["server2"]);
$ket1      =htmlspecialchars($_POST["ket1"]);
$ket2      =htmlspecialchars($_POST["ket2"]);

$sql = "INSERT INTO `badanusaha` (`wilayah`, `bu`, `noizin`, `tglterbit`, `masaizin`, `alamat`, `telp`, `nosk`, `namap`, `alamatf`, `kec`, `kab`, `prov`, `long`, `lat`, `namac`, `status`, `telpc`, `emailc`, `sumtanki`, `tankiplant`, `visitstok`, `bhsapk`, `dbapk`, `itsdm1`, `itsdm2`, `server1`, `server2`, `ket1`, `ket2`)
VALUES ('$wilayah', '$bu', '$noizin', '$tglterbit', '$masaizin', '$alamat', '$telp', '$nosk', '$namap', '$alamatf', '$kec', '$kab', '$prov', '$long', '$lat', '$namac', '$status', '$telpc', '$emailc', '$sumtanki', '$tankiplant', '$visitstok', '$bhsapk', '$dbapk', '$itsdm1', '$itsdm2', '$server1', '$server2', '$ket1', '$ket2')";

mysqli_query($konek,$sql);

if (mysqli_affected_rows($konek) > 0) {

  // if ( tambah($_POST) > 0 ) {
      echo "<script>
          alert('success upload your data');
          document.location.href = 'indexm.php';        
        </script>";

    } 
  else 
     {echo "<script>
          alert('Failed upload');
          break;
        </script>";
       }

}

  if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'indexm.php';
  </script>"; }
?>


<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>

 <script
 src="https://code.jquery.com/jquery-3.4.1.min.js"
 integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
 crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/id.js" type="text/javascript"></script>

 <title>MonevBBM(BPH-LEMIGAS) </title>
<style>
#header {
    /*background-image: url(hed.png);*/
    background-size: 100%;
    color:white;
    text-align:center;
    padding:1px;
    height:50px;
}
#nav {
    line-height:45px;
    background-color:grey;
    height:400px;
    width:150px;
    float:left;
    padding:15px;
}
#section {
    width:98%;
    float:left;
    padding:25px;
    color: blue;
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
color:blue;
padding-top:5px;
padding-bottom:5px;
padding-left:3px;
padding-right:3px;
}
select{
  color: blue;
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
<h4>TAMBAH DATA BADAN USAHA<br>
KEGIATAN MONITORING DAN VERIFIKASI LAPORAN PENYEDIAAN CADANGAN OPERASIONAL BBM
</h4>
<hr />
</center>
<form action="" method="post" style="width: 100%">

<table>
  <input type="text" name="tglterbit" hidden>
  <input type="text" name="nosk" hidden>
  <input type="text" name="kec" hidden>
 <!--  <input type="text" name="status" hidden> -->
  <input type="text" name="kab" hidden>
  <input type="text" name="prov" hidden>

  <tr>
    <td><label>Wilayah</label></td>
    <td>:</td>
    <td><input type="text" name="wilayah" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" autofocus placeholder="Wilayah" ></td>
  </tr>
  <tr>
    <td><label>Nama Badan Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="bu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Badan Usaha" ></td>
  </tr>
  <tr>
    <td><label>No. Izin Usaha Niaga Migas</label></td>
    <td>:</td>
    <td><input type="text" name="noizin" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" ></td>
  </tr>
  <tr>
    <td><label>Masa Berlaku</label></td>
    <td>:</td>
    <td><input type="date" name="masaizin" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Berlaku sampai dengan" ></td>
  </tr>

    <tr>
    <td><label>Status</label></td>
    <td>:</td>
    <td><input type="text" name="status" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Masih Berlaku/EXPIRED/Belum ada..." ></td>
  </tr>

  <tr>
    <td><label>Alamat Badan Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="alamat" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Alamat Badan Usaha" ></td>
  </tr>

  <tr>
    <td><label>No. Telp/Fax</label></td>
    <td>:</td>
    <td><input type="text" name="telp" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="No. Telp/Fax" ></td>
  </tr>

  <tr>
    <td><label>Nama Pimpinan/Jabatan/No.HP</label></td>
    <td>:</td>
    <td><input type="text" name="namap" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Nama/Jabatan/No.telp" ></td>
  </tr>

  <tr>
    <td><label>Alamat Fasilitas Penyimpanan</label></td>
    <td>:</td>
    <td><input type="text" name="alamatf" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="alamat sasilitas" ></td>
  </tr>

  <tr>
    <td><label>Titik Koordinat Fas. Penyimpanan</label></td>
    <td>:</td>
    <td><input type="text" name="long" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="longitude" value="<?=$long?>"></td>
  </tr><tr><td></td><td>:</td>
    <td><input type="text" name="lat" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="latitude" value="<?=$lat?>" ></td>
  </tr>

  <tr>
    <td><label>Nama Contact Person</label></td>
    <td>:</td>
    <td><input type="text" name="namac" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Nama cp" ></td>
  </tr>

  <tr>
    <td><label>No. HP Contact Person</label></td>
    <td>:</td>
    <td><input type="text" name="telpc" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="No telpon cp" ></td>
  </tr>

  <tr>
    <td><label>Email Contact Person</label></td>
    <td>:</td>
    <td><input type="text" name="emailc" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="email cp" ></td>
  </tr>

  <tr>
    <td><label>Total Jumlah Tanki Penyimpanan </label></td>
    <td>:</td>
    <td><input type="text" name="sumtanki" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" ></td>
  </tr>

  <tr>
    <td><label>Rencana pembangunan tangki</label></td>
    <td>:</td>
    <td><input type="text" name="tankiplant" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="berapa unit dan tahun" ></td>
  </tr>

  <tr>
    <td><label>Volume stok BBM saat kunjungan(KL)</label></td>
    <td>:</td>
    <td><input type="text" name="visitstok" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" ></td>
  </tr>

  <tr>
    <td><label>Sistem Aplikasi Laporan yang digunakan</label><br>
    <label>Bahasa Pemograman</label></td>
    <td>:</td>
    <td><input type="text" name="bhsapk" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Aplikasi pelaporan" ></td>
  </tr>

  <tr>
    <td><label>Type Database</label></td>
    <td>:</td>
    <td><input type="text" name="dbapk" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Nama Database" ></td>
  </tr>

  <tr>
    <td><label>SDM IT yang dimiliki</label></td>
    <td>:</td>
    <td><select name="itsdm1" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">...</option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Jumlahnya SDM IT, jika ada</label></td>
    <td>:</td>
    <td><input type="text" name="itsdm2" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" ></td>
  </tr>

  <tr>
    <td><label>Infrastruktur Server yang dimiliki</label></td>
    <td>:</td>
    <td><select name="server1" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">...</option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Jika ada, sebutkan</label></td>
    <td>:</td>
    <td><input type="text" name="server2" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Jenis server"></td>
  </tr>

  <tr>
    <td><label>Keterangan Lainnya</label></td>
    <td>:</td>
    <td><input type="text" name="ket1" style="height: 225;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Keterangan Lainnya" ></td>
  </tr>

  <tr>
    <td><label>Tindak Lanjut Monitoring & Evaluasi</label></td>
    <td>:</td>
    <td><input type="text" name="ket2" style="height: 225;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Tindak Lanjut Monitoring & Evaluasi" ></td>
  </tr>


</table>

<br>
<hr />
<center>
        <button type ="submitk" name="submitk" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">U p l o a d</button> 

        <button type ="submit" name="balik" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">Kembali</button>
</center>

</div>

</form>
<br>
<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>

</html>

