<html>
<head>
	<title>Kalkulator Pembagian</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		
		<form method="post" action="kalkulatorbagi.php">			
			<input type="double" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="double" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<input type="submit" name="hitung" value="Hitung" class="tombol">	
		</form>

	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$hasil = $bil1/$bil2;			
		}
	?>
	
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>


</body>
</html>