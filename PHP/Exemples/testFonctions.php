<?php

$phrase = 'Cogito ergo sum';
$phraseComte = 'dans un pays si lointain, et imperceptible que les flots du temps ne pouvais l\'atteindre et toussa toussa cette histoire est inutile, et de toute facon, elle ne sera jamais mienne, j\'aurais beau lui offrir le monde et bruler la galaxie en son nom, elle continuera a voler loin, trop loin de moi. Bon, je pense que c\'est assez long comme ca, et ce n\'est pas le bon endroit, ni le bon moment, pour conter cette histoire. De toutes facon personne ne liras jamais ca! Mais au cas ou, pardon! Cependant, cela m\'aura permis de constater que la commande str_shuffle n\'aime guere les accent sur les lettres et les cedilles des c.';


$nombreDeCaracteres = strlen($phrase);
$phraseMelangee = str_shuffle($phraseComte);

echo 'il y a ' . $nombreDeCaracteres . ' caractères dans cette phrase.';
echo '<br /><br />';
echo 'Il était une fois, ' . $phraseMelangee . '<br />';
//OU
echo '<br />';
echo str_shuffle($phraseComte);
//OU
echo '<br /><br />';
echo str_shuffle('MILLE MILLIONS DE MILLE SABORD !!!');
//
echo date('m');
// créee ses propres fonctions:
//-------------------------->
//crée/déclarer la fonction
function sayHi($nom)
{
    echo '<p>Bonjour ' . $nom . '</p>';
}
//invoquer/appeler/executer la fonction
sayHi('Marie'); 
sayHi('Marine');
sayHi('Marise');

//  parametres d'une fonction

//  Appeler une fonction
//calculCube();
//fonctionImaginaire(17, 'Vert', true, 41.7);

/* 
    Il y a deux types de fonctions :

    celles qui ne retournent aucune valeur (ça ne les empêche pas d'effectuer des actions) ;

    celles qui retournent une valeur.
*/

//$volume = calculCube(4);
echo '<br />';
/*
Bon à savoir : comme on l'a vu, il est possible d'envoyer en entrée plusieurs paramètres à une fonction ; en revanche cette dernière ne peut retourner qu'une seule valeur. Il existe un moyen de contourner cette limitation en combinant des variables au sein d'un tableau de variables (appelé array)
*/
/*
Voici un petit aperçu des fonctions qui existent pour vous mettre l'eau à la bouche :

    Une fonction qui permet de rechercher et de remplacer des mots dans une variable.

    Une fonction qui envoie un fichier sur un serveur.

    Une fonction qui permet de créer des images miniatures (aussi appeléesthumbnails).

    Une fonction qui envoie un mail avec PHP (très pratique pour faire une newsletter !).

    Une fonction qui permet de modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc.

    Une fonction qui crypte des mots de passe.

    Une fonction qui renvoie l'heure, la date…

    Etc.
    */
    // strlen: Longueur(length) d'une chaîne
$phraseCryptique = 'Il y a fort longtemps, sous le regne de Xiclitchli...Les Aymaras vivais en paix, a Tiahuanaco, jusqu\'au jour ou apparu un homme blond, qui portait un masque de metal, et détenait la foudre des dieux. Le disque du Soleil.';
$longueur = strlen($phraseCryptique);

echo 'La phrase ci-dessous comporte ' . $longueur . 'caractères:<br />' . $phraseCryptique;

//  str_replace: Seek and replace
//
echo '<br /><br />';
//
/*
On a besoin d'indiquer trois paramètres :

    la chaîne qu'on recherche (ici, les « b » (on aurait pu rechercher un mot aussi)) ;

    la chaîne qu'on veut mettre à la place (ici, on met des « y » à la place des « b ») ;

    la chaîne dans laquelle on doit faire la recherche.
*/
$ma_variable = str_replace('b', 'y', 'bim bam boum');

echo $ma_variable;

//  str_shuffle: melanger les lettres
//
echo '<br /><br />';
//
$chaine = 'Je l\'aimais et pas pour la facon dont elle dansait avec les anges, mais je l\'aimais pour la facon dont l\'unique entente de son nom pouvait faire taire mes demons.';
$chaine = str_shuffle($chaine);

echo $chaine;

//  strtolower: écrire en minuscules
//
echo '<br /><br />';
//
$chaineCrie = 'COMMENT CA JE SUIS EN COLERE ???'; 
$chaineCrie = strtolower($chaineCrie);

echo $chaineCrie;
// À noter qu'il existe strtoupper qui fait la même chose en sens inverse : minuscules → majuscules.

// Récuperer la  date (c'est la fonction... date)
/*
Paramètre   Description
H           Heure
i           Minute
d           Jour
m           Mois
Y           Année

Attention ! Respectez les majuscules/minuscules, c'est important !
*/
//
echo '<br /><br />';
//
$annee = date('Y');
echo 'Nous sommes en l\'an ' . $annee;
//
echo '<br /><br />';    //Date complete & heure sans heurt (normalement)
//
//Enregistrement des informations des dates dans des variables
$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

//Affichage des informations (date & heure!)
echo 'Bonjour !Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure . 'h' . $minute;

//Cree ses propres fonctions
/*
Quand écrire une fonction ? En général, si vous effectuez des opérations un peu complexes que vous pensez avoir besoin de refaire régulièrement, il est conseillé de créer une fonction.
*/
/*
Nous allons découvrir la création de fonctions à travers deux exemples :

    l'affichage d'un message de bienvenue en fonction du nom ;

    le calcul du volume d'un cône.
*/
//
echo '<br /><br />';
//
//                  PREMIER EXEMPLE
$nom = 'Sandra';
echo 'Bonjour, ' . $nom . ' !<br />';

$nom = 'Magdalena';
echo 'Bonjour, ' . $nom . ' !<br />';

$nom = 'Dio';
echo 'Bonjour, ' . $nom . ' !<br />';
//
echo '<br />';              //  Avec la fonction:
//
function DireBonjour($nom)
{
    echo 'Bonjour, ' . $nom . ' !<br />';
}
DireBonjour('Alpha');
DireBonjour('Wau/Digamma');
DireBonjour('Stigma');
DireBonjour('Hêta');
DireBonjour('San');
DireBonjour('Cho');
DireBonjour('Koppa');
DireBonjour('Sampi');
DireBonjour('Omega');
/*
Vous avez peut-être remarqué que cette ligne est la seule à ne pas se terminer par un point-virgule. C'est normal, il ne s'agit pas d'une instruction mais juste d'une « carte d'identité » de la fonction (son nom, ses paramètres…).
*/
echo '<br />';
//                  DEUXIEME EXEMPLE
//calculer le volume d'un cone  rayon^2 × π × hauteur × 1|3
$volume = 5 * 5 *3.14 * 4 * (1/3);
echo 'Le volume du cône de rayon 5 er de hauteur 2 est: ' . $volume . ' cm<sup>3</sup><br />';

// Calcul du volume d'un cône de rayon 3 et de hauteur 4
$volume = 3 * 3 * 3.14 * 4 * (1/3);
echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';

// Ci-dessous, la fonction qui calcule le volume du cône
function VolumeCone($rayon, $hauteur)
{
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);    // calcul du volume
    return $volume;                                         // indique la valeur a renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume . '<br />';
//          EN RESUME
/*    Les fonctions sont des blocs de code qui exécutent des instructions en fonction de certains paramètres.

    Les fonctions ont généralement une entrée et une sortie. Par exemple, si on donne la valeur 4 à la fonction de calcul du cube, celle-ci renvoie 64 en sortie.

    PHP propose des centaines et des centaines de fonctions prêtes à l'emploi pour tous types de tâches : envoyer un e-mail, récupérer l'heure, crypter des mots de passe, etc.

    Si PHP ne propose pas la fonction dont on a besoin, il est possible de la créer avec le mot-cléfunction.
*/
?>