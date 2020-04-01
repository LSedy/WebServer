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
// ASTUCE BONUS:
/*L'astuce bonus

Avec les conditions, il y a une astuce à connaître.
Sachez que les deux codes ci-dessous donnent exactement le même résultat :*/
//1
$variable = 23;

if ($variable == 23)
{
    echo '<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !';
}
//2 ce qui est très pratique pour les texte volumineux
$variable = 23;

if ($variable == 23)
{
?>
<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !
<?php
}
?>

<?php // LE SWITCH
//Exemple SANS le switch
$note = 16;

if ($note == 0)
{
    echo "Ton niveau est équivalent au grand vide qui sépare tes oreilles";
}

elseif ($note == 5)
{
    echo "Je n'ai pas de mots pour décrire la hauteur vertigineuse de ton lamentable échec.";
}
elseif ($note == 7)
{
    echo "Si le terme lamentable avait une alégorie, tu la serais.";
}
elseif ($note == 10)
{
    echo "Tu est ni bon, ni mauvais. c'est intolérable!";
}
elseif ($note == 12)
{
    echo "C'est un resultat honorable. Quoique insufisant.";
}
elseif ($note == 16)
{
    echo "Mouais, peu mieux faire. Trop n'est jamais assez, comme on dit dans mon pays lointain.";
}
elseif ($note == 20)
{
    echo "Désolé, je n'ai rien a dire. La victoire n'exige pas explication. n'oublie juste pas que l'échec n'en admet aucune.";
}
else
{
    echo "Mhmm, je ne sais pas quoi dire face a une note comme cela...";
}
//Exemple AVEC le switch
$note = 11;

switch ($note) // on indique sur quelle variable on travaille
{
    case 0: //dans le cas ou la note ($note) vaut 0
        echo "---";
    break;
    case 5: //dans le cas ou la note vaut 5
        echo "--";
    break;
    case 7: //dans le cas ou la note vaut 7
        echo "-";
    break;
    case 10: // etc
        echo "<>";
    break;
    case 12: // etc
        echo "+";
    break;
    case 16: // etc
        echo "++";
    break;
    case 20: // etc
        echo "+++";
    break;
    
    default:
        echo "~~";
}
// Avantage : on n'a plus besoin de mettre le double égal ! Défaut : ça ne marche pas avec les autres symboles (< > <= >= !=). En clair, le switch ne peut tester que l'égalité.
// CONDITION TERNAIRES
/*Un ternaire est une condition condensée qui fait deux choses sur une seule ligne :

    on teste la valeur d'une variable dans une condition ;

    on affecte une valeur à une variable selon que la condition est vraie ou non.*/

$age = 30;

if ($age >= 18)
{
    $majeur = true;
}
else
{
    $majeur = false;
}
// On peut faire la même chose en une seule ligne grâce à une structure ternaire :
$age = 33;

$majeur = ($age <= 18) ? true : false;
// C'est un peu tordu mais ça marche.
?>

