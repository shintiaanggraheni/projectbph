<?php 

// session_start();

// if (!isset($_SESSION["login"])) 
// { header("location: login.php");
//  exit;
// }

require 'functions.php';
$id  = $_GET["id"];
// $konek = mysqli_connect("localhost","root","","proses");

if (isset($_POST["submitk"]))
{

$idk=htmlspecialchars($_POST["idk"]);
$namat=htmlspecialchars($_POST["namat"]);
$jenist=htmlspecialchars($_POST["jenist"]);
$kapt=htmlspecialchars($_POST["kapt"]);
$kapp=htmlspecialchars($_POST["kapp"]);
$kalibt=htmlspecialchars($_POST["kalibt"]);
$cdpump=htmlspecialchars($_POST["cdpump"]);
$bentukt=htmlspecialchars($_POST["bentukt"]);
$jnstank=htmlspecialchars($_POST["jnstank"]);
$altukut=htmlspecialchars($_POST["altukut"]);
$kalibu=htmlspecialchars($_POST["kalibu"]);
$jamstok=htmlspecialchars($_POST["jamstok"]);
$oku=htmlspecialchars($_POST["oku"]);
$stat=htmlspecialchars($_POST["stat"]);
$smbpas=htmlspecialchars($_POST["smbpas"]);

$sql = "INSERT INTO `tanki` 
	(`idk`, `namat`, `jenist`, `kapt`, `kapp`, `kalibt`, `cdpump`, `bentukt`, `jnstank`, `altukut`, `kalibu`, `jamstok`, `oku`, `stat`, `smbpas`) 
	VALUES 
	('$idk', '$namat', '$jenist', '$kapt', '$kapp', '$kalibt', '$cdpump', '$bentukt', '$jnstank	', '$altukut', '$kalibu', '$jamstok', '$oku', '$stat', '$smbpas')";


	mysqli_query($konek,$sql);

	// CEK SUKSES
	// var_dump($_POST);

if (mysqli_affected_rows($konek) > 0) {

	// if ( tambah($_POST) > 0 ) {
			echo "<script>
					document.location.href = 'dtangki.php?id=$id';		 	
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
		 	document.location.href = 'dtangki.php?id=$id';
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
	<title>Tambah Data Tanki</title>
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
	<!-- <link rel="shortcut icon" href="img/proses"/> -->
</head>
<body oncontextmenu="return false;">
	
	<div class="form-style-3">
	<!-- <h1>Tambah Pengujian Order No. <?=$id  ?></h1> -->

	<form action="" method="post">
		<fieldset><legend>Tambah Data Tanki</legend>
		<ul>			
			<!-- <label for = "id" > No. ID BU : </label>  -->
			<input type="text" class="input-field" name="idk" id="idk" value="<?=$id?>" readonly hidden> <br>

			<label for = "namat" >No. Tanki :</label>
			<input type="text" class="input-field" name="namat" id="namat"> <br>

			<label for = "jenist" > Jenis BBM :	</label>
   		<select name="jenist" style="cursor:pointer;" >
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

		<label for = "kapp" > Kapasitas Pumpable(KL):</label>
		<input type="text" class="input-field" name="kapp" id="kapp"> <br>

		<label for = "kapt" > Kapasitas Tanki(KL):</label>
		<input type="text" class="input-field" name="kapt" id="kapt"> <br>

		<label for = "kalibt" >Kalibrasi Tangki: </label>
		<input type="date" class="input-field" name="kalibt" id="kalibt" > <br>
		
		<label for = "cdpump" >Keterangan (Coverage Day Pumpable) (KL):</label>
		<input type="text" class="input-field" name="cdpump" id="cdpump"> <br>

		<label for = "bentukt" > Bentuk Tanki:</label>
		<select name="bentukt" style="cursor:pointer;">
            <option value="">...</option>
            <option value="Silender">Silender</option>
            <option value="Persegi">Persegi</option>
        </select><br>

        <label for = "jnstank">Jenis tanki </label>
        <select name="jnstank" style="cursor:pointer;">
            <option value="">...</option>
            <option value="Darat">Darat</option>
            <option value="Floting">Floting</option>
            <option value="Keduanya">Keduanya</option> 
        </select><br>

        <label for = "altukut" > Sistem Pengukuran Volume:</label>
		<select name="altukut" style="cursor:pointer;">
            <option value="">...</option>
            <option value="Gauging">Gauging</option>
            <option value="Flowmeter">Flowmeter</option>
        </select>

		<label for = "kalibu" >  Kalibrasi Alat Penyaluran : </label>
		<input type="date" class="input-field" name="kalibu" id="kalibu" > <br>

		<label for = "jamstok" >  Jam Pencatatan Stok : </label>
		<input style="cursor:pointer;" type="time" class="input-field" name="jamstok" id="jamstok" > <br>

		<label for = "oku" >  Okupansi,% : </label>
		<input type="text" class="input-field" name="oku" id="oku"> <br>

		<label for = "stat" > KEPEMILIKAn : </label>
		<select name="stat" style="cursor:pointer;">
            <option value="">...</option>
            <option value="Sendiri">Sendiri</option>
            <option value="Sewa">Sewa</option>
            <option value="Gabungan(Commingle)">Gabungan(Commingle)</option> 
        </select><br>

        <input type="text" class="input-field" name="smbpas" id="smbpas" hidden>
<!--         <label for = "smbpas" > SUMBER PASOKAN : </label>
        <select name="smbpas" style="cursor:pointer;">
            <option value="">...</option>
            <option value="Import">Import</option>
            <option value="Lokal">Lokal</option>
        </select> -->
				
			<br><br><br>
			<button type ="submit" name="submitk">Tambah</button>
			<button type ="submitb" name="submitb">Kembali</button> 
				<!-- <button type ="button" onclick="javascript : history.back()">Kembali</button>  -->

		</ul>

</body>

</html>
