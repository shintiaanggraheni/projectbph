<?php 

session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
}

require 'functions.php';

$id  = $_GET["id"];
$thn = (date('Y'));

if (isset($_POST["submitk"]))
{
$idk		=htmlspecialchars($_POST["idk"]);
$stugas		=htmlspecialchars($_POST["stugas"]);
$tglstugas	=htmlspecialchars($_POST["tglstugas"]);
$hari 		=htmlspecialchars($_POST["hari"]);
$tanggal 	=htmlspecialchars($_POST["tanggal"]);
$bulan 		=htmlspecialchars($_POST["bulan"]);
$tahun 		=htmlspecialchars($_POST["tahun"]);
$tw 		=htmlspecialchars($_POST["tw"]);
$nama1		=htmlspecialchars($_POST["nama1"]);
$jabatan1	=htmlspecialchars($_POST["jabatan1"]);
$nama2		=htmlspecialchars($_POST["nama2"]);
$jabatan2	=htmlspecialchars($_POST["jabatan2"]);
$nama3		=htmlspecialchars($_POST["nama3"]);
$jabatan3	=htmlspecialchars($_POST["jabatan3"]);
$nama4		=htmlspecialchars($_POST["nama4"]);
$jabatan4	=htmlspecialchars($_POST["jabatan4"]);

$sql = "INSERT INTO `tims` 
(`idk`,`stugas`,`tglstugas`, `hari`, `tanggal`,`bulan`,`tahun`,`tw`, `nama1`, 
	`jabatan1`, `nama2`, `jabatan2`, `nama3`, `jabatan3`, `nama4`, `jabatan4`)
VALUES 
('$idk','$stugas','$tglstugas','$hari', '$tanggal','$bulan','$tahun','$tw','$nama1', '$jabatan1', '$nama2', '$jabatan2', '$nama3', '$jabatan3', '$nama4', '$jabatan4')";


	mysqli_query($konek,$sql);

	// CEK SUKSES
	// var_dump($_POST);

if (mysqli_affected_rows($konek) > 0) {

	// if ( tambah($_POST) > 0 ) {
			echo "<script>
					document.location.href = 'dtims.php?id=$id';		 	
				</script>";
				// alert('sukses nambah');

		} 
	else 
		 {echo "<script>
					alert('gagal nambah');
				</script>";
	  	 }

}


if (isset($_POST["submitb"])){
		echo "<script>
		 	document.location.href = 'dtims.php?id=$id';
		      </script>";
}


// if (isset($_POST["submitq"]))
// {
// $id  = $_GET["id"];
// $sqladd = $_POST["sqladd"];
// // var_dump($sqladd);
// mysqli_query($konek,$sqladd);

// if (mysqli_affected_rows($konek) > 0) {
// 			echo "<script>
// 				 	alert('sukses nambah');	
// 				 	document.location.href = 'editform1.php?id=$id';			 	
// 				</script>";
// // 
// 		} 
// 	else 
// 		 {echo "<script>
// 					alert('gagal nambah');
// 				</script>"; 
// 			}


// }


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
	<!-- <h1>Tambah Pengujian Order No. <?=$id  ?></h1> -->

	<form action="" method="post">
		<fieldset><legend>Tambah Data Tim Survey</legend>
		<ul>			
			<!-- <label for = "id" > No. ID BU : </label>  -->
			<input type="text" class="input-field" name="idk" id="idk" value="<?=$id?>" readonly hidden> <br>
		<label for = "stugas" >No. Surat Tugas:</label>
		<input type="text" class="input-field" name="stugas" id="stugas"> <br>

		<label for = "tglstugas" >Tanggal Surat Tugas:</label>
		<input type="date" class="input-field" name="tglstugas" id="tglstugas"> <br>

		<label for = "tanggalBA" >Hari & Tanggal Berita Acara:</label>
		<label for = "hari" >Hari:</label>
		<select name="hari" style="cursor:pointer;">
            <option value="">...</option>
            <option value="Senin">Senin</option> 
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option> 
            <option value="Kamis">Kamis</option>
            <option value="Jum at">Jum at</option> 
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
        </select>
        <label for = "tanggalBA" >Tanggal:</label>
		<select name="tanggal" style="cursor:pointer;">
			Tanggal
            <option value="">...</option>
            <option value="1">1</option> <option value="2">2</option>
            <option value="3">3</option> <option value="4">4</option>
            <option value="5">5</option> <option value="6">6</option>
            <option value="7">7</option> <option value="8">8</option>
            <option value="9">9</option> <option value="10">10</option>
            <option value="11">11</option> <option value="12">12</option>
            <option value="13">13</option> <option value="14">14</option>
            <option value="15">15</option> <option value="16">16</option>
            <option value="17">17</option> <option value="18">18</option>
            <option value="19">19</option> <option value="20">20</option>
            <option value="21">21</option> <option value="22">22</option>
            <option value="23">23</option> <option value="24">24</option>
            <option value="25">25</option> <option value="26">26</option> 
            <option value="27">27</option>
            <option value="28">28</option> <option value="29">29</option>
            <option value="30">30</option> <option value="31">31</option>
        </select>
        <label for = "tanggalBA" >Bulan:</label>
        <select name="bulan" style="cursor:pointer;">
            <option value="">...</option>
            <option value="Januari">Januari</option> 
            <option value="Pebruari">Pebruari</option>
            <option value="Maret">Maret</option> 
            <option value="April">April</option>
            <option value="Mei">Mei</option> 
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="Nopember">Nopember</option>
            <option value="Desember">Desember</option>
        </select>
        <label for = "thnBA" >Tahun:</label>
        <input type="text" class="input-field" name="tahun" id="tahun" value="<?=$thn ?>">
		<br>
		<label for = "tw" >Laporan TW :</label>
		<select name="tw" style="cursor:pointer;">
            <option value="">...</option>
            <option value="TW I">Triwulan I</option> 
            <option value="TW II">Triwulan II</option>
            <option value="TW III">Triwulan III</option> 
            <option value="TW IV">Triwulan IV</option>
        </select>


		<label for = "nama1" > Tim BPH MIGAS 1:</label>
		<input type="text" class="input-field" name="nama1" id="nama1"> <br>
		<label for = "nama3" >Tim BPH MIGAS 2:</label>
		<input type="text" class="input-field" name="nama3" id="nama3"> <br>
		<label for = "nama2" > Tim Badan Usaha 1:</label>
		<input type="text" class="input-field" name="nama2" id="nama2"> <br>
		<label for = "nama4" >Tim Badan Usaha 2:</label>
		<input type="text" class="input-field" name="nama4" id="nama4"> <br>
		<input type="text" name="jabatan1" hidden>
		<input type="text" name="jabatan2" hidden>
		<input type="text" name="jabatan3" hidden>
		<input type="text" name="jabatan4" hidden>
		<br><br>
		<button type ="submit" name="submitk">Tambah</button>
		<button type ="submitb" name="submitb">Kembali</button> 
				<!-- <button type ="button" onclick="javascript : history.back()">Kembali</button>  -->

		</ul>

</body>

</html>
