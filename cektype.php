<!DOCTYPE html>
<html>
<head>
	<title>Mengecek Tipe Data</title>
</head>

<body>
	<h1>Mengecek Tipe Data</h1>
	<form action="cektype.php" method="post">
		<input type="text" name="input" maxlength="1">
		<input type="submit" name="submit" value="cek">
	</form>
	<?php 
	    if(isset($_POST['submit'])) {
            if(is_numeric($_POST['input'])){
				echo "Karakter yang anda masukkan berupa angka";}else
            if(is_string($_POST['input'])){
                echo "Karakter yang anda masukkan berupa huruf";}
		}
    ?>

</body>
</html>