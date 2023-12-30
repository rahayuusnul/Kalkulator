<?php
	$bil1 = @$_POST['bil1'];
	$bil2 = @$_POST['bil2'];
	$hasil = @$_POST['hasil'];

	//tambah
	if(isset($_POST['tambah'])){
		$hasil = $bil1 + $bil2;
	}

	//kurang
	if(isset($_POST['kurang'])){
		$hasil = $bil1 - $bil2;
	}

	//kali
	if(isset($_POST['kali'])){
		$hasil = $bil1 * $bil2;
	}

	//bagi
	if(isset($_POST['bagi'])){
		$hasil = $bil1 / $bil2;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="style/style.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
</div>
	<div id="dasar">
		<div id="judul"><center><h4><b>Kalkulator</b></h4></center></div>
		<br><br><br><br>
		<div id="bagan">
			<form method="post" action="">
				<br>
					<tr>	
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Bilangan 1</td>
						<td>:</td>
						<td>
							<input type="text" name="bil1" value="<?=$bil1?>">
						</td>
					</tr>
					<br><br>
					<tr>	
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Bilangan 2</td>
						<td>:</td>
						<td>
							<input type="text" name="bil2" value="<?=$bil2?>">
						</td>
					</tr>
					<br><br>
					<tr>	
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Hasil</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td>:</td>
						<td>
							<input type="text" name="hasil" value="<?=$hasil?>">
						</td>
					</tr>
					<br><br>
					<tr>	
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Operasi</td>&nbsp;&nbsp;&nbsp;&nbsp;
						<td>:</td>
						<td>
           					 <button type="button" onclick="location.href = '?clear'">Clear</button>
						</td>
					</tr>
					<br><br>
					<tr>	
						<td></td>
						<td></td>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" name="tambah" value="+">
							<input type="submit" name="kali" value="x">
							<input type="submit" name="kurang" value="-">
							<input type="submit" name="bagi" value="/">
							<input type="submit" name="persen" value="%">
						</td>
					</tr>
			</form>
		</div>
	</div>
</body>
</html>