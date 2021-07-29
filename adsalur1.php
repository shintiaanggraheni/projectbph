<?php 

// session_start();

// if (!isset($_SESSION["login"])) 
// { header("location: login.php");
//  exit;
// }

require 'functions.php';
$id  = $_GET["id"];
$tahun = date('Y');

if (isset($_POST["submitk"]))
{

$idk	= htmlspecialchars($_POST["idk"]);
$thn	= htmlspecialchars($_POST["thn"]);
$priod 	= htmlspecialchars($_POST["priod"]);
$jnsbbm 	= htmlspecialchars($_POST["jnsbbm"]);
$fasilitas 	= htmlspecialchars($_POST["fasilitas"]);
$dtstok	 	= htmlspecialchars($_POST["dtstok"]);
$dtsalur 	= htmlspecialchars($_POST["dtsalur"]);


	$sql = "INSERT INTO `laporan` 
(`idk`, `thn`, `priod`, `jnsbbm`, `fasilitas`, `dtstok`, `dtsalur`) VALUES 
('$idk', '$thn', '$priod', '$jnsbbm', '$fasilitas', '$dtstok', '$dtsalur')";


	mysqli_query($konek,$sql);

	// CEK SUKSES
	// var_dump($_POST);

if (mysqli_affected_rows($konek) > 0) {

	// if ( tambah($_POST) > 0 ) {
			echo "<script>
					document.location.href = 'dsalur1.php?id=$id';		 	
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
		 	document.location.href = 'dsalur1.php?id=$id';
		      </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Penyaluran Harian</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="style/style.css">
<style type="text/css">

body {
background: url(catat.jpg) no-repeat fixed;
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
	<!-- <link rel="shortcut icon" href="img/proses"/> -->
</head>
<body oncontextmenu="return false;">
	<div class="form-style-3">
	<form action="" method="post">

		<fieldset><legend>Tambah Data Evaluasi</legend>
		<ul>			
			<!-- <label for = "id" > No. ID BU : </label>  -->
			<input type="text" class="input-field" name="idk" id="idk" value="<?=$id?>" readonly hidden> <br>

			<label for = "thn" > Tahun  : </label>
			<input type="text" class="input-field" name="thn" id="thn" 
			value="<?=$tahun ?>" >
			<br>
			<label for = "priod" > Pilih Periode :	</label>
   			<select name="priod" style="cursor:pointer;" >
            <option value="">...</option>
            <option value="TW I">Triwulan I</option>
            <option value="TW II">Triwulan II</option>
            <option value="TW III">Triwulan III</option>
            <option value="TW IV">Triwulan IV</option>
        </select><br>

			<label for = "jnsbbm" > Jenis BBM :	</label>
   			<select name="jnsbbm" style="cursor:pointer;" >
            <option value="">...</option>
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

		<label for = "fasilitas" >NAMA FASILITAS: </label>
		<input type="text" class="input-field" name="fasilitas" id="fasilitas" > <br>
		
		<label for = "dtstok" >TOTAL VOL CADANGAN (PERIODE): </label>
		<input type="text" class="input-field" name="dtstok" id="dtstok" > <br>

		<label for = "dtsalur" >TOTAL VOL PENYALURAN HARIAN RATA" (PERIODE): </label>
		<input type="text" class="input-field" name="dtsalur" id="dtsalur" > <br>
			
			<br>
			<button type ="submit" name="submitk">Tambah</button>
			<button type ="submitb" name="submitb">Kembali</button> 

		</ul>

</body>

</html>
