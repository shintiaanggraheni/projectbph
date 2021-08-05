<!DOCTYPE html>
<html>
<body>

<h2>Menggabungkan kode PHP dan Javascript<br>
Suckittrees.com</h2>
<b>Dengan PHP </b>
<br>

<p id="demo">Contoh</p>

<button type="button" onclick="myFunction()">Coba Klik</button>

<script tipe="text/Javascript">
function myFunction() {
  <?php
  $str= "Ini Paragraf dengan variabel PHP di dalam Javascript";
  echo "document.getElementById('demo').innerHTML = '$str';";
  ?>
}
</script>

</body>
</html> 