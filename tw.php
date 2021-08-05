<?php 

date_default_timezone_set('UTC');
require 'terbilang.php';

$kal = CAL_GREGORIAN;
$sasi = date('m');
$bh = date('Y');

$jumhari = cal_days_in_month($kal, $sasi, $bh);
echo "hari dibulan ini " .$jumhari.""; echo"<br>";


$tahun1 = date('Y');
$tahun2 = (date('Y')-1);
$bulans	= date('m');
$tgl	= date('d');


// echo("$tahun1");
// echo("$bulans");
// echo("$tglu");

function TanggalIndo($date){
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl   = substr($date, 8, 2);

	// $tgl   = substr($date, 3, 2);
	// $bulan = substr($date, 0, 2);
	// $tahun = substr($date, 6, 4);

	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
	return($result);


// echo 	TanggalIndo("07-24-2020"); echo "<br>";

// echo 	$bulan   = substr("07-24-2020", 0, 2); echo "<br>";
// echo 	$tanggal   = substr("07-24-2020", 3, 2);echo "<br>";
// echo 	$tahun   = substr("07-24-2020", 6, 4); echo "<br>";
// echo 	strtotime("07-24-2020");echo "<br>";

// echo "$tanggal - $bulan - $tahun";

}

    $tgl1 = '2021-08-01'; 
    // $tgl2 = date('Y-m-d',strtotime('+'.$jhari.' days', strtotime($tgl1))); 
    $namahari = date('l',strtotime($tgl1));

    $hariindo = array('Monday'=>'Senin','Tuesday'=>'Selasa','Wednesday'=>'Rabu','Thursday'=>'Kamis','Friday'=>'Jumat','Saturday'=>'Sabtu','Sunday'=>'Minggu');

    echo($hariindo[$namahari]); echo "<br>";

    $bulanindo = array('01'=>'Januari','02'=>'Pebruari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'Nopember','12'=>'Desember');
    echo "bulan ini: ";echo($bulanindo[$bulans]); echo "<br>";


$blntw = $bulans;
// echo("$blntw")
switch ($blntw) {
	case '01': case '02': case '03':
		// echo "TW1";
		$tws = 1;
		break;
	case '04': case '05': case '06':
		// echo "TW2";
		$tws = 2;
		break;
	case '07': case '08': case '09' :
		// echo "TW3";
		$tws = 3;
		break;
	case '10': case '11': case '12':
		// echo "TW4";
		$tws = 4;
		break;
				}

	$twl = $tws - 1;
	echo "$tws";echo "<br>";
	echo "$twl";echo "<br>";

echo "$tahun1"; echo "<br>";
echo "$tahun2"; echo "<br>";
echo "$bulans";	echo "<br>";
echo "$tgl"	;	echo "<br>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>tw</title>
</head>
<body>
<?php 
for($i = 1; $i < 5+1; $i++){ ?>
<table>
 <td><input type="text" name="<?=$i?>" value="<?="2021-08-".$i?>" size="10"> <br></td>
 <td><input type="text" name="<?="jnsbbm".$i?>" value="<?="jnsbbm".$i?>" size="10"> <br></td>
 <td><input type="text" name="<?="cdtl".$i?>" value="<?="cdtl".$i?>" size="10"> <br></td>
 <td><input type="text" name="<?="salur".$i?>" value="<?="salur".$i?>" size="10"> <br></td>
</table>
<?php } ?>

<!-- <?php

for($x=0;$x<$jumlah_dipilih;$x++){
	mysql_query("INSERT INTO makanan values('','$makanan[$x]')");
}
?>
 -->

<?php 
echo($hariindo[$namahari]); echo "<br>";
echo terbilang("$tgl");echo "<br>";
echo($bulanindo[$bulans]); echo "<br>";
echo "$tahun1"; echo "<br>";
?>

 <p>Copyright &copy;<?php echo date('Y');?>  
          <a href="http://www.komang.my.id">Komang.My.ID</a>
          Saran, kritik dan pertanyaan via email : info@komang.my.id</p>
</body>
</html>