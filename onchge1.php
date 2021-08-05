<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial Belajar JavaScript</title>
<script>
function tampilkan(){
  var nama_kota=document.getElementById("form1").kategori.value;
  if (nama_kota=="makanan")
    {
        document.getElementById("tampil").innerHTML="Anda Memilih <b>Makanan</b>";
    }
  else if (nama_kota=="minuman")
    {
        document.getElementById("tampil").innerHTML="Anda Memilih <b>Minuman</b>";
    }

}
</script>
</head>
<body>
<h2>Suckittrees.com</h2>
<form id="form1" name="form1" onsubmit="return false">
  <label>Pilih Kategori: </label>
  <select id="kategori" name="kategori" onchange="tampilkan()">
    <option value="makanan">makanan</option>
    <option value="minuman">minuman</option>
  </select>
</form>
<br/><br/>
<div id="tampil"></div>
</body>
</html>