<?php 
///EXERCICE1///////////////////////////////////////////////////////////
// Créer une variable age et l'initialiser avec une valeur.
// Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.
//  Dans le cas contraire, afficher Vous êtes mineur.
$age = 30;

if ($age>=18) {
    echo "Vous êtes majeur !";
}else
echo "vous êtes mineur !";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Age = <?= $age ?> </h1>

</body>
</html>