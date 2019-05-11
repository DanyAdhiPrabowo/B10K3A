<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	function random(){
		$karakter 	= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$acak 		= str_shuffle($karakter);
		$panjang 	= substr($acak, 0, 32);

		return $panjang;
	}
	
	function cetak($jmlh){
		for($i=0 ; $i<$jmlh;$i++){
        $data[$i] = random();
        
	        for($j=0; $j < $i ;$j++){
	            if($data[$i] == $data[$j]){
	                $data[$i] = random();
	            }
	        }
	    }
	    foreach($data as $value){
	        echo $value."<br>";
	    }
	}
	cetak(3);
?>




</body>
</html>