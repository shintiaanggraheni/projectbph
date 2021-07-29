<?php

session_start();

if (isset($_SESSION["login"])) 
{ header("location: login.php");
 exit;
 }

require 'functions.php';
// jika tombol diklik
if (isset($_POST["login"])) 
{

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$hasil = mysqli_query($konek, 
		"SELECT * FROM user WHERE nama = '$username' ");
	
	// cek user ada ga
	if (mysqli_num_rows($hasil) === 1 ) 
	{
		$row = mysqli_fetch_assoc($hasil);
		  //mendapatkan isi 1 record(id,nama,username,password)
		//cek password
		// if (password_verify($password, $row["password"]))
		if ($row["pwd"] == $password ) 
		{
		// 	var_dump($row["password"]);
			//header("Location : index.php");
			//$_SESSION["login"] = true; 
			// echo "<script>
			// 	 	alert('Selamat Datang $username ');
			// 	 	document.location.href = 'index.php';
			// 	</script>";
			// exit;
			$_SESSION["login"] = true;

			// if($row["level"] == "admin")
			// 	{
			// 		// buat session login dan username
			// 		$_SESSION['username'] = $username;
			// 		$_SESSION['kelompok'] = $row["kelompok"];					
			// 		$_SESSION['level']    = $row["level"];
					// $_SESSION['level'] = "admin";
					// alihkan ke halaman dashboard admin
					
					echo "<script>
							document.location.href = 'indexm.php';
					      </script>";
				// }alert('Selamat Datang $username');
				// cek jika user login sebagai analis
			// else if($row["level"] =="analis")
			// 	{
			// 		// buat session login dan username
			// 		$_SESSION['username'] = $username;
			// 		$_SESSION['kelompok'] = $row["kelompok"];
			// 		$_SESSION['nama'] 	  = $row["nama"];
			// 		$_SESSION['nip'] 	  = $row["nip"];
			// 		$_SESSION['nama'] 	  = $row["nama"];
			// 		$_SESSION['namakel']  = $row["namakel"];
			// 		$_SESSION['namalab']  = $row["namalab"];
			// 		$_SESSION['level']    = $row["level"];
			// 		// $kelompok = $row["kelompok"] ;
			// 		// $_SESSION['level'] = "analis";
			// 		// alihkan ke halaman dashboard analis
			// 		echo "<script>
			// 				alert('Selamat Datang $username ');
			// 				document.location.href = 'analis.php';
			// 			</script>";
			// 	}

				// cek jika user login sebagai kakel
			// else if($row["level"]=="kakel")
			// 	{
			// 		// buat session login dan username
			// 		$_SESSION['username'] = $username;
			// 		$_SESSION['kelompok'] = $row["kelompok"];
			// 		$_SESSION['nip'] 	  = $row["nip"];
			// 		$_SESSION['jabatan']  = $row["jabatan"];
			// 		$_SESSION['nama'] 	  = $row["nama"];
			// 		$_SESSION['namakel']  = $row["namakel"];
			// 		$_SESSION['level']    = $row["level"];
			// 		// $kelompok = $row["kelompok"] ;
			// 		// $_SESSION['level'] = "kakel";
			// 		// alihkan ke halaman dashboard kakel
			// 		echo "<script>
			// 				alert('Selamat Datang $username');
			// 				document.location.href = 'kakel.php';
			// 			</script>";
			// 	}		

			// else if($row["level"]=="palab")
			// 	{
			// 		// buat session login dan username
			// 		$_SESSION['username'] = $username;
			// 		$_SESSION['kelompok'] = $row["kelompok"];
			// 		$_SESSION['nip'] 	  = $row["nip"];
			// 		$_SESSION['jabatan']  = $row["jabatan"];
			// 		$_SESSION['nama'] 	  = $row["nama"];
			// 		$_SESSION['namakel']  = $row["namakel"];
			// 		$_SESSION['namalab']  = $row["namalab"];
			// 		$_SESSION['level']    = $row["level"];

			// 		//$kel = $_POST["$kelompok"];			
			// 		// $kelompok = $row["kelompok"] ;
			// 		//var_dump($kelompok);
			// 		// alihkan ke halaman dashboard palab

			// 		echo "<script>
			// 				alert('Selamat Datang $username');
			// 				document.location.href = 'palab.php';
					
			// 			</script>";
			// 			// document.location.href = 'palab.php?idlab=$kelompok';
			// 	}
		}
	}
	
	$error = true;


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
    video{
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
    }
          body{
            background-image: url('main.png');
			background-size: cover;background-position: center center;height: auto;
			
        }
</style>


<script type='text/javascript'>
    //<![CDATA[
    shortcut={
        all_shortcuts:{},
        add:function(a,b,c){
            var d={
                type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1
            };
            if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){
                d=d||window.event;if(c.disable_in_input){
                    var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return
                }
                d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={
                    "`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"
                },
                i={
                    esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){ top.location.href="https://cadangan.epizy.com/login.php/" }); //]]>
</script>


</head>
<body oncontextmenu="return false;" style="width: 100%">
<center>
  <!-- <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
                <source src="video/time.mp4" type="video/mp4"> 
        </video>  -->

<!-- <h1 style="color: red"> MONEV BPH-LEMIGAS </h1> -->

<?php if (isset($error)) : ?>
	<center>
	<!-- <p style="color:red; font-style: italic;" >username/password salah </p> <br> -->
	<?php echo "<div class='alert'>Username dan Password tidak sesuai !</div>";?>	
	</center>
<?php endif; ?>

<div class="kotak_login">
	<center>
	<img src="kesdm.png" width="65px">
	<img src="logoBPHMigas.png" width="170px"></center>
	<p class="tulisan_login">KEGIATAN MONITORING DAN VERIFIKASI LAPORAN PENYEDIAAN CADANGAN OPERASIONAL BBM
</p>
<br>
<form action="" method="post">
	<ul>
		<label for="username"> Username :</label>
		<input type="text" name="username" id="username" class="form_login" placeholder="Username" autofocus>
		<br>
		<label for="password"> Password :</label>
		<input type="password" name="password" id="password" class="form_login" placeholder="Password">
		<!-- <input type="kelompok" name="kelompok" id="kelompok" class="form_login" placeholder="isikan kelompok"> -->
		<br>
			<center>
			<button type="submit" class="tombol_login" name="login">Login</button> 
			</center>
	</ul>

</form>

</div>
</body>
</html>