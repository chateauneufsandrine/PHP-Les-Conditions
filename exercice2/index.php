<?php
// // EXERCICE2////////////////////////////////////////////////////////////////////////
// Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
// Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
// Bonus : L'écrire de deux manières différentes.
// 1ERE ///////////////////////////////////////////////////
$isEasy = false;
// if ($isEasy === true) {
//     $printable = "C'est facile!!";
// } else {
//     $printable = "C'est difficile!!";
// }
// 2EME////////////////////////////////////////////////////
// $isEasy = false;
// if ($isEasy) {
//     $printable = "C'est facile !!";
// } else {
//     $printable = "C'est difficile !!";
// }
///////////////////////////////////////////////////////////
// if (!$isEasy) {
//    $printable (" C'est difficile!!");
// } else {
//    $printable (" C'est facile!!");
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> <?= $isEasy ? "c'est facile !" : "c'est difficile :(" ?> </h1>


</body>

</html>