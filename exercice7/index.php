<?php 
// EXERCICE7 /////////////////////////////////////////////////////////////////
// Traduire ce code avec des if et des else :
//  <?php
//   echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
$isOk = false;

// if ($isOk === false) {
//     $printable = "c\'est pas bon !!!";
// } else {
//       $printable = "c\'est ok !!";
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
    
<?php if ($isOk === false) { ?>
<h2>c\'est pas bon !!!</h2>
<?php } else { ?>
<h2>c\'est ok !!</h2>
<?php } ?>

</body>
</html>