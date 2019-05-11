<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	function username_valid($user){
		$hurufKecil	= preg_match('@[a-z]@', $user);
		$spesial	= preg_match('@[^/w]@', $user); 
		$kapital	= preg_match('@[A-Z]@', $user);

		if($hurufKecil && $spesial && strlen($user)==8 ){
			return true;
		}else{
			return false;
		}
	}

	function email_valid($email){
		$hurufKecil	= preg_match('@[a-z]@', $email);
		$kapital	= preg_match('@[A-Z]@', $email);
		$spesial	= preg_match('@[^/w]@', $email); 
		$angka		= preg_match('@[0-9]@', $email);
		$pecah		= explode('@', $email);

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	        if (($hurufKecil || $kapital || $spesial || $angka) && strlen($pecah[0]) >= 4) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	}

	var_dump(username_valid('zeronull'));
	echo '<br>';
	var_dump(email_valid('aku@kamu.com'));
	echo '<br>';
	var_dump(email_valid('kamu@aku.com'));
?>


</body>
</html>