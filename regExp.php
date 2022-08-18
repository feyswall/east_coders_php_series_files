<?php

$string = "east coders channel";

$ans = preg_match("/[^a-zA-Z0-9 ]/", $string);

echo $ans;

?>