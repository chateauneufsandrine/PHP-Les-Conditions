<?php
// EXERCICE5 /////////////////////////////////////:
// Traduire ce code avec des if et des else :
// <?php
//   echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
$gender = "Homme";

// if ($gender === "Homme") {
// $printable = "C\'est un développeur !!!";
// } else {
// $printable = "C\'est une développeuse !!!";
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

    <?php if ($gender === "Homme") { ?>
        <h2>C\'est un développeur !!!</h2>
    <?php } else { ?>
        <h2>C\'est une développeuse !!!</h2>
    <?php } ?>



</body>

</html>