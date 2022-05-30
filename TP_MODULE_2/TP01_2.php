
<?php
$a = "0"; 
$b = "TRUE";
$c = FALSE;
$d = ($a OR $b);
$e = ($a AND $c);
$f = ($a XOR $b);


var_dump(boolval($a));
var_dump(boolval($b));
var_dump(boolval($c));
var_dump(boolval($d));
var_dump(boolval($e));
var_dump(boolval($f));

$X = "PHP7";
var_dump($X);
$A = &$X; 
//a = php7
var_dump($A);
$Y = "7 eme version de PHP"; 
var_dump($Y);
$Z = $Y * 10;
var_dump($Z);
$X = $Y * $Y;
var_dump($X);