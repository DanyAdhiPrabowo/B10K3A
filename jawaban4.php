<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$array = ['P','R','O','G','R','A','M','M','E','R'];
function cetak_gambar($array){
    $p = count($array);
     for($i=0;$i<$p;$i++){
        for($j=0;$j<$p;$j++){
            if($j==$i)
            {
                echo $array[$j];
            }
            else if($j==9-$i)
            {
                echo $array[$i];
            }
            else
            {
                echo "&nbsp=&nbsp";
            }
        }
        echo '<br>';
    };    
};
 cetak_gambar($array);
?>


</body>
</html>
