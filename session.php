<?php

session_start();

$name = 'feyswal';

$_SESSION['user'] = $name;

echo "<a href=\" controller/viewSession.php \">view session</a>";

?>