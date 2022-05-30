<?php



try{



    $hote="localhost";

    $username="root";

    $pwd="";

    $dbname="data_livre";

    $db=new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);

    echo"Connected!";

    var_dump($db->getAttribute(PDO::ATTR_SERVER_INFO));

}catch(PDOException $e){

    echo "Not connected";

}



?>