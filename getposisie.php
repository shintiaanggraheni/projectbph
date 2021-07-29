<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }

date_default_timezone_set('Asia/Jakarta');

require 'functions.php';

$ids = $_GET["id"];
$user = query(" SELECT * FROM kuisioner WHERE id = '$ids' ")[0];

if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'getposisiv.php?id=$ids';
  </script>"; }


if (isset($_POST["submitk"]))
{
$id  = $ids;
$no1 =htmlspecialchars($_POST["no1"]);
$no2 =htmlspecialchars($_POST["no2"]);
$no3 =htmlspecialchars($_POST["no3"]);
$no4 =htmlspecialchars($_POST["no4"]);
$no5 =htmlspecialchars($_POST["no5"]);
$no6 =htmlspecialchars($_POST["no6"]);
$no7 =htmlspecialchars($_POST["no7"]);
$no8 =htmlspecialchars($_POST["no8"]);
$no9 =htmlspecialchars($_POST["no9"]);
$no10 =htmlspecialchars($_POST["no10"]);
$no11 =htmlspecialchars($_POST["no11"]);
$no12 =htmlspecialchars($_POST["no12"]);
$no13 =htmlspecialchars($_POST["no13"]);
$no14 =htmlspecialchars($_POST["no14"]);
$no15 =htmlspecialchars($_POST["no15"]);
$no16 =htmlspecialchars($_POST["no16"]);
$no17 =htmlspecialchars($_POST["no17"]);
$no18 =htmlspecialchars($_POST["no18"]);
$no19 =htmlspecialchars($_POST["no19"]);
$no20 =htmlspecialchars($_POST["no20"]);
$no21 =htmlspecialchars($_POST["no21"]);
$no22 =htmlspecialchars($_POST["no22"]);
$no23 =htmlspecialchars($_POST["no23"]);
$no24 =htmlspecialchars($_POST["no24"]);
$no25 =htmlspecialchars($_POST["no25"]);
$no26 =htmlspecialchars($_POST["no26"]);
$no27 =htmlspecialchars($_POST["no27"]);
$no28 =htmlspecialchars($_POST["no28"]);
$no29 =htmlspecialchars($_POST["no29"]);
$no30 =htmlspecialchars($_POST["no30"]);
$no31 =htmlspecialchars($_POST["no31"]);
$no32 =htmlspecialchars($_POST["no32"]);
$no33 =htmlspecialchars($_POST["no33"]);
$no34 =htmlspecialchars($_POST["no34"]);
$no35 =htmlspecialchars($_POST["no35"]);
$no36 =htmlspecialchars($_POST["no36"]);
$no37 =htmlspecialchars($_POST["no37"]);
$no38 =htmlspecialchars($_POST["no38"]);
$no39 =htmlspecialchars($_POST["no39"]);
$no40 =htmlspecialchars($_POST["no40"]);
$no41 =htmlspecialchars($_POST["no41"]);
$no42 =htmlspecialchars($_POST["no42"]);
$no43 =htmlspecialchars($_POST["no43"]);
$no44 =htmlspecialchars($_POST["no44"]);
$no45 =htmlspecialchars($_POST["no45"]);
$no46 =htmlspecialchars($_POST["no46"]);
$no47 =htmlspecialchars($_POST["no47"]);
$no48 =htmlspecialchars($_POST["no48"]);
$no49 =htmlspecialchars($_POST["no49"]);
$no50 =htmlspecialchars($_POST["no50"]);
$no51 =htmlspecialchars($_POST["no51"]);
$no52 =htmlspecialchars($_POST["no52"]);
$no53 =htmlspecialchars($_POST["no53"]);
$no54 =htmlspecialchars($_POST["no54"]);
$no55 =htmlspecialchars($_POST["no55"]);
$no56 =htmlspecialchars($_POST["no56"]);
$no57 =htmlspecialchars($_POST["no57"]);
$no58 =htmlspecialchars($_POST["no58"]);
$no59 =htmlspecialchars($_POST["no59"]);
$no60 =htmlspecialchars($_POST["no60"]);
$no61 =htmlspecialchars($_POST["no61"]);
$no62 =htmlspecialchars($_POST["no62"]);
$no63 =htmlspecialchars($_POST["no63"]);
$no64 =htmlspecialchars($_POST["no64"]);
$no65 =htmlspecialchars($_POST["no65"]);
$no66 =htmlspecialchars($_POST["no66"]);
$no67 =htmlspecialchars($_POST["no67"]);
$no68 =htmlspecialchars($_POST["no68"]);
$no69 =htmlspecialchars($_POST["no69"]);
$no70 =htmlspecialchars($_POST["no70"]);
$no71 =htmlspecialchars($_POST["no71"]);
$no72 =htmlspecialchars($_POST["no72"]);
$no73 =htmlspecialchars($_POST["no73"]);
$no74 =htmlspecialchars($_POST["no74"]);
$no75 =htmlspecialchars($_POST["no75"]);
$no76 =htmlspecialchars($_POST["no76"]);
$no77 =htmlspecialchars($_POST["no77"]);
$no78 =htmlspecialchars($_POST["no78"]);
$no79 =htmlspecialchars($_POST["no79"]);
$no80 =htmlspecialchars($_POST["no80"]);
$no81 =htmlspecialchars($_POST["no81"]);
$no82 =htmlspecialchars($_POST["no82"]);
$no83 =htmlspecialchars($_POST["no83"]);
$no84 =htmlspecialchars($_POST["no84"]);
$no85 =htmlspecialchars($_POST["no85"]);
$no86 =htmlspecialchars($_POST["no86"]);
$no87 =htmlspecialchars($_POST["no87"]);
$no88 =htmlspecialchars($_POST["no88"]);
$no89 =htmlspecialchars($_POST["no89"]);
$no90 =htmlspecialchars($_POST["no90"]);

$queryme =" UPDATE `kuisioner` SET
`id` = '$ids',
`nama` = '$no1',
`mor` = '$no2',
`bu` = '$no3',
`lokasi` = '$no4',
`tanki` = '$no5',
`long` = '$no6',
`lat` = '$no7',
`jum-tanki` = '$no8',
`jum-tanki-avgas` = '$no9',
`ket-jum-tanki-avgas` = '$no10',
`jum-tanki-avtur` = '$no11',
`ket-jum-tanki-avtur` = '$no12',
`jum-tanki-88` = '$no13',
`ket-jum-tanki-88` = '$no14',
`jum-tanki-90` = '$no15',
`ket-jum-tanki-90` = '$no16',
`jum-tanki-92` = '$no17',
`ket-jum-tanki-92` = '$no18',
`jum-tanki-95` = '$no19',
`ket-jum-tanki-95` = '$no20',
`jum-tanki-98` = '$no21',
`ket-jum-tanki-98` = '$no22',
`jum-tanki-98up` = '$no23',
`ket-jum-tanki-98up` = '$no24',
`jum-tanki-48` = '$no25',
`ket-jum-tanki-48` = '$no26',
`jum-tanki-51` = '$no27',
`ket-jum-tanki-51` = '$no28',
`jum-tanki-53` = '$no29',
`ket-jum-tanki-53` = '$no30',
`jum-tanki-diesel` = '$no31',
`ket-jum-tanki-diesel` = '$no32',
`jum-tanki-bakar` = '$no33',
`ket-jum-tanki-bakar` = '$no34',
`kap-tanki` = '$no35',
`kap-tanki-avtur` = '$no36',
`ket-kap-tanki-avtur` = '$no37',
`kap-tanki-avgas` = '$no38',
`ket-kap-tanki-avgas` = '$no39',
`kap-tanki-88` = '$no40',
`ket-kap-tanki-88` = '$no41',
`kap-tanki-90` = '$no42',
`ket-kap-tanki-90` = '$no43',
`kap-tanki-92` = '$no44',
`ket-kap-tanki-92` = '$no45',
`kap-tanki-95` = '$no46',
`ket-kap-tanki-95` = '$no47',
`kap-tanki-98` = '$no48',
`ket-kap-tanki-98` = '$no49',
`kap-tanki-98up` = '$no50',
`ket-kap-tanki-98up` = '$no51',
`kap-tanki-48` = '$no52',
`ket-kap-tanki-48` = '$no53',
`kap-tanki-51` = '$no54',
`ket-kap-tanki-51` = '$no55',
`kap-tanki-53` = '$no56',
`ket-kap-tanki-53` = '$no57',
`kap-tanki-diesel` = '$no58',
`ket-kap-tanki-diesel` = '$no59',
`kap-tanki-bakar` = '$no60',
`ket-kap-tanki-bakar` = '$no61',
`oku` = '$no62',
`stat-tanki` = '$no63',
`plan-tanki` = '$no64',
`jns-tanki` = '$no65',
`kalibrasi` = '$no66',
`tgl-kalibrasi1` = '$no67',
`tgl-kalibrasi2` = '$no68',
`alt-salur` = '$no69',
`kalib-alat-salur1` = '$no70',
`kalib-alat-salur2` = '$no71',
`smb-bbm` = '$no72',
`bukti-smb-bbm` = '$no73',
`jns-bbm` = '$no74',
`vol-terima1` = '$no75',
`vol-terima2` = '$no76',
`vol-kirim1` = '$no77',
`vol-kirim2` = '$no78',
`jam-catat` = '$no79',
`vol-stokk2` = '$no80',
`vol-stokk1` = '$no81',
`moda-terima` = '$no82',
`moda-kirim` = '$no83',
`jns-apk` = '$no84',
`bhs-apk` = '$no85',
`dtbse` = '$no86',
`it-sdm1` = '$no87',
`it-sdm2` = '$no88',
`server1` = '$no89',
`server2` = '$no90'
WHERE `id` = '$ids' ";


mysqli_query($konek,$queryme);

if (mysqli_affected_rows($konek) > 0) {

  // if ( tambah($_POST) > 0 ) {
      echo "<script>
          alert('success Edit your data');
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
    width:98%;
    float:left;
    padding:25px;
    color:blue;
}
#footer {
    background-size: 100%;
    color:white;
    clear:both;
    text-align:center;
    padding:10px;
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
<img src="hed.png" sizes="100%">
</div>

<!--<div id="section">
 
<center>
<p><strong>FORM KOESIONER</strong>
<br>KEGIATAN MONITORING, VERIFIKASI LAPORAN DAN <br>EVALUASI PENYEDIAAN 
CADANGAN OPERASIONAL BBM BU NIAGA UMUM</p></center>

<br> 
<form action="" method="post" style="width: 100%">
<center>
<label>Id. Pengentry </label></td>
<input type="text" name="no1" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["nama"];?>" ></center>
<br>
<table border="0" >
  <tr>
    <td style="border-bottom: inherit;"><label>MOR Id. </label></td>
    <td>:<input type="text" name="no2" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" autofocus placeholder="isi disini" > </td>
    <td>&ensp;</td>
    <td><label>Nama Pemegang Ijin Usaha Niaga BBM :</label></td>
    <td>:<input type="text" name="no3" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" > </td>
  </tr>

  <tr>
   <td><label>Lokasi (Kecamatan/Kota/Kabupaten)</label></td>
   <td>:<input type="text" name="no4" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Kecamatan/Kota/Kabupaten" > </td>
   <td>&ensp;</td>
   <td><label>Titik Koordinat(longitude)<br>Titik Koordinat(latitude)</label></td>
   <td>:<input type="text" name="no6" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["long"];?>" > <br>
       :<input type="text" name="no7" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["lat"];?>" > 
    </td>
  </tr>
</table>

<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Data Tanki Penyimpanan</label></td>
    <td>:<input type="text" name="no5" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" > </td>
  </tr>
  <tr>
    <td><label>Total Jumlah Tanki Penyimpanan </label></td>
    <td>:<input type="text" name="no8" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" > </td>
  </tr>
</table>

<table  border="0" style="padding-left: 10px">
  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Avgas)</label></td>
   <td>:<input type="text" name="no9" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no10" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" > </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Avtur)</label></td>
   <td>:<input type="text" name="no11" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no12" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

   <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 88)</label></td>
   <td>:<input type="text" name="no13" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no14" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 90)</label></td>
   <td>:<input type="text" name="no15" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no16" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 92)</label></td>
   <td>:<input type="text" name="no17" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no18" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 95)</label></td>
   <td>:<input type="text" name="no19" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no20" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 98)</label></td>
   <td>:<input type="text" name="no21" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no22" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON > 98)</label></td>
   <td>:<input type="text" name="no23" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no24" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 48)</label></td>
   <td>:<input type="text" name="no25" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no26" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 51)</label></td>
   <td>:<input type="text" name="no27" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no28" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 53)</label></td>
   <td>:<input type="text" name="no29" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no30" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Minyak Diesel)</label></td>
   <td>:<input type="text" name="no31" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no32" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Minyak Bakar)</label></td>
   <td>:<input type="text" name="no33" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no34" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" >  </td>
  </tr>
</table>
<br>
<table border="0" style="padding-left: 10px">
  <tr>
    <td><label>Kapasitas Tanki (jika berbeda ukuran sebutkan)</label></td>
    <td>:<input type="text" name="no35" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" hidden  > </td>
  </tr>
</table>

<table border="0" style="padding-left: 10px">
  <tr>
   <td><label>Kapasitas Tanki (Avgas)</label></td>
   <td>:<input type="text" name="no38" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no39" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Avtur)</label></td>
   <td>:<input type="text" name="no36" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no37" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  88)</label></td>
   <td>:<input type="text" name="no40" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no41" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  90)</label></td>
   <td>:<input type="text" name="no42" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no43" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  92)</label></td>
   <td>:<input type="text" name="no44" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no45" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  95)</label></td>
   <td>:<input type="text" name="no46" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no47" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  98)</label></td>
   <td>:<input type="text" name="no48" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no49" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON > 98)</label></td>
   <td>:<input type="text" name="no50" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no51" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 48)</label></td>
   <td>:<input type="text" name="no52" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no53" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 51)</label></td>
   <td>:<input type="text" name="no54" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no55" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 53)</label></td>
   <td>:<input type="text" name="no56" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no57" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Minyak Diesel)</label></td>
   <td>:<input type="text" name="no58" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no59" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Minyak Bakar)</label></td>
   <td>:<input type="text" name="no60" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no61" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="isi disini" >  </td>
  </tr>
</table>
<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Okupansi Saat Ini</label></td>
    <td>:<input type="text" name="no62" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="berapa persen" >% </td>
  </tr>

  <tr>
    <td><label>Kepemilikan Tanki</label></td>
    <td>:<select name="no63" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Sendiri">Sendiri</option>
            <option value="Sewa">Sewa</option>
            <option value="Gabungan(Commingle)">Gabungan(Commingle)</option> 
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Rencana pengembangan pembangunan tangki</label></td>
    <td>:<input type="text" name="no64" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="berapa unit, th berapa" > </td>
  </tr>

  <tr>
    <td><label>Jenis tanki </label></td>
    <td>:<select name="no65" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Darat">Darat</option>
            <option value="Floting">Floting</option>
            <option value="Keduanya">Keduanya</option> 
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Apakah Tanki di Kalbrasi </label></td>
    <td>:<select name="no66" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Jika iya, kapan kalibrasi terakhir</label></td>
    <td>:<input type="date" name="no67" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" > </td>

    <td>Jika Lebih dari 1:<input type="text" name="no68" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="sebutkan" > </td>
  </tr>

  <tr>
    <td><label>Sistim alat Ukur penyaluran</label></td>
    <td>:<select name="no69" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Gauging">Gauging</option>
            <option value="Flowmeter">Flowmeter</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Apakah alat ukur dikalibrasi?</label></td>
    <td>:<select name="no70" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select>
    </td>

    <td>Jika iya, kapan kalibrasi terakhir:<input type="date" name="no71" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" > </td>
  </tr>

  <tr>
    <td><label>Sumber Pasokan BBM</label></td>
    <td>:<select name="no72" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Import">Import</option>
            <option value="Lokal">Lokal</option>
        </select>
    </td>

    <td>upload bukti pembelian:<input type="text" name="no73" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="link Gdrive"> </td>
  </tr>

  <tr>
    <td><label>Jenis BBM yang di terima dan disalurkan</label></td>
    <td>:<select name="no74" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Avgas">Avgas</option>
            <option value="Avtur">Avtur</option>
            <option value="Bensin RON 88">Bensin RON 88</option>
            <option value="Bensin RON 90">Bensin RON 90</option>
            <option value="Bensin RON 92">Bensin RON 92</option>
            <option value="Bensin RON 95">Bensin RON 95</option>
            <option value="Bensin RON 98">Bensin RON 98</option>
            <option value="Bensin RON>98">Bensin RON>98</option>
            <option value="Solar CN 48">Solar CN 48</option>
            <option value="Solar CN 51">Solar CN 51</option>
            <option value="Solar CN 53">Solar CN 53</option>
            <option value="Minyak Diesel">Minyak Diesel</option>
            <option value="Minyak Bakar">Minyak Bakar</option>
        </select>
    </td>
  </tr>

<tr>
    <td><label>Volume Rata2 BBM yang diterima</label></td>
    <td>:<input type="text" name="no75" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL/bulan">KL/bln </td>
    <td>dan:<input type="text" name="no76" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL/hari">KL/hari </td>
</tr>

<tr>
    <td><label>Volume Rata2 BBM yang disalurkan</label></td>
    <td>:<input type="text" name="no77" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL/bulan">KL/bln </td>
    <td>dan:<input type="text" name="no78" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL/hari">KL/hari </td>
</tr>

<tr>
    <td><label>Jam SOP pengukuran stok <br>(misal jam 12:00 atau 24:00 atau 06:00) </label></td>
    <td>:<input type="text" name="no79" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Jam catat stok"></td>
</tr>

<tr>
    <td><label>Volume stok BBM saat kunjungan  </label></td>
    <td>:<input type="text" name="no80" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL">KL</td>
</tr>

<tr>
    <td><label>Volume stok rata2 hari saat kunjungan (24 jam)</label></td>
    <td>:<input type="text" name="no81" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL">KL</td>
</tr>

<tr>
    <td><label>Moda transportasi penerimaan</label></td>
    <td>:<select name="no82" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Kapal">Kapal</option>
            <option value="Truk">Truk</option>
            <option value="Pipa">Pipa</option>
        </select>
    </td>
</tr>

<tr>
    <td><label>Moda transportasi penyaluran</label></td>
    <td>:<select name="no83" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Kapal">Kapal</option>
            <option value="Truk">Truk</option>
            <option value="Pipa">Pipa</option>
        </select>
    </td>
</tr>
</table>
<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Sistem Aplikasi Laporan yang digunakan</label></td>
    <td>:<input type="text" name="no84" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="KL" hidden></td>
  </tr>

  <tr>
    <td><label>Bahasa Pemograman</label></td>
    <td>:<input type="text" name="no85" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="sebutkan"></td>
  </tr>
  <tr>
    <td><label>Tipe data base</label></td>
    <td>:<input type="text" name="no86" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="sebutkan"></td>
  </tr>

<tr>
    <td><label>SDM IT yang dimiliki</label></td>
    <td>:<select name="no87" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
    <td><label>jumlahnya kalau ada</label></td>
    <td>:<input type="text" name="no88" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="orang">orang</td>
</tr>

<tr>
    <td><label>Infrastruktur Server yang dimiliki</label></td>
    <td>:<select name="no89" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="">pilih</option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
    <td><label>Jika ada, sebutkan</label></td>
    <td>:<input type="text" name="no90" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" placeholder="Jenis server"></td>
</tr>

</table><br><br>

<center>
        <button type ="submitk" name="submitk" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">U p l o a d</button> 

        <button type ="submit" name="balik" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">Kembali</button>
</center>

</div> -->













<div id="section">

<center><strong>EDIT FORM KOESIONER</strong></center>

<form action="" method="post" style="width: 100%">
<center>
<label>Id. Pengentry </label></td>
<input type="text" name="no1" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["nama"];?>" ></center>
<br>
<table border="0" >
  <tr>
    <td style="border-bottom: inherit;"><label>MOR Id. </label></td>
    <td>:<input type="text" name="no2" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["mor"];  ?>" > </td>
    <td>&ensp;</td>
    <td><label>Nama Pemegang Ijin Usaha Niaga BBM :</label></td>
    <td>:<input type="text" name="no3" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["bu"];  ?>"> </td>
  </tr>

  <tr>
   <td><label>Lokasi (Kecamatan/Kota/Kabupaten)</label></td>
   <td>:<input type="text" name="no4" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["lokasi"];  ?>"> </td>
   <td>&ensp;</td>
   <td><label>Titik Koordinat(longitude)<br>Titik Koordinat(latitude)</label></td>
   <td>:<input type="text" name="no6" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["long"];  ?>"> <br>
       :<input type="text" name="no7" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["lat"];  ?>"> 
    </td>
  </tr>
</table>

<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Data Tanki Penyimpanan</label></td>
    <td>:<input type="text" name="no5" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tanki"];  ?>"> </td>
  </tr>
  <tr>
    <td><label>Total Jumlah Tanki Penyimpanan </label></td>
    <td>:<input type="text" name="no8" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki"];  ?>" > </td>
  </tr>
</table>

<table  border="0" style="padding-left: 10px">
  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Avgas)</label></td>
   <td>:<input type="text" name="no9" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-avgas"]; ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no10" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-avgas"];  ?>" > </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Avtur)</label></td>
   <td>:<input type="text" name="no11" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-avtur"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no12" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-avtur"];  ?>" >  </td>
  </tr>

   <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 88)</label></td>
   <td>:<input type="text" name="no13" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-88"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no14" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-88"];  ?>">  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 90)</label></td>
   <td>:<input type="text" name="no15" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-90"];  ?>">buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no16" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-90"];  ?>">  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 92)</label></td>
   <td>:<input type="text" name="no17" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-92"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no18" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-92"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 95)</label></td>
   <td>:<input type="text" name="no19" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-95"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no20" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-95"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 98)</label></td>
   <td>:<input type="text" name="no21" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-98"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no22" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-98"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON > 98)</label></td>
   <td>:<input type="text" name="no23" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-98up"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no24" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-98up"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 48)</label></td>
   <td>:<input type="text" name="no25" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;"  value="<?= $user["jum-tanki-48"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no26" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-48"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 51)</label></td>
   <td>:<input type="text" name="no27" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-51"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no28" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-51"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 53)</label></td>
   <td>:<input type="text" name="no29" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-53"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no30" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-53"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Minyak Diesel)</label></td>
   <td>:<input type="text" name="no31" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-diesel"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no32" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-diesel"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Minyak Bakar)</label></td>
   <td>:<input type="text" name="no33" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jum-tanki-bakar"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no34" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-jum-tanki-bakar"];  ?>" >  </td>
  </tr>
</table>
<br>
<table border="0" style="padding-left: 10px">
  <tr>
    <td><label>Kapasitas Tanki (jika berbeda ukuran sebutkan)</label></td>
    <td>:<input type="text" name="no35" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;"  hidden  > </td>
  </tr>
</table>

<table border="0" style="padding-left: 10px">
  <tr>
   <td><label>Kapasitas Tanki (Avgas)</label></td>
   <td>:<input type="text" name="no38" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-avgas"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no39" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-avgas"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Avtur)</label></td>
   <td>:<input type="text" name="no36" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-avtur"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no37" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-avtur"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  88)</label></td>
   <td>:<input type="text" name="no40" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-88"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no41" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-88"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  90)</label></td>
   <td>:<input type="text" name="no42" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-90"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no43" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-90"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  92)</label></td>
   <td>:<input type="text" name="no44" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-92"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no45" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-92"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  95)</label></td>
   <td>:<input type="text" name="no46" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-95"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no47" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-95"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  98)</label></td>
   <td>:<input type="text" name="no48" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-98"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no49" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-98"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON > 98)</label></td>
   <td>:<input type="text" name="no50" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-98up"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no51" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-98up"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 48)</label></td>
   <td>:<input type="text" name="no52" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;"value="<?= $user["kap-tanki-48"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no53" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-48"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 51)</label></td>
   <td>:<input type="text" name="no54" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-51"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no55" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-51"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 53)</label></td>
   <td>:<input type="text" name="no56" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-53"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no57" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-53"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Minyak Diesel)</label></td>
   <td>:<input type="text" name="no58" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-diesel"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no59" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-diesel"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Minyak Bakar)</label></td>
   <td>:<input type="text" name="no60" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["kap-tanki-bakar"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no61" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["ket-kap-tanki-bakar"];  ?>" >  </td>
  </tr>
</table>
<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Okupansi Saat Ini</label></td>
    <td>:<input type="text" name="no62" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["oku"];  ?>" >% </td>
  </tr>

  <tr>
    <td><label>Kepemilikan Tanki</label></td>
    <td>:<select name="no63" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="<?= $user["stat-tanki"];  ?>"><?= $user["stat-tanki"];  ?></option>
             <option value="Sendiri">Sendiri</option>
            <option value="Sewa">Sewa</option>
            <option value="Gabungan(Commingle)">Gabungan(Commingle)</option> 
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Rencana pengembangan pembangunan tangki</label></td>
    <td>:<input type="text" name="no64" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["plan-tanki"];  ?>"  > </td>
  </tr>

  <tr>
    <td><label>Jenis tanki </label></td>
    <td>:<select name="no65" style="height:25px;font-size: 14px;cursor:pointer;" >
            <option value="<?= $user["jns-tanki"];  ?>"><?= $user["jns-tanki"];  ?></option>
            <option value="Darat">Darat</option>
            <option value="Floting">Floting</option>
            <option value="Keduanya">Keduanya</option> 
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Apakah Tanki di Kalbrasi </label></td>
    <td>:<select name="no66" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="<?= $user["kalibrasi"];  ?>"><?= $user["kalibrasi"];  ?></option>
            <option value="">pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Jika iya, kapan kalibrasi terakhir</label></td>
    <td>:<input type="date" name="no67" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tgl-kalibrasi1"];  ?>" > </td>

    <td>Jika Lebih dari 1:<input type="text" name="no68" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["tgl-kalibrasi2"];  ?>" > </td>
  </tr>

  <tr>
    <td><label>Sistim alat Ukur penyaluran</label></td>
    <td>:<select name="no69" style="height:25px;font-size: 14px;cursor:pointer;" >
            <option value="<?= $user["alt-salur"];  ?>"><?= $user["alt-salur"];  ?></option>
            <option value="Gauging">Gauging</option>
            <option value="Flowmeter">Flowmeter</option>
        </select>
    </td>
  </tr>

  <tr>
    <td><label>Apakah alat ukur dikalibrasi?</label></td>
    <td>:<select name="no70" style="height:25px;font-size: 14px;cursor:pointer;" >
            <option value="<?= $user["kalib-alat-salur1"];  ?>"><?= $user["kalib-alat-salur1"];  ?></option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select>
    </td>

    <td>Jika iya, kapan kalibrasi terakhir:<input type="date" name="no71" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;"value="<?= $user["kalib-alat-salur2"];  ?>" > </td>
  </tr>

  <tr>
    <td><label>Sumber Pasokan BBM</label></td>
    <td>:<select name="no72" style="height:25px;font-size: 14px;cursor:pointer;" >
            <option value="<?= $user["smb-bbm"];  ?>"><?= $user["smb-bbm"];  ?></option>
            <option value="Import">Import</option>
            <option value="Lokal">Lokal</option>
        </select>
    </td>

    <td>upload bukti pembelian:<input type="text" name="no73" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["bukti-smb-bbm"];  ?>" > </td>
  </tr>

  <tr>
    <td><label>Jenis BBM yang di terima dan disalurkan</label></td>
    <td>:<select name="no74" style="height:25px;font-size: 14px;cursor:pointer;">
            <option value="<?= $user["smb-bbm"];  ?>"><?= $user["smb-bbm"];  ?></option>
            <option value="Avgas">Avgas</option>
            <option value="Avtur">Avtur</option>
            <option value="Bensin RON 88">Bensin RON 88</option>
            <option value="Bensin RON 90">Bensin RON 90</option>
            <option value="Bensin RON 92">Bensin RON 92</option>
            <option value="Bensin RON 95">Bensin RON 95</option>
            <option value="Bensin RON 98">Bensin RON 98</option>
            <option value="Bensin RON>98">Bensin RON>98</option>
            <option value="Solar CN 48">Solar CN 48</option>
            <option value="Solar CN 51">Solar CN 51</option>
            <option value="Solar CN 53">Solar CN 53</option>
            <option value="Minyak Diesel">Minyak Diesel</option>
            <option value="Minyak Bakar">Minyak Bakar</option>
        </select>
    </td>
  </tr>

<tr>
    <td><label>Volume Rata2 BBM yang diterima</label></td>
    <td>:<input type="text" name="no75" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;"value="<?= $user["vol-terima1"];  ?>" >KL/bln </td>
    <td>dan:<input type="text" name="no76" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;"value="<?= $user["vol-terima2"];  ?>" >KL/hari </td>
</tr>

<tr>
    <td><label>Volume Rata2 BBM yang disalurkan</label></td>
    <td>:<input type="text" name="no77" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;"value="<?= $user["vol-kirim1"];  ?>" >KL/bln </td>
    <td>dan:<input type="text" name="no78" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["vol-kirim2"];  ?>" >KL/hari </td>
</tr>

<tr>
    <td><label>Jam SOP pengukuran stok <br>(misal jam 12:00 atau 24:00 atau 06:00) </label></td>
    <td>:<input type="text" name="no79" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["jam-catat"];  ?>" ></td>
</tr>

<tr>
    <td><label>Volume stok BBM saat kunjungan  </label></td>
    <td>:<input type="text" name="no80" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["vol-stokk2"];  ?>" ></td>
</tr>

<tr>
    <td><label>Volume stok rata2 hari saat kunjungan (24 jam)</label></td>
    <td>:<input type="text" name="no81" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["vol-stokk1"];  ?>" ></td>
</tr>

<tr>
    <td><label>Moda transportasi penerimaan</label></td>
    <td>:<select name="no82" style="height:25px;font-size: 14px;cursor:pointer;" >
            <option value="<?= $user["moda-terima"];  ?>"><?= $user["moda-terima"];  ?></option>
            <option value="Kapal">Kapal</option>
            <option value="Truk">Truk</option>
            <option value="Pipa">Pipa</option>
        </select>
    </td>
</tr>

<tr>
    <td><label>Moda transportasi penyaluran</label></td>
    <td>:<select name="no83" style="height:25px;font-size: 14px;cursor:pointer;" >
            <option value="<?= $user["moda-kirim"];  ?>"><?= $user["moda-kirim"];  ?></option>
            <option value="Kapal">Kapal</option>
            <option value="Truk">Truk</option>
            <option value="Pipa">Pipa</option>
        </select>
    </td>
</tr>
</table>
<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Sistem Aplikasi Laporan yang digunakan</label></td>
    <td>:<input type="text" name="no84" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" hidden></td>
  </tr>

  <tr>
    <td><label>Bahasa Pemograman</label></td>
    <td>:<input type="text" name="no85" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["bhs-apk"];  ?>" ></td>
  </tr>
  <tr>
    <td><label>Tipe data base</label></td>
    <td>:<input type="text" name="no86" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["dtbse"];  ?>" ></td>
  </tr>

<tr>
    <td><label>SDM IT yang dimiliki</label></td>
    <td>:<select name="no87" style="height:25px;font-size: 14px;cursor:pointer;" > 
            <option value="<?= $user["it-sdm1"];  ?>"><?= $user["it-sdm1"];  ?></option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
    <td><label>jumlahnya kalau ada</label></td>
    <td>:<input type="text" name="no88" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["it-sdm2"]; ?>" >orang</td>
</tr>

<tr>
    <td><label>Infrastruktur Server yang dimiliki</label></td>
    <td>:<select name="no89" style="height:25px;font-size: 14px;cursor:pointer;" >
            <option value="<?= $user["server1"]; ?>"><?= $user["server1"]; ?></option>
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select>
    </td>
    <td><label>Jika ada, sebutkan</label></td>
    <td>:<input type="text" name="no90" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer;" value="<?= $user["server2"];  ?>" ></td>
</tr>

</table><br><br>
    <center>
        <button type ="submit" name="submitk" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">Save Edit</button> 
        <button type ="submit" name="balik" style="width: 130px;height: 35px;font-size: 12px;cursor: pointer;">Cancel Edit</button>
    </center>
</div> -->

<div id="footer">
<img src="foot.png" sizes="100%"><br>
</div>

</body>

</html>