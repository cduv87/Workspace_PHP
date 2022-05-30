<?php

session_start();

if (isset($_POST["op"]) && isset($_POST["op1"]) && isset($_POST["op2"])) {

    $result = 0;

    if ($_POST["op"] == "+") $result = $_POST["op1"] + $_POST["op2"];
    if ($_POST["op"] == "*") $result = $_POST["op1"] * $_POST["op2"];

    $_SESSION["result"] = $result;
    $_SESSION["op1"] = $_POST["op1"];
    $_SESSION["op2"] = $_POST["op2"];
    $_SESSION["op"] = $_POST["op"];

    header("Location:afficher.php");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Session</title>
</head>

<body>
    <h1>calculatrice</h1>
    <form action="" method="post">
        <div>
            <label for="op1">Opérande 1</label>
            <input type="number" name="op1" id="">
        </div>
        <div>
            <label for="">Opérateur</label>
            <select name="op" id="">
                <option>*</option>
                <option>+</option>
            </select>
        </div>
        <div>
            <label for="op2">Opérande 2</label>
            <input type="number" name="op2" id="">
        </div>
        <div>
            <button type="submit">calculer</button>
        </div>
    </form>
</body>

</html>