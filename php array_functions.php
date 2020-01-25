<?php
$a=[1,2,3,4,5,6,7];
$x="I ,am ,danger ,because ,I ,am ,Jamshid";
$x1=explode(' ,',$x);
// print_r($x1);
$x2=implode(" ",$x1);
// print_r($x2);

echo array_search(5,$a,false);

$b=[
    'one'=>"A",
    'two'=>"B",
    'three'=>"C",
    'four'=>"D",
    'five'=>"E",
    'six'=>"F",
    "00",11,22,33
];
$c=[
    'a'=>"aa",
    'b'=>"bb",
    'c'=>"cc",
    'o'=>"oo",
    'd'=>"dd",
    'e'=>"ee",
    "000",111,222,333
];
// echo (array_rand($b));
?>