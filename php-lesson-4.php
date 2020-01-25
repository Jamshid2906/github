<?php
$x="Hello world";
echo strrev($x);
echo "<br>";
// Replace one word with other word
echo str_replace("world","dunyo",$x);
echo "<br>";
// strpos - string position : define place of word or letter
echo  strpos($x,"world");
echo "<br>";
// define - replace this value with some variable
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
// Agar true yozilganda, o'zgaruvchining katta yoki kichik harflardan qilib foydalansa bo'ladi.
// when if "true" write,  
define("GREETING", "Welcome to W3Schools.com!", true);
// echo rejnkad;
echo grEeting;
?>