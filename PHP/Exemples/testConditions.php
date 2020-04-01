<?php
/*
==  Est égal à (dans le sens: "SI c'est égal à")
>   Est supérieur à
<   Est inférieur à
>=  Est supérieur ou égal à
<=  Est inférieur ou égal à
!=  Est différent de
*/

$age = 8;

if ($age <= 12)     // SI l'âge est supérieur ou égal a douze
{
    echo "Salut, jeune marmot!";
    $autorisation_entrer = "Certes";
}
else                // SINON
{
    echo "Ceci est un site pour enfants innocents. Vous n'etes ni l'un, ni l'autre. Vous ne passerez pas!";
    $autorisation_entrer = "NON!";
}

echo "Avez-vous l'autorisation d'entrer? la réponse est: $autorisation_entrer";

//  VERSION + COMPLEXE

$autorisation_entrer = "Oui";

if ($autorisation_entrer == "Oui")  // SI on a l'autorisation d'entrer
{
    //instructions a executer si l'autorisation est valide
}
elseif ($autorisation_entrer == "Non")  // SINON SI on a pas l'autorisation d'entrer
{
    //instructions a executer si l'autorisation est invalide
}
else                                    // SINON la variable ne contiens ni OUI ni NON ont ne peut pas agir
{
    echo "Identification incorrecte. Identification inconnu, veuillez indiquez votre identification.";
}
/*
Au fait, au départ, une variable ne contient rien. Sa valeur est vide, on dit qu'elle vautNULL, c'est-à-dire rien du tout.
Pour vérifier si la variable est vide, vous pouvez taper :
    if ($variable == NULL)…
*/
//BOOLEENS
$autorisation_entrer = true;

if ($autorisation_entrer == true)
{
    echo "Bienvenue, humble mortel.";
}
elseif ($autorisation_entrer == false)
{
    echo "Vous n'êtes pas digne.";
}
// OU (simplifié)
$autorisation_entrer = true;

if ($autorisation_entrer)
{
    echo "Bienvenue petit nouveau. :o)";
}
else
{
    echo "T'as pas le droit d'entrer !";
}
//

?>

