<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$data = [
			    ['g','h','x','j'],
			    ['a','c', 'b', 'e', 'd'],
			    ['q','w', 'a'],
			];

	function maxAbjad($abjad){
		$jum = count($abjad);
		$h = '';
		for ($i=0; $i <$jum ; $i++) { 
			$tertinggi = max($abjad[$i]);
			$h .=$tertinggi.'-';
		}
		$h = substr($h, 0, -1);
	    return  explode('-', $h);
	};

	var_dump(maxAbjad($data)) ;
?>




</body>
</html>