<?php

if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');
    try{

        $hote=$xml->host;
        $username=$xml->username;
        $pwd = $xml->password;
        $dbname=$xml->dbname;
        $db = new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);// Admin

        header("Location:home.php");
      
    }catch(PDOException $e ){
        echo "Not Connected";
    }    
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
}