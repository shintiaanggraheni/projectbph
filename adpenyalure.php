<?php 

session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
}

require 'functions.php';

$id  = $_GET["id"];

// $thn = (date('Y'));
$queryk = query("SELECT * FROM penyaluran WHERE id = $id")[0]; 
$idk  = $queryk["idk"];

if (isset($_POST["submitk"]))
{
$id				=htmlspecialchars($_POST["id"]);
$idk			=htmlspecialchars($_POST["idk"]);
$lokasi 		=htmlspecialchars($_POST["lokasi"]);
$jnsbbm 		=htmlspecialchars($_POST["jnsbbm"]);
$thn 			=htmlspecialchars($_POST["thn"]);
$voljanuari		=htmlspecialchars($_POST["voljanuari"]);
$volpebruari	=htmlspecialchars($_POST["volpebruari"]);
$volmaret		=htmlspecialchars($_POST["volmaret"]);
$volapril		=htmlspecialchars($_POST["volapril"]);
$volmei			=htmlspecialchars($_POST["volmei"]);
$voljuni		=htmlspecialchars($_POST["voljuni"]);
$voljuli		=htmlspecialchars($_POST["voljuli"]);
$volagustus		=htmlspecialchars($_POST["volagustus"]);
$volseptember	=htmlspecialchars($_POST["volseptember"]);
$voloktober		=htmlspecialchars($_POST["voloktober"]);
$volnopember	=htmlspecialchars($_POST["volnopember"]);
$voldesember	=htmlspecialchars($_POST["voldesember"]);


$sql ="	UPDATE `penyaluran` SET
`id` = '$id',
`idk` = '$idk',
`lokasi` = '$lokasi ',
`jnsbbm` = '$jnsbbm ',
`thn` = '$thn',
`volJanuari` = '$voljanuari',
`volPebruari` = '$volpebruari',
`volMaret` = '$volmaret',
`volApril` = '$volapril',
`volMei` = '$volmei',
`volJuni` = '$voljuni',
`volJuli` = '$voljuli',
`volAgustus` = '$volagustus',
`volSeptember` = '$volseptember',
`volOktober` = '$voloktober',
`volNopember` = '$volnopember',
`volDesember` = '$voldesember'

WHERE `id` = '$id' ";


	mysqli_query($konek,$sql);

	// CEK SUKSES
	// var_dump($_POST);

if (mysqli_affected_rows($konek) > 0) {

	// if ( tambah($_POST) > 0 ) {
			echo "<script>
					document.location.href = 'dpenyalur.php?id=$idk';		 	
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
		 	document.location.href = 'dpenyalur.php?id=$idk';
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
	<title>Tambah Data Penyaluran</title>
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
		<fieldset><legend>Tambah Data Penyaluran</legend>
		<center>			
		<input type="text" class="input-field" name="id" id="id" value="<?=$id?>" readonly hidden> 
		
		<input type="text" class="input-field" name="idk" id="idk" value="<?=$queryk["idk"];  ?>" readonly hidden> 

		<label for = "lokasi" >Lokasi Konsumen : <?= $queryk["lokasi"];  ?></label>
		<input type="text" class="input-field" name="lokasi" id="lokasi" value="<?=$queryk["lokasi"];  ?>" hidden> 

        <label for = "thn" >Tahun: <?= $queryk["thn"];  ?></label>
        <input type="text" class="input-field" name="thn" id="thn" value="<?=$queryk["thn"];  ?>" hidden> 
<!--         <select name="thn" style="cursor:pointer;">
            <option value="">...</option>
            <option value="2021">2021</option> 
            <option value="2022">2022</option>
            <option value="2023">2023</option> 
        </select> -->

		<label for = "jnsbbm" > Jenis BBM : <?= $queryk["jnsbbm"];  ?> 	</label>
		<input type="text" class="input-field" name="jnsbbm" id="jnsbbm" value="<?=$queryk["jnsbbm"];  ?>" hidden> 
<!--    		<select name="jnsbbm" style="cursor:pointer;" >
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
        </select> -->
<!-- 
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
        </select> -->
        </center>
       	<label for = "jnsbbm" > Volume Penyaluran (L) :</label>
<table> <ul>
	<td>
<label>Bulan Januari : </label>
<input type="text" class="input-field" name="voljanuari" id="voljanuari" value="<?=$queryk["volJanuari"];  ?>" >
<label>Bulan Pebruari : </label>
<input type="text" class="input-field" name="volpebruari" id="volpebruari" value="<?=$queryk["volPebruari"];  ?>" >
<label>Bulan Maret : </label>
<input type="text" class="input-field" name="volmaret" id="volmaret" value="<?=$queryk["volMaret"];  ?>"  >
<label>Bulan April : </label>
<input type="text" class="input-field" name="volapril" id="volapril" value="<?=$queryk["volApril"];  ?>" >
<label>Bulan Mei : </label>
<input type="text" class="input-field" name="volmei" id="volmei" value="<?=$queryk["volMei"];  ?>" >
<label>Bulan Juni : </label>
<input type="text" class="input-field" name="voljuni" id="voljuni" value="<?=$queryk["volJuni"];  ?>" > </td>
<td>
<label>Bulan Juli : </label>
<input type="text" class="input-field" name="voljuli" id="voljuli" value="<?=$queryk["volJuli"];  ?>" >
<label>Bulan Agustus : </label>
<input type="text" class="input-field" name="volagustus" id="volagustus" value="<?=$queryk["volAgustus"];  ?>"  >
<label>Bulan September : </label>
<input type="text" class="input-field" name="volseptember" id="volseptember" value="<?=$queryk["volSeptember"];  ?>"  >
<label>Bulan Oktober : </label>
<input type="text" class="input-field" name="voloktober" id="voloktober" value="<?=$queryk["volOktober"];  ?>" >
<label>Bulan Nopember : </label>
<input type="text" class="input-field" name="volnopember" id="volnopember" value="<?=$queryk["volNopember"];  ?>"  >
<label>Bulan Desember : </label>
<input type="text" class="input-field" name="voldesember" id="voldesember" value="<?=$queryk["volDesember"];  ?>"  >
</ul>
</td>
	</table>
	<table>
		<br><br>
		<button type ="submit" name="submitk">Simpan</button>
		<button type ="submitb" name="submitb">Kembali</button> 
				<!-- <button type ="button" onclick="javascript : history.back()">Kembali</button>  -->

		
</table>
</body>

</html>
