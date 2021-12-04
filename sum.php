<?php
require_once("difference.php");

function sum($a , $b){
    $c = $a + $b;
    return (int)$c;
}

$d = sum(1,2);
echo $d;

$differ = diff(2,6);
echo $differ;

$a = 1;
$b = 2;

 ?>