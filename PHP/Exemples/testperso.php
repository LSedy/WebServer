<?php

$ageDuVisiteur = 20;  //variable

//echo $ageDuVisiteur; //afficher la variable

//echo "Le visiteur a $ageDuVisiteur ans.";
//ou
echo 'Le visiteur a ' . $ageDuVisiteur . ' ans'; 

$message = 'bonjour'; //variable affiche un message


$estCeVrai = false; // variable booleen

//attention a penser a mettre un antislash(\) pour éviter la terrible PARSE ERROR
$variable = "Mon \"nom\" est Mateo21";
$variable = 'Je m\'appelle Mateo21';
// en revanche, en inversant guillement simple et double, ça fonctionne correctement
$variable = 'Mon "nom" est Mateo21';
$variable = "Je m'appelle Mateo21";
//  variable NULL
$no_name = NULL;
//nombre & calculs
$nombre = 2 + 4; // $nombre prend la valeur 6
$nombre = 5 - 1; // $nombre prend la valeur 4
$nombre = 3 * 5; // $nombre prend la valeur 15
$nombre = 10 / 2; // $nombre prend la valeur 5

// Allez on rajoute un peu de difficulté
$nombre = 3 * 5 + 1; // $nombre prend la valeur 16
$nombre = (1 + 2) * 2; // $nombre prend la valeur 6
//
$nombre = 10;
$resultat = ($nombre + 5) * $nombre; // $resultat prend la valeur 150
// modulo
$nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste
$nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1
//


/*    
D'abord, on écrit le symbole « dollar » ($) : il précède toujours le nom d'une variable. C'est comme un signe de reconnaissance si vous préférez : ça permet de dire à PHP « J'utilise une variable ». Vous reconnaîtrez toujours qu'il y a une variable par la présence du symbole « dollar » ($).

    Ensuite, il y a le signe « égal » (=) : celui-là c'est logique, c'est pour dire que $age_du_visiteur est égal à…

    À la suite, il y a la valeur de la variable, ici 17.

    Enfin, il y a l'incontournable point-virgule (;) qui permet de terminer l'instruction.
*/
?>