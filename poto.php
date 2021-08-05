<?php 

require 'functions.php';

$id = $_GET["id"];
$idk = $_GET["idk"];

$queryk = query("SELECT * FROM tanki WHERE id = $id")[0]; 
//var_dump($queryk["nama"]);  //buat liat data yg terkirim berdasarkan id 
	if ($queryk["smbpas"]) {
		echo "<script> 
				 alert('photo sudah diuplod ');
				 document.location.href = 'dtangki.php?id=$idk';
		      </script>"; }

if (isset($_POST["submitk"]))
{

	if (!$queryk["smbpas"]) 
 {

	$id    	= $_POST["id"];
	// $nama  	= htmlspecialchars($_POST["namat"]); 

	$gambar	=  upload();
	if (!$gambar){
		return false;	
	}

		// `namat` = '$nama',
		
		$queryme ="	UPDATE `tanki` SET
		
		`smbpas` = '$gambar'

		WHERE `id` = '$id' ";

	mysqli_query($konek,$queryme);


	if (mysqli_affected_rows($konek) > 0 )
		 { 
		 	echo "<script>				 
				 document.location.href = 'dtangki.php?id=$idk';
			</script>";
			// alert('sukses ubah');
		}    
		// alert('sukses ubah');
	else 
		 {echo "<script>
				 alert('gagal ubah');			
			    </script>";
		} 
	}

 	else {echo "<script> 
				 alert('sudah diuplod');
				 document.location.href = 'dtangki.php?id=$idk';
			</script>"; }

  }



?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>Uplod Berkas</title>
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
	<link rel="shortcut icon" href="img/proses.png"/>
</head>
<body oncontextmenu="return false;">
<div class="form-style-3">

	<form action="" method="post" enctype="multipart/form-data">
		<fieldset><legend>Uplod Photo : </legend>

		<ul>	
			<input type ="hidden" name ="id" value="<?php echo $queryk["id"];?>">
				<!-- <label for = "noorder" > No. Order : </label> -->
				<label for = "nama" > Nama Tanki/Jenis BBM : </label> 
				<input type="text" class="input-field" name="nama" id="nama" 
				 value="<?= $queryk["namat"];?>/<?= $queryk["jenist"];  ?>" readonly> 

				<label for = "gambar" >  Select File *jpg,*pdf : </label> 
				<!-- <img src="img/<?= $queryk["poto"];  ?>  "> -->
				<input type="file" class="input-field" name="gambar" id="gambar"> 

			<br><br>
				<button type ="submitk" name="submitk">Save</button> 
				<button type ="button" onclick="javascript : history.back()">Cancel</button> 

		</ul>

</body>
</html>