<?php  

$a = true;
$b = 42;
$c = 12.14;
$d = "Hello !";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$x = "PostgreSQL";
var_dump($x);
$y = "MySQL";
var_dump($y);
$z = &$x;
var_dump($z);
$x = "PHP 5";
$y = &$x;

// en gros attention au ajout de valeur par reference "= &";