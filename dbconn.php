<?php

$dbserver = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'phpforbeginners';

$conn = mysqli_connect( $dbserver, $dbuser, $dbpass, $dbname );

if( $conn ){
	echo "database connected";
}else{
	echo "database fail";
}

?>