<?php

$peoples = array(

    "Guillou" => array(

        "Prenom" => "Antoine",
        "Ville" => "Lorient",
        "Age" => "34",
    ),

    "Peron" => array(

        "Prenom" => "Phileas",
        "Ville" => "Quimper",
        "Age" => "26",
    ),

    "Billant" => array(

        "Prenom" => "Olivier",
        "Ville" => "Brest",
        "Age" => "34",
    ),
);

echo "version PHP : <br> <br>";

foreach ($peoples as $nompeople => $caracteristiques) {

    echo "personne '" . $nompeople . "' :<br>";

    foreach ($caracteristiques as $caracteristique => $value) {

        echo "&nbsp;&nbsp;&nbsp;&nbsp;caractéristique '" . $caracteristique . "' : '" . $value . "'<br>";
    }
}

echo "<br> <br> version HTML : <br> <br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>

        <ul>
            <?php foreach ($peoples as $people => $element) : ?>
                <li><?= $people ?>
                    <ul>
                        <?php foreach ($element as $ele) : ?>
                            <li><?= $ele ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</body>

</html>