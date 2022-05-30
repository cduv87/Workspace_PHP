<?php
$xml = simplexml_load_file('test.xml'); 
$hote = $xml->host;
$username = $xml->username;
$pwd = $xml->password;
$dbname = $xml->dbname;
$db = new PDO("mysql:host=$hote;dbname=$dbname", $username, $pwd);

$sql = "SELECT * FROM article";
$stmt = $db->prepare($sql);
$stmt->execute();
//$stmt = $db->query($sql); //quand c'est pas prepared
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC); // tableau
// $one = $stmt->fetch(PDO::FETCH_ASSOC); //juste une ligne
var_dump($arr);
