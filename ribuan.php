<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<style type="text/css">
		body{
			background: #e0e0e0;
		}
		.box{
			border:1px red solid;
			padding: 15px 10px;
			text-align: center;
			border-radius: 10px;
			background: #fff;
			box-shadow: 2px 2px 5px #848080;
		}
		input[type="text"]{
			border:1px #848484 solid;
			border-radius: 10px;
			height: 30px;
			padding: 0px 10px;
		}
		input[type="text"]:focus{
			box-shadow: 0px 0px 3px #919aff;
		}
		.text-ribuan{
			margin-top: 20px;
			font-size: 18px;
			color: #6d6d6d;
		}
		@media(min-width: 500px){
			.box{
				width: 450px;
				margin: 0 auto;
				margin-top: 50px;
			}
			input[type="text"]{
				width: 300px;
			}
		}
		@media(max-width: 499px){
			.box{
				margin-top: 50px;
			}
			input[type="text"]{
				width: 80%;
			}
		}
	</style>
</head>
<body>

	<div class="box">
		<!-- <img src="https://cobangoding.com/wp-content/uploads/2019/12/logo.png" style="width: 80%;margin-bottom: 20px;"> -->
		<input type="text" id="inputAngka"><br>
		<label id="showTextRibuan"></label>
<!-- 		<div class="text-ribuan">
		<span id="showTextRibuan"></span> -->
		</div>
	</div>

		<input type="text" id="inputAngka"><br>
		<label id="showTextRibuan"></label>


	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('#inputAngka').on('keyup',function(){
			var angka = $(this).val();

			var hasilAngka = formatRibuan(angka);

			/*$(this).val(hasilAngka);*/
			$('#showTextRibuan').text(hasilAngka);
		});

		function formatRibuan(angka){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			angka_hasil     = split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);



			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				angka_hasil += separator + ribuan.join('.');
			}

			angka_hasil = split[1] != undefined ? angka_hasil + ',' + split[1] : angka_hasil;
			return angka_hasil;
		}
	</script>
</body>
</html>