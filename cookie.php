<?php


/*

cookie
session

*/

// setcookie( "name", "value", "expire", "directory", "sudomain", "secure" );

setcookie('user', 'feyswal', time()+3600, '/', '', false );

echo "<a href=\" controller/cookieViewer.php \">view cookie</a>";


?>