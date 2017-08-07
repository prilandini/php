<html>
     <link href="../css/bootstrap.min.css" rel="stylesheet">
<body>
<p>Sorting Array <br><br></p>

 Isi dengan Number yang memiliki maksimal 4 digit<br>
<form name="form" method="post" action="selecsort.php">
<pre>
   
<?php for ($i=0; $i < 10; $i++) { ?>

Angka ke <?php echo $i+1 ?> = <input type="text"  maxlength="4" pattern="\d*" name="angka[<?php $i ?>]"><br>

<?php } ?>

<input type="submit" name="sorting" value="sorting">

<?php

if (!empty($_POST['angka'])) {
    $r=$_REQUEST['angka'];
    $sudah=selecsort($r);
}
if (isset ($sudah)) {
    $size = count($sudah);
    for ($i=0;$i<=$size;$i++) 
    {
        $no = $i+1;
        echo "Setelah Di Sort Angka ke $no adalah $sudah[$i]<br>";
    }
}

function selecsort($values) 
{
$size = count($values);
for($i=0;$i<=$size;$i++)
  {
	for($j=$i+1;$j<$size;$j++)
       {
        if($values[$j] < $values[$i])
        {
            $min = $values[$j];
            $values[$j] = $values[$i];
            $values[$i] = $min;
        }    
       }

  }
    return $values;
}

?>
</body>
</html>