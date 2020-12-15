<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Exercices Débugger</h1>
    <h2> Resultat Exercice 1 =  
    <?php
        include 'exercice_1.php';
        echo ("Remplacer le mot retour pour return. Après changement: le resultat est= 1 si \$x est pair, sinon rien ". "<br> Test: ".displayPair(10));
    ?>

    </h2><br>
    <h2> Resultat Exercice 2 =  
    <?php
        include 'exercice_2.php';
        toutVaBien(true);
    ?>
    </h2>

    <h2> Resultat Exercice 3 =  
    <?php
        include 'exercice_3.php';
        echo ("somme: ".somme());
    ?>
    </h2>
</body>
</html>