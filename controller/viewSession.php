<?php

session_start();

 echo $_SESSION['user']."\n";

 echo "<a href=\" sessionDestroy.php \">destroy session</a>";

?>