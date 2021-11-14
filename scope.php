<!DOCTYPE html>
<html>
<head>
	<title>scope | page</title>
</head>
<body>


<?php

/* 

Super Globals
$GLOBALS
$_GET
$_POST
$_COOKIE
$_SESSION

 */

$x = 90;

function callNumber( ){
	$y = 9;
	echo $GLOBALS['x'];
}

callNumber( );


?>


</body>
</html>