<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }
 
date_default_timezone_set('Asia/Jakarta');

require 'functions.php';

$id = $_GET["id"];
$user = query("SELECT * FROM badanusaha WHERE id = $id ")[0];

if (isset($_POST["submitk"]))
{
$wilayah  =htmlspecialchars($_POST["wilayah"]);
$bu       =htmlspecialchars($_POST["bu"]);
$npwp     =htmlspecialchars($_POST["npwp"]);

$noizin   =htmlspecialchars($_POST["noizin"]);
$tglterbit=htmlspecialchars($_POST["tglterbit"]);
$masaizin =htmlspecialchars($_POST["masaizin"]);

$alamat   =htmlspecialchars($_POST["alamat"]);
$telp     =htmlspecialchars($_POST["telp"]);
$fax      =htmlspecialchars($_POST["fax"]);

$jnsush   =htmlspecialchars($_POST["jnsush"]);
$namap    =htmlspecialchars($_POST["namap"]);
$jabatan  =htmlspecialchars($_POST["jabatan"]);
$nohpjab  =htmlspecialchars($_POST["nohpjab"]);

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

$noiz      =htmlspecialchars($_POST["noiz"]);
$tgliu      =htmlspecialchars($_POST["tgliu"]);
$msiu      =htmlspecialchars($_POST["msiu"]);
$stiu      =htmlspecialchars($_POST["stiu"]);

$sql = "UPDATE `badanusaha` SET
-- `id` = '$id',
`wilayah` = '$wilayah',
`bu` = '$bu',
`npwp` = '$npwp',
`noizin` = '$noizin',
`tglterbit` = '$tglterbit',
`masaizin` = '$masaizin',
`alamat` = '$alamat',
`telp` = '$telp',
`fax` = '$fax',
`jnsush` = '$jnsush',

`namap` = '$namap',
`jabatan` = '$jabatan',
`nohpjab` = '$nohpjab',
`alamatf` = '$alamatf',
`kec` = '$kec',
`kab` = '$kab',
`prov` = '$prov',
`long` = '$long',
`lat` = '$lat',
`namac` = '$namac',

`status` = '$status',
`telpc` = '$telpc',

`emailc` = '$emailc',
`sumtanki` = '$sumtanki',
`tankiplant` = '$tankiplant',
`visitstok` = '$visitstok',
`bhsapk` = '$bhsapk',
`dbapk` = '$dbapk',
`itsdm1` = '$itsdm1',
`itsdm2` = '$itsdm2',
`server1` = '$server1',
`server2` = '$server2',

`noiz` = '$noiz',
`tgliu` = '$tgliu',
`msiu` = '$msiu',
`stiu` = '$stiu'

WHERE `id` = '$id'";

mysqli_query($konek,$sql);

if (mysqli_affected_rows($konek) > 0) {

  // if ( tambah($_POST) > 0 ) {
      echo "<script>
          alert('success upload your data');
          document.location.href = 'getposisiv.php?id=$id';        
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
  document.location.href = 'getposisiv.php?id=$id';
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
      body{
      background: #e0e0e0;
    }
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
width: 300px;
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
<h4>EDIT DATA BADAN USAHA<br>
KEGIATAN MONITORING DAN VERIFIKASI LAPORAN PENYEDIAAN CADANGAN OPERASIONAL BBM
</h4>
<hr />
</center>
<form action="" method="post" style="width: 100%">

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
    <td><input type="text" name="wilayah" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" autofocus value="<?= $user["wilayah"];?> " ></td>
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
    <td>
      <!-- <input type="date" class="input-field" name="tgliu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tgliu"];?> " > -->

    <input type="date" class="input-field" name="tgliu" id="tgliu" 
         value="<?= $user["tgliu"];  ?>" >

    </td>
  </tr>

  <tr>
    <td><label>Masa Berlaku Izin Usaha</label></td>
    <td>:</td>
    <td><input type="date" class="input-field" name="msiu" id="msiu" 
         value="<?= $user["msiu"];  ?>" >
<!--      <input type="date" class="input-field" name="msiu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["msiu"];?> " > -->
    </td>
  </tr>

    <tr>
    <td><label>Status Izin Usaha</label></td>
    <td>:</td>
    <td><input type="text" name="stiu" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["stiu"];?> " >
    </td>
  </tr>

  <tr>
    <td><label>No. Sertifikat NRU</label></td>
    <td>:</td>
    <td><input type="text" name="noizin" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["noizin"];?> " ></td>
  </tr>
  
  <tr>
    <td><label>Tgl. Terbit NRU</label></td>
    <td>:</td>
    <td> <input type="date" class="input-field" name="tglterbit" id="tglterbit" 
         value="<?= $user["tglterbit"];  ?>" >
<!--       <input type="date" class="input-field" name="tglterbit" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tglterbit"];?> " > -->
    </td>
  </tr>

  <tr>
    <td><label>Masa Berlaku NRU<br>(<?= $user["masaizin"];?>)</label></td>
    <td>:</td>
    <td><input type="date" class="input-field" name="masaizin" id="masaizin" 
         value="<?= $user["masaizin"];  ?>" >
<!--       <input type="date" class="input-field" name="masaizin" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["masaizin"];?> " ></td> -->
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

<br>
<!-- <hr /> -->
<center>
        <button type ="submitk" name="submitk" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">Simpan Edit</button> 

        <button type ="submit" name="balik" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">Batal</button>
</center>

</div>

</form>
<br>
<div id="footer">
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('#inputAngka').on('keyup',function(){
      var angka = $(this).val();

      var hasilAngka = formatRibuan(angka);

      /*$(this).val(hasilAngka);*/
      $('#showTextRibuan').text(hasilAngka);
    });

    function formatRibuan(angka){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      angka_hasil     = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);



      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        angka_hasil += separator + ribuan.join('.');
      }

      angka_hasil = split[1] != undefined ? angka_hasil + ',' + split[1] : angka_hasil;
      return angka_hasil;
    }
  </script>



</body>

</html>

