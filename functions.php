<?php 
//konek ke database
date_default_timezone_set('UTC');

$konek = mysqli_connect("localhost","root","","test");

// $konek = mysqli_connect("sql108.epizy.com","epiz_25947893","TwERywUYVwjHVsP","epiz_25947893_proses");

// $konek = mysqli_connect("sql201.epizy.com","epiz_29084125","l96Abqu3HLvaC","epiz_29084125_cadangan"); 

//query tabel user
function query ($query) 
	{
		global $konek;
		$hasil = mysqli_query($konek,$query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($hasil)) 
			{ $rows [] = $row; } 
		return $rows;
	} 


function upload(){

	$namafile 	= $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error		= $_FILES['gambar']['error']; 
	$tmpname	= $_FILES['gambar']['tmp_name'];

	if($error === 4){
		echo "<script>
				 alert('error,pilih file gambar/pdf dulu');
				 history.back();
			</script>";
		return false;
	}

	$ekstensigambarvalid = ['jpg','jpeg','pdf'];
	$ekstensigambar 	 = explode('.', $namafile);
	$ekstensigambar 	 = strtolower(end($ekstensigambar));
	if (!in_array($ekstensigambar , $ekstensigambarvalid)){
				echo "<script>
				 		alert('error,bukan file gambar/pdf');
				 		history.back();
					  </script>";
		return false;
	}

	move_uploaded_file($tmpname, 'berkas/'. $namafile); 

	return $namafile;
}



?>