<?php
// EXERCICE4//////////////////////////////////////////////////////////////////////////
// L'échelle de Richter est un outil de mesure qui permet de définir 
// la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
// Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.

// Magnitude	Phrase
// 1	Micro-séisme impossible à ressentir.
// 2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
// 3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
// 4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
// 5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
// 6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
// 7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
// 8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
// 9	Séisme capable de tout détruire sur une très vaste zone.

// Gérer tous les cas.
// Utiliser autre chose que des if else

$magnitude = 3;

// switch ($magnitude) {
//     case 1:
//         $printable = "1Micro-séisme impossible à ressentir";
//         break;

//     case 2:
//         $printable = "2Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti";
//         break;

//     case 3:
//         $printable = "3Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
//         break;

//     case 4:
//         $printable = "4Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
//         break;

//     case 5:
//         $printable = "5Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments 
//       présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
//         break;

//     case 6:
//         $printable = "6Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
//         break;

//     case 7:
//         $printable = "7Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
//         break;

//     case 8:
//         $printable = "8Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
//         break;

//     case 9:
//         $printable = "9Séisme capable de tout détruire sur une très vaste zone.";
//         break;
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

    <?php switch ($magnitude) {

        case 1: ?>
            <p>1Micro-séisme impossible à ressentir</p>
        <?php break;

        case 2: ?>

            <p>"2Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti"</p>
        <?php break;

        case 3: ?>
            <p>"3Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats"</p>
        <?php break;

        case 4: ?>
            <p>"4Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats"</p>
        <?php break;

        case 5: ?>

            <p> "5Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments
                présentants des défauts de construction. Peu de dégats sur des bâtiments modernes."</p>
        <?php break;

        case 6:  ?>

            <p>"6Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre."</p>
        <?php break;

        case 7:  ?>

            <p>"7Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance."</p>
        <?php break;

        case 8: ?>

            <p>"8Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres."</p>
        <?php break;

        case 9: ?>
            <p>"9Séisme capable de tout détruire sur une très vaste zone."</p>
            <?php break;
            ?>
    <?php } ?>





</body>

</html>