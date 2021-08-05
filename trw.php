<?php 

date_default_timezone_set('UTC');
require 'terbilang.php';
require 'trw.php';


$kal = CAL_GREGORIAN;
$tahun1 = date('Y');
$tahun2 = (date('Y')-1);
$bulans	= date('m');
$tgl	= date('d');

$jumhari = cal_days_in_month($kal, $bulans, $tahun1);

    $tgl1 = '2021-08-01'; 
    $namahari = date('l',strtotime($tgl1));
    $hariindo = array('Monday'=>'Senin','Tuesday'=>'Selasa','Wednesday'=>'Rabu','Thursday'=>'Kamis','Friday'=>'Jumat','Saturday'=>'Sabtu','Sunday'=>'Minggu');


    $bulanindo = array('01'=>'Januari','02'=>'Pebruari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'Nopember','12'=>'Desember');

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

?>
