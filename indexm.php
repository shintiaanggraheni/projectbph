<?php 
session_start();

if (!isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }

require 'functions.php';


$sql = query("SELECT * FROM badanusaha ORDER BY wilayah ASC"); 

?>


<!DOCTYPE html>
<html>
<head>
<title>MONEV-BBM(BPH-LEMIGAS)</title>
<style>
#header {
/*    background-image: url('topr.png');*/
    background-size: 100%;
    color:white;
    text-align:center;
    padding:1px;
}
#nav {
    line-height:45px;
    background-color:grey;
    height:400px;
    width:150px;
    float:left;
    padding:15px;
}
#section {
    width:100%;
    float:center;
    padding:1px;
    /* background-position: center;
    background-image: url(main.png);
    background-size: 100%;*/
}
#footer {
    /*background-image: url(foot.png);*/
    background-size: 100%;
    color:white;
    clear:both;
    text-align:center;
    background-color: #5F9EA0;
}
a{
text-decoration:none;
color:blue;
padding-top:5px;
padding-bottom:5px;
padding-left:3px;
padding-right:7px;
}

a:hover{ 
 color:#FFFFFF;
 background: blue;
 padding-left:3px;
 padding-right:7px;
}

#custom {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 12px;text-align: center;
}

#custom td, #custom th {
  border: 1px solid #ddd;
  padding: 15px; text-align: center;
}

#custom tr:nth-child(even){background-color: #f2f2f2;} /*warna selang seling*/

#custom tr:hover {background-color: #ddd;} /*warna selang seling saat kursor*/

#custom th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #6495ED;
  color: white;text-align: center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #5F9EA0;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: blue;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color:  #6495ED;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 180px;
  box-shadow: 0px 10px 16px 0px rgba(0,0,0,0.6);
  z-index: 1;
}

.dropdown-content a {
  color: blue;
  padding: 14px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #6495ED;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<!-- <link rel="stylesheet" type="text/css" href="css/tampil.css"/> -->
</head>
<body oncontextmenu="return false;" >

<div id="header" >
<table width="100%">
<td style="position: left;width: 2%"><img src="kesdm.png" width="70px"></td>
<td style="width: 96%"></td>
<td style="position: right;width: 2%"><img src="logoBPHMigas.png" width="150px"></td>
                
                
</table>
</div>

<!-- <div id="nav">
Pantai Melayu<br>
</div> -->

<div id="section" >
<center>
<h4>KEGIATAN MONITORING DAN VERIFIKASI LAPORAN PENYEDIAAN CADANGAN OPERASIONAL BBM
</h4>
<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><strong><u>Option</u></strong></a>
    <div class="dropdown-content">
  		<a href="index0.html">Tambah Data Survey</a>
  		<a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

<table id="custom" >

<tr>
    <th >No.</th>
<!--     <th>opsi</th> -->
    <th >WILAYAH</th>
    <th >BADAN USAHA</th>
    <th >ALAMAT</th>
    <th >NO IZIN<br>USAHA</th>
    <th >MASA BERLAKU<br>USAHA IZIN</th>
    <th >STATUS</th>
<!--     <th >JUMLAH TANKI</th> -->
<!--     <th>KAPASITAS</th>
    <th>TGL. KALIBRASI</th>
    <th>SISTEM PENGUKURAN</th>
    <th>JAM PENGUKURAN<br>STOK</th>
    <th>OKUPANSI,%</th>
    <th>KEPEMILIKAN</th>
    <th>SUMBER PASOKAN</th> -->
</tr>
<?php $i = 1 ?>
<?php foreach ($sql as $row) : ?>

<tr>
    <td style="text-align: center;"><?= $i; ?> </td>
<!--<td>
        <a href="getposisiE.php?id=<?= $row["id"]; ?> ">Edit</a>
       <a href="hapus#.php?id=<?= $row["id"]; ?> "onclick ="
            return confirm ('Yakin Hapus data ini?');" >hapus</a> 
    </td> -->
    <td style="text-align: center;" ><?= $row["wilayah"]; ?>     </td>
    <td> 
    <a class="link" href= "getposisiv.php?id=<?= $row["id"]; ?>" ><?= $row["bu"]; ?> </a> 
    </td>
    <td> <?= $row["alamat"]; ?>  </td>
    <td> <?= $row["noizin"]; ?>  </td>
    <td> <?= $row["masaizin"]; ?>  </td>
    <td> <?= $row["status"]; ?>  </td>
 
</tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>
   
    </center>
</table>

</center>




</div>
<br>
<div id="footer">  
<label>copyright@2021,PPPTMGB LEMIGAS - BPH MIGAS</label> 
</div>

</body>
</html>