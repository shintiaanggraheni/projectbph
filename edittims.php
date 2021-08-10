<?php 

session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
}

require 'functions.php';
require 'terbilang.php';
require 'gettgl.php';


$id  = $_GET["id"];
$idn  = $_GET["idn"];
$thn = (date('Y'));

$timsr = query("SELECT * FROM tims WHERE id = $idn ");

$hariba 	='';
$tanggalbaa ='';
$tglterba 	='';
$bulanba	='';
$tahunba	='';
$twba		='';

if (isset($_POST["submitk"]))
{

	$datee = $_POST["tanggalBAc"];
	$thun  = substr($datee, 0, 4);
	$blan  = substr($datee, 5, 2);
	$tgl   = substr($datee, 8, 2);

	echo ("<script>console.log('" . $datee . "');</script>");
	echo ("<script>console.log('" . $blan . "');</script>");
 
    $namahari = date('l',strtotime($datee));

    $hariindo = array('Monday'=>'Senin','Tuesday'=>'Selasa','Wednesday'=>'Rabu','Thursday'=>'Kamis','Friday'=>'Jumat','Saturday'=>'Sabtu','Sunday'=>'Minggu');

    // echo($hariindo[$namahari]); echo "<br>";
 

    $bulanindo = array('01'=>'Januari','02'=>'Pebruari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'Nopember','12'=>'Desember');
    
    // echo($bulanindo['08']); echo "<br>";

	$hariba 	= $hariindo[$namahari];
	$tanggalbaa = $tgl;
	$tglterba 	= terbilang($tgl);
	echo ("<script>console.log('" . $bulanindo["$blan"] . "');</script>");
	$bulanba	= $bulanindo["$blan"];
	$tahunba	= $thun;




$idk		=htmlspecialchars($_POST["idk"]);
$stugas		=htmlspecialchars($_POST["stugas"]);
$tglstugas	=htmlspecialchars($_POST["tglstugas"]);

$hari 		= $hariindo[$namahari];		
// htmlspecialchars($_POST["hari"]);
$tglter 	= terbilang($tgl);		
// htmlspecialchars($_POST["tglter"]);
$tanggal 	= $tgl;		
// htmlspecialchars($_POST["tanggal"]);
$bulan 		= $bulanindo["$blan"];	
// htmlspecialchars($_POST["bulan"]);
$tahun 		= $thun;		
// htmlspecialchars($_POST["tahun"]);

$tw 		=htmlspecialchars($_POST["tw"]);
$nama1		=htmlspecialchars($_POST["nama1"]);
//$jabatan1	=htmlspecialchars($_POST["jabatan1"]);
$nama2		=htmlspecialchars($_POST["nama2"]);
//$jabatan2	=htmlspecialchars($_POST["jabatan2"]);
$nama3		=htmlspecialchars($_POST["nama3"]);
//$jabatan3	=htmlspecialchars($_POST["jabatan3"]);
$nama4		=htmlspecialchars($_POST["nama4"]);
//$jabatan4	=htmlspecialchars($_POST["jabatan4"]);

$sql = "UPDATE `tims` SET `idk` = '$idk',`stugas`='$stugas',`tglstugas`='$tglstugas',`hari`='$hari',`tanggal`='$tanggal',`tglter`='$tglter',
`bulan`='$bulan',`tahun`='$tahun',`tw`='$tw',`nama1`='$nama1',`nama2`='$nama2',`nama3`='$nama3',`nama4`='$nama4' WHERE id=$idn";

	mysqli_query($konek,$sql);

	// CEK SUKSES
	// var_dump($_POST);

	
	echo ("<script>console.log('" . mysqli_affected_rows($konek) . "');</script>");

if (mysqli_affected_rows($konek) > 0) {

	// if ( tambah($_POST) > 0 ) {
			echo "<script>
					document.location.href = 'dtims.php?id=$id';		 	
				</script>";
				// alert('sukses nambah');

		} 
	else 
		 {echo "<script>
					alert('gagal ubah');
				</script>";
	  	 }

}


if (isset($_POST["submitb"])){
		echo "<script>
		 	document.location.href = 'dtims.php?id=$id';
		      </script>";
}


if (isset($_POST["pecah"])){
		
	
	// $twba		='6';
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Tim Survey</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="style/style.css">
<style type="text/css">

body {
background: url(backpic2.png) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
}



.form-style-3{
	max-width: 550px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: blue;
	font-weight: bold;
	font-size: 16px;
	text-shadow: 1px 1px 1px red;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid blue;
	padding: 20px;
	background: white;
	box-shadow: inset 0px 0px 50px #FF8C00;
	-moz-box-shadow: inset 0px 0px 25px blue;
	-webkit-box-shadow: inset 0px 0px 15px blue;
}
.form-style-3 fieldset legend{
	color: white;
	border-top: 1px solid #00FFFF;
	border-left: 1px solid #00FFFF;
	border-right: 1px solid #00FFFF;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: blue;
	padding: 0px 5px 3px 5px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 18px;
}
.form-style-3 textarea{
	width:500px;
	height:500px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #00CED1;
	outline: none;
	color: #9932CC;
	padding: 5px 12px 5px 12px;
	box-shadow: inset 1px 1px 4px blue;
	-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
	-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
	background: white;
	width:80%;

}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: orange;
	border: 1px solid #C94A81;
	padding: 15px 55px 15px 55px;
	color: white;
	box-shadow: inset -1px -1px 3px #FF62A7;
	-moz-box-shadow: inset -1px -1px 3px #FF62A7;
	-webkit-box-shadow: inset -1px -1px 3px #FF62A7;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	font-weight: bold;
}
.form-style-3 .required{
	color:red;
	font-weight:normal;}

</style>

</head>

<body oncontextmenu="return false;">
	<div class="form-style-3">
	<form action="" method="post">
		<fieldset><legend>Ubah Data Tim Survey</legend>
		<?php foreach ($timsr as $row) : ?>
		<ul>			
			<input type="text" class="input-field" name="idk" id="idk" value="<?=$id?>" readonly hidden> <br>
		<label for = "stugas" >No. Surat Tugas:</label>
		<input type="text" class="input-field" name="stugas" id="stugas" value="<?= $row["stugas"]; ?>"> <br>

		<label for = "tglstugas" >Tanggal Surat Tugas:</label>
		<input type="date" class="input-field" name="tglstugas" id="tglstugas" value="<?= $row["tglstugas"]; ?>"> <br>

		<label for = "tanggalBA" >Hari & Tanggal Berita Acara:</label>

		<input type="date" name="tanggalBAc">
        <input type="text" name="hari" value="<?=$hariba?>" hidden>
        <input type="text" name="tanggal" value="<?=$tanggalbaa?>" hidden>
        <input type="text" name="tglter" value="<?=$tglterba?>" hidden>
        <input type="text" name="bulan" value="<?=$bulanba?>" hidden>
        <input type="text" name="tahun" value="<?=$tahunba?>" hidden>
        <input type="text" name="tw" value="<?=$twba?>" hidden>
		<br>
		<label for = "tw" >Laporan TW :</label>
		<select name="tw" style="cursor:pointer;">
            <option value="">...</option>
            <option <?php if($row['tw'] == 'I') echo "selected";?> value="I">Triwulan I</option> 
            <option <?php if($row['tw'] == 'II') echo "selected";?> value="II">Triwulan II</option>
            <option <?php if($row['tw'] == 'III') echo "selected";?> value="III">Triwulan III</option> 
            <option <?php if($row['tw'] == 'IV') echo "selected";?> value="IV">Triwulan IV</option>
        </select>


		<label for = "nama1" > Tim BPH MIGAS 1:</label>
		<input type="text" class="input-field" name="nama1" id="nama1" value="<?= $row["nama1"]; ?>"> <br>
		<label for = "nama3" >Tim BPH MIGAS 2:</label>
		<input type="text" class="input-field" name="nama3" id="nama3" value="<?= $row["nama3"]; ?>"> <br>
		<label for = "nama2" > Tim Badan Usaha 1:</label>
		<input type="text" class="input-field" name="nama2" id="nama2" value="<?= $row["nama2"]; ?>"> <br>
		<label for = "nama4" >Tim Badan Usaha 2:</label>
		<input type="text" class="input-field" name="nama4" id="nama4" value="<?= $row["nama4"]; ?>"> <br>
		<input type="text" name="jabatan1" hidden>
		<input type="text" name="jabatan2" hidden>
		<input type="text" name="jabatan3" hidden>
		<input type="text" name="jabatan4" hidden>
		<br><br>
		<button type ="submit" name="submitk">Ubah</button>
		<button type ="submitb" name="submitb">Kembali</button> 
				<!-- <button type ="button" onclick="javascript : history.back()">Kembali</button>  -->

		</ul>
		<?php endforeach; ?>
</body>

</html>
