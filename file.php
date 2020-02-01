<?php

$file =fopen('baza.php','r');
$data =fread($file,filesize('baza.php'));
var_dump($data);
fclose($file);

///

$get = file_get_contents('test.txt');

/// first file name and second texts of put to do
file_put_contents('text.txt','Hello world');

?>