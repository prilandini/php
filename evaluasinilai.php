<!DOCTYPE html>
<html>
<head>
    <title>Hitung Grade dengan PHP</title>
</head>
<body>

    <form name="grade" method="post">
        <input type="text" name="txtnilai">
        <input type="submit" name="hitung" value="Konversi">
    </form>

<?php 
    if (isset($_POST['hitung'])){
        $nilai = $_POST['txtnilai'];
        if ($nilai >= 80 ){ $grade='A';} else
        if ($nilai >= 65 && $nilai < 80){ $grade='B';} else
        if ($nilai >= 45 && $nilai < 65){ $grade='C';} else
        if ($nilai >= 30 && $nilai < 45){ $grade='D';} else
        { $grade='E';}

        echo "Grade = $grade";
    }
?>

</body>
</html>