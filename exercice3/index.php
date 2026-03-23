<?php
// EXERCICE3//////////////////////////////////////////////////////////////////////////////
// Créer deux variables age et gender. La variable gender peut prendre comme valeur :

// Homme
// Femme
// En fonction de l'âge et du genre afficher la phrase correspondante :

// Vous êtes un homme et vous êtes majeur
// Vous êtes un homme et vous êtes mineur
// Vous êtes une femme et vous êtes majeur
// Vous êtes une femme et vous êtes mineur
// Gérer tous les cas.
$age = 12;
$gender = "Homme";

if ($age >= 18 && $gender === "Femme") {
    $printable = "Vous êtes une femme et vous êtes majeur";
}
if ($age >= 18 && $gender === "Homme") {
    $printable = "Vous êtes un homme et vous êtes majeur";
}
if ($age <= 18 && $gender === "Femme") {
    $printable = "Vous êtes une femme et vous êtes mineur";
}
if ($age <= 18 && $gender === "Homme") {
    $printable = "Vous êtes un homme et vous êtes mineur";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <?php if ($age >= 18 && $gender === "Femme") {?>
       <p>Vous êtes une femme et vous êtes majeur</p>
  <?php } ?>
<?php if ($age >= 18 && $gender === "Homme") { ?>
<p>Vous êtes un homme et vous êtes majeur</p>
<?php } ?>
<?php if ($age <= 18 && $gender === "Femme") { ?>
<p>Vous êtes une femme et vous êtes mineur</p>
<?php } ?>
<?php if ($age <= 18 && $gender === "Homme") { ?>
<p>Vous êtes un homme et vous êtes mineur</p>
<?php } ?>
  
</body>

</html>