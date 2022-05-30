<?php

$regex = "/^(\d{1,2})\-(\d{1,2})\-(\d{4})$/";
$chaine = "30-03-2022";

$is_match = preg_match($regex, $chaine, $resultat);

var_dump($is_match);

if($is_match) {

echo "Jour : $resultat[1] <br>";
echo "Jour : $resultat[2] <br>";
echo "Jour : $resultat[3] <br>";

}

$motif = "/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/";
$chaineAvant = "30/03/2022";
$chaineApres = preg_replace($motif, '$3-$2-$1', $chaineAvant);
var_dump($chaineApres);