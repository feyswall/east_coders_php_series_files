<?php

if ( isset( $_GET['btn']) ) {
	
$namKwanza = $_GET['namKwanza'];
$namPili = $_GET['namPili'];
$tendo = $_GET['tendo'];

	switch( $tendo ){
		case('jumlisha'):
			$jibu = $namKwanza + $namPili;
		break;

		case('toa'):
			$jibu = $namKwanza - $namPili;
		break;

		case('zidisha'):
			$jibu = $namKwanza * $namPili;
		break;

		case('gawanya'):
			$jibu = $namKwanza / $namPili;
		break;

		default:
			$jibu = 'null';

	}
		header("location: ../calc.php?ans=".$jibu."&namKwanza=".$namKwanza."&namPili=".$namPili);

}else{
	echo "go to calculator page \n";
	echo "<a href=\" ../calc.php \">calculator</a>";
}

?>