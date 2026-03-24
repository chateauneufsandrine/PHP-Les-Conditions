<?php 
// EXERCICE8///////////////////////////////////////////////////////////////////////
// Traduire ce code avec des if et des else :
//    <?php
//   echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';

$isok = false;

// if ($isok) {
//   $printable = "c'est ok !!";
// } else {
//     $printable = "c'est pas bon !!!";
// }

// ?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php if ($isok) { ?>
<h2>c'est ok !!</h2>
<?php } else { ?>
<h2>c'est pas bon !!!</h2>
<?php } ?>

</body>
</html>