<?php 
date_default_timezone_set('Asia/Jakarta');

require 'functions.php';

$ids = $_GET["id"];
$user = query(" SELECT * FROM kuisioner WHERE id = $ids ")[0];



if (isset($_POST["submitk"]))
{
      echo "<script>
          document.location.href = 'getposisie.php?id=$id';        
        </script>";

}

  if (isset($_POST["balik"]))
  { echo "<script> 
  document.location.href = 'index.php';
  </script>"; }

?>

<!DOCTYPE html>
<html>
<head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
  <meta name="viewport" content="width=device-width"/>
  <title>Cadangan BBM(BPH-LEMIGAS) </title>
<style>
#header {
/*    background-image: url(hed.png);
*/    background-size: 100%;
    color:white;
    text-align:center;
    padding:1px;
}
#section {
    width:98%;
    float:left;
    padding:25px;
    /*color:blue;*/
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
</style>

</head>
<body oncontextmenu="return false;" style="width: 100%">
<div id="header">
<img src="hed.png" sizes="100%">
</div>

<div id="section">

<center><strong><p style="font-size: 14px">KEGIATAN MONITORING, VERIFIKASI LAPORAN DAN <br>EVALUASI PENYEDIAAN CADANGAN OPERASIONAL BBM BU NIAGA UMUM</p> </center></strong>

<form action="" method="post" style="width: 100%">

<!-- <center>
<label>Id. Pengentry </label></td>
<input type="text" name="no1" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["nama"];  ?>" ></center>
<br> -->
<center>
<h3> MOR <?= $user["mor"];?> - <?= $user["bu"];?><br><?= $user["lokasi"]; ?><br>Titik koordinat: <?= $user["long"];  ?>-<?= $user["lat"];  ?><br>
</h3>
</center>
<!-- <table border="0" >
  <tr>
    <td style="border-bottom: inherit;"><label>MOR Id. </label></td>
    <td>:<input type="text" name="no2" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["mor"];  ?>" > </td>
    <td>&ensp;</td>
    <td><label>Nama Pemegang Ijin Usaha Niaga BBM :</label></td>
    <td>:<input type="text" name="no3" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["bu"];  ?>"> </td>
  </tr>

  <tr>
   <td><label>Lokasi (Kecamatan/Kota/Kabupaten)</label></td>
   <td>:<input type="text" name="no4" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["lokasi"];  ?>"> </td>
   <td>&ensp;</td>
   <td><label>Titik Koordinat(longitude)<br>Titik Koordinat(latitude)</label></td>
   <td>:<input type="text" name="no6" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["long"];  ?>"> <br>
       :<input type="text" name="no7" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["lat"];  ?>"> 
    </td>
  </tr>
</table> -->

<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Data Tanki Penyimpanan</label></td>
    <td>:<input type="text" name="no5" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["tanki"];  ?>"> </td>
  </tr>
  <tr>
    <td><label>Total Jumlah Tanki Penyimpanan </label></td>
    <td>:<input type="text" name="no7x" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["jum-tanki"];  ?>" > </td>
  </tr>
</table>

<table  border="0" style="padding-left: 10px">
  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Avgas)</label></td>
   <td>:<input type="text" name="no9" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["jum-tanki-avgas"]; ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no10" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["ket-jum-tanki-avgas"];  ?>" > </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Avtur)</label></td>
   <td>:<input type="text" name="no11" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["jum-tanki-avtur"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no12" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["ket-jum-tanki-avtur"];  ?>" >  </td>
  </tr>

   <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 88)</label></td>
   <td>:<input type="text" name="no13" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["jum-tanki-88"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no14" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["ket-jum-tanki-88"];  ?>">  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 90)</label></td>
   <td>:<input type="text" name="no15" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["jum-tanki-90"];  ?>">buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no16" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["ket-jum-tanki-90"];  ?>">  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 92)</label></td>
   <td>:<input type="text" name="no17" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["jum-tanki-92"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no18" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["ket-jum-tanki-92"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 95)</label></td>
   <td>:<input type="text" name="no19" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["jum-tanki-95"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no20" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-95"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON 98)</label></td>
   <td>:<input type="text" name="no21" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jum-tanki-98"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no22" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-98"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Bensin RON > 98)</label></td>
   <td>:<input type="text" name="no23" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jum-tanki-98up"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no24" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-98up"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 48)</label></td>
   <td>:<input type="text" name="no25" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jum-tanki-48"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no26" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-48"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 51)</label></td>
   <td>:<input type="text" name="no27" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jum-tanki-51"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no28" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-51"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Solar CN 53)</label></td>
   <td>:<input type="text" name="no29" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jum-tanki-53"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no30" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-53"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Minyak Diesel)</label></td>
   <td>:<input type="text" name="no31" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jum-tanki-diesel"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no32" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-diesel"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Jumlah Tanki Penyimpanan (Minyak Bakar)</label></td>
   <td>:<input type="text" name="no33" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jum-tanki-bakar"];  ?>" >buah </td>
   <td>&ensp;</td>
   <td><label>Kapasitas</label></td>
   <td>:<input type="text" name="no34" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-jum-tanki-bakar"];  ?>" >  </td>
  </tr>
</table>
<br>
<table border="0" style="padding-left: 10px">
  <tr>
    <td><label>Kapasitas Tanki (jika berbeda ukuran sebutkan)</label></td>
    <td>:<input type="text" name="no35" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki"];  ?>" hidden  > </td>
  </tr>
</table>

<table border="0" style="padding-left: 10px">
  <tr>
   <td><label>Kapasitas Tanki (Avgas)</label></td>
   <td>:<input type="text" name="no38" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-avgas"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no39" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-avgas"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Avtur)</label></td>
   <td>:<input type="text" name="no36" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-avtur"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no37" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-avtur"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  88)</label></td>
   <td>:<input type="text" name="no40" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-88"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no41" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-88"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  90)</label></td>
   <td>:<input type="text" name="no42" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-90"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no43" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-90"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  92)</label></td>
   <td>:<input type="text" name="no44" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-92"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no45" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-92"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  95)</label></td>
   <td>:<input type="text" name="no46" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-95"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no47" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-95"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON  98)</label></td>
   <td>:<input type="text" name="no48" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-98"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no49" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-98"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Bensin RON > 98)</label></td>
   <td>:<input type="text" name="no50" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-98up"];  ?>"  >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no51" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-98up"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 48)</label></td>
   <td>:<input type="text" name="no52" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-48"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no53" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-48"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 51)</label></td>
   <td>:<input type="text" name="no54" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-51"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no55" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-51"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Solar CN 53)</label></td>
   <td>:<input type="text" name="no56" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-53"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no57" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-53"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Minyak Diesel)</label></td>
   <td>:<input type="text" name="no58" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-diesel"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no59" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-diesel"];  ?>" >  </td>
  </tr>

  <tr>
   <td><label>Kapasitas Tanki (Minyak Bakar)</label></td>
   <td>:<input type="text" name="no60" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kap-tanki-bakar"];  ?>" >KL </td>
   <td>&ensp;</td>
   <td><label>bila lebih dari satu dan berbeda sebutkan</label></td>
   <td>:<input type="text" name="no61" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["ket-kap-tanki-bakar"];  ?>" >  </td>
  </tr>
</table>
<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Okupansi Saat Ini</label></td>
    <td>:<input type="text" name="no62" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["oku"];  ?>" >% </td>
  </tr>

  <tr>
    <td><label>Kepemilikan Tanki</label></td>
    <td>:<label><?= $user["stat-tanki"]; ?></label>
<!--     	<select name="no63" style="height:25px;font-size: 14px;cursor:pointer;" value="<?= $user["stat-tanki"];  ?>">
             <option value="Sendiri">Sendiri</option>
            <option value="Sewa">Sewa</option>
            <option value="Gabungan(Commingle)">Gabungan(Commingle)</option> 
        </select> -->
    </td>
  </tr>

  <tr>
    <td><label>Rencana pengembangan pembangunan tangki</label></td>
    <td>:<input type="text" name="no64" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["plan-tanki"];  ?>"  > </td>
  </tr>

  <tr>
    <td><label>Jenis tanki </label></td>
    <td>:<label><?= $user["jns-tanki"];  ?></label>
    	<!-- <select name="no65" style="height:25px;font-size: 14px;cursor:pointer;" value="<?= $user["jns-tanki"];  ?>">
            <option value="Darat">Darat</option>
            <option value="Floting">Floting</option>
            <option value="Keduanya">Keduanya</option> 
        </select> -->
    </td>
  </tr>

  <tr>
    <td><label>Apakah Tanki di Kalbrasi </label></td>
    <td>:<label><?= $user["kalibrasi"];?></label>b
    	<!-- <select name="no66" style="height:25px;font-size: 14px;cursor:pointer;" value="<?= $user["kalibrasi"];  ?>">
            <option value="">pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select> -->
    </td>
  </tr>

  <tr>
    <td><label>Jika iya, kapan kalibrasi terakhir</label></td>
    <td>:<label><?= $user["tgl-kalibrasi1"];?></label>
<!--     	<input type="date" name="no67" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["tgl-kalibrasi1"];?>" > </td> -->

    <td>Jika Lebih dari 1:<label><?= $user["tgl-kalibrasi2"];?></label>
<!--     	<input type="text" name="no68" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["tgl-kalibrasi2"];  ?>" > </td> -->
  </tr>

  <tr>
    <td><label>Sistim alat Ukur penyaluran</label></td>
    <td>:<label><?= $user["alt-salur"];?></label>
    	<!-- <select name="no69" style="height:25px;font-size: 14px;cursor:pointer;" disabled=""> value="<?= $user["alt-salur"];  ?>">
            <option value="Gauging">Gauging</option>
            <option value="Flowmeter">Flowmeter</option>
        </select> -->
    </td>
  </tr>

  <tr>
    <td><label>Apakah alat ukur dikalibrasi?</label></td>
    <td>:<label><?= $user["kalib-alat-salur1"];?></label>
    	<!-- <select name="no70" style="height:25px;font-size: 14px;cursor:pointer;" value="<?= $user["kalib-alat-salur1"];  ?>">
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select> -->
    </td>

    <td>Jika iya, kapan kalibrasi terakhir:
    	<label><?= $user["kalib-alat-salur2"];?></label>
    	<!-- <input type="date" name="no71" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["kalib-alat-salur2"];  ?>" > </td> -->
  </tr>

  <tr>
    <td><label>Sumber Pasokan BBM</label></td>
    <td>:<label><?= $user["smb-bbm"];?></label>
    	<!-- <select name="no72" style="height:25px;font-size: 14px;cursor:pointer" value="<?= $user["smb-bbm"];  ?>" >
            <option value="Import">Import</option>
            <option value="Lokal">Lokal</option>
        </select> -->
    </td>

    <td>bukti pembelian: <u><a href="<?= $user["bukti-smb-bbm"];  ?>"></a></u>
    	<input type="text" name="no73" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["bukti-smb-bbm"];  ?>" > </td>
  </tr>

  <tr>
    <td><label>Jenis BBM yang di terima dan disalurkan</label></td>
    <td>:<label><?= $user["smb-bbm"];?></label>
    	<!-- <select name="no74" style="height:25px;font-size: 14px;cursor:pointer"; disable value="<?= $user["smb-bbm"];  ?>" >
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
        </select> -->
    </td>
  </tr>

<tr>
    <td><label>Volume Rata2 BBM yang diterima</label></td>
    <td>:<input type="text" name="no75" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["vol-terima1"];  ?>" >KL/bln </td>
    <td>dan:<input type="text" name="no76" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["vol-terima2"];  ?>" >KL/hari </td>
</tr>

<tr>
    <td><label>Volume Rata2 BBM yang disalurkan</label></td>
    <td>:<input type="text" name="no77" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["vol-kirim1"];  ?>" >KL/bln </td>
    <td>dan:<input type="text" name="no78" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["vol-kirim2"];  ?>" >KL/hari </td>
</tr>

<tr>
    <td><label>Jam SOP pengukuran stok <br>(misal jam 12:00 atau 24:00 atau 06:00) </label></td>
    <td>:<input type="text" name="no79" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jam-catat"];  ?>" ></td>
</tr>

<tr>
    <td><label>Volume stok BBM saat kunjungan  </label></td>
    <td>:<input type="text" name="no80" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["vol-stokk2"];  ?>" ></td>
</tr>

<tr>
    <td><label>Volume stok rata2 hari saat kunjungan (24 jam)</label></td>
    <td>:<input type="text" name="no81" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable  value="<?= $user["vol-stokk1"];  ?>" ></td>
</tr>

<tr>
    <td><label>Moda transportasi penerimaan</label></td>
    <td>:<label><?= $user["moda-terima"];?></label>
    	<!-- <select name="no82" style="height:25px;font-size: 14px;cursor:pointer;"  disable value="<?= $user["moda-terima"];  ?>" >
            <option value="Kapal">Kapal</option>
            <option value="Truk">Truk</option>
            <option value="Pipa">Pipa</option>
        </select> -->
    </td>
</tr>

<tr>
    <td><label>Moda transportasi penyaluran</label></td>
    <td>:<label><?= $user["moda-kirim"];?></label>
    	<!-- <select name="no83" style="height:25px;font-size: 14px;cursor:pointer;"  disable value="<?= $user["moda-kirim"];  ?>" >
            <option value="Kapal">Kapal</option>
            <option value="Truk">Truk</option>
            <option value="Pipa">Pipa</option>
        </select> -->
    </td>
</tr>
</table>
<br>
<table  border="0" style="padding-left: 10px">
  <tr>
    <td><label>Sistem Aplikasi Laporan yang digunakan</label></td>
    <td>:<input type="text" name="no84" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["jns-apk"];  ?>" hidden></td>
  </tr>

  <tr>
    <td><label>Bahasa Pemograman</label></td>
    <td>:<input type="text" name="no85" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["bhs-apk"];  ?>" ></td>
  </tr>
  <tr>
    <td><label>Tipe data base</label></td>
    <td>:<input type="text" name="no86" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["dtbse"];  ?>" ></td>
  </tr>

<tr>
    <td><label>SDM IT yang dimiliki</label></td>
    <td>:<label><?= $user["it-sdm1"];?></label>
    	<!-- <select name="no87" style="height:25px;font-size: 14px;cursor:pointer;"disable value="<?= $user["it-sdm1"];  ?>">
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select> -->
    </td>
    <td><label>jumlahnya kalau ada</label></td>
    <td>:<input type="text" name="no88" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["it-sdm2"]; ?>" >orang</td>
</tr>

<tr>
    <td><label>Infrastruktur Server yang dimiliki</label></td>
    <td>:<label><?= $user["server1"]; ?></label>
    	<!-- <select name="no89" style="height:25px;font-size: 14px;cursor:pointer;"disable value="<?= $user["server1"]; ?>" >
            <option value="Ada">Ada</option>
            <option value="Tidak ada">Tidak ada</option>
        </select> -->
    </td>
    <td><label>Jika ada, sebutkan</label></td>
    <td>:<input type="text" name="no90" style="height: 25;margin-left: 1px;font-size: 14px;cursor: pointer; " disable value="<?= $user["server2"];  ?>" ></td>
</tr>

</table><br>
</div>

<div id="footer">
<img src="foot.png" sizes="100%"><br>
</div>
<script> window.print()</script>

</body>

</html>