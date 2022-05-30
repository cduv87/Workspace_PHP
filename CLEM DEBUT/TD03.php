<?php 
$var1 = 18;
$var2 = "Formation Python";
var_dump($var1);
var_dump($var2);
unset($var2);
if(isset($var2)) {
    echo "yes";
}
if(!empty($var1)) {
    echo "<h1> $var1 </h1>";
}

$var3 = true;
var_dump($var3);
