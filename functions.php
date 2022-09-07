<!DOCTYPE html>
<html>
<head>
	<title>function | page</title>
</head>
<body>

<?php
	
	function eneoLaMraba( $upande ){
		$eneo = $upande * $upande;
		return $eneo;
	}

	$userData = $_GET['userData'];

	echo eneoLaMraba( $userData);


?>

</body>

</html>