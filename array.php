<html>
     <link href="../css/bootstrap.min.css" rel="stylesheet">
<body>
<p>Sorting Array <br><br></p>

 Isi dengan Number yang memiliki maksimal 4 digit<br>
<form name="form" method="post" action="array.php">
<pre>
   
<?php for ($i=0; $i < 10; $i++) { ?>
   Angka ke <?php echo $i+1 ?> = <input type="text"  maxlength="4" pattern="\d*" name="angka[<?php $i ?>]"><br>

<?php } ?>
<input type="submit" name="sorting" value="sorting">
<?php

if (!empty($_POST['angka'])) {
    $r=$_REQUEST['angka'];
    rsort($r); //reverse sort, mengurutkan dari besar ke kecil
    print_r($r);
    
}

?>
</pre>
</form>
</body>
</html