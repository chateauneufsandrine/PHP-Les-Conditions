<?php
// EXERCICE6///////////////////////////////////////////////////
// Traduire ce code avec des if et des else :
// <?php
//   echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
$age = 40;

// if ($age >= 18) {
//   $printable = "Tu es majeur";
// } else {
//     $printable = "Tu n'est pas majeur";
// }


// 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $age ?>
    <h2><?php $printable ?></h2>
    <?php if ($age >= 18) { ?>
        <h2>Tu es majeur</h2>
    <?php } else { ?>
        <h2>Tu n'est pas majeur</h2>
    <?php } ?>


</body>

</html>