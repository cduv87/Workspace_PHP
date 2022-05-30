  
<?php 

if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');
    try{

        $hote=$xml->host;
        $username=$xml->username;
        $pwd = $xml->password;
        $dbname=$xml->dbname;
        $db = new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);// Admin
    
     
        /**
         *  insert
         */

        // $sql = "INSERT INTO article (titre,description,prix) VALUES (?,?,?)";
        // $stmt = $db->prepare($sql);
        // $stmt->bindValue(1, "Table en noyer");
        // $stmt->bindValue(2, "table centenaire usée mais solide");
        // $stmt->bindValue(3, 65);
        // $stmt->execute();

        /**
         *  update
         */

        // $sql = "UPDATE article SET titre = (?)   WHERE id = ? ";
        // $stmt = $db->prepare($sql);
        // $stmt->bindValue(1, "Table en Cerisier");
        // $stmt->bindValue(2, 3);

        // $stmt->execute();

         /**
         *  delete
         */

        // $sql = "DELETE FROM article WHERE id = ? ";
        // $stmt = $db->prepare($sql);
        // $stmt->bindValue(1, 1);
       

        // $stmt->execute();

           /**
         *  select
         */


        $sql = "SELECT * FROM article";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        

       //$stmt = $db->query($sql); //quand c'est pas prepared
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC); // tableau
        // $one = $stmt->fetch(PDO::FETCH_ASSOC); //juste une ligne


        var_dump($arr);

    }catch(PDOException $e ){
        echo "Not Connected";
    }    
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
}