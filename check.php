<?php
include 'baza.php';
$x=1;
$c=0;
foreach($my_array as $kalit=>$qiymat){
    if($_POST["name$x"]==$qiymat["check"]){
        $c++;
    }
    $x++;
}
echo "Sizdagi to'g'ri javoblar soni ".$c;
?>