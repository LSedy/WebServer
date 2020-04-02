<?php
/*
$prenoms[0] = 'Mathieu';
$prenoms[1] = 'Marine';
$prenoms[2] = 'Laurent';

$prenoms = array('Mathieu', 'Laurent', 'Marine');

echo $prenoms[1];

//afficher/representer le contenu d'un tableau (pour débugguer) en temps normal on ne fait jamais de print_r dans notre code
echo print_r($prenoms);

//tableau associatif
$personne = array('nom' => 'Mymos', 'prenom' => 'Mathieu', 'age' => 97);
 
//afficher un tableau case par case
$noms = array('Math', 'Marin', 'Lauren');
$personne = array('nom' => 'Myms', 'prenom' => 'Math', 'age' => 533);

for ($numero = 0 ; $numero < 3 ; $numero++)
{
    echo '<p>' . $noms[$numero] . '</p>';
}

// boucle specifique aux tableaux: FOREACH
foreach ($personne as $libelle => $detail)
{
    echo '<p>' . $noms[$numero] . '</p>';
    echo '<p>' . $libelle . ' vaut ' . $detail . '</p>';
}
*/
/*
Ici, nous allons voir qu'il est possible d'enregistrer de nombreuses informations dans une seule variable grâce aux tableaux. On en distingue deux types :
-les tableaux numérotés ;
-les tableaux associatifs.
*/


//TABLEAU NUMEROTE
//la fonction array permet de créer un array(tableau...) soit aligné comme ceci
//$prenoms = array ('Nikolai', 'Vladimir', 'Sergei', 'Vasili', 'Joseph')
//soit case par case
//$prenoms[0] = 'Nikolai';
//$prenoms[1] = 'Vladimir';
//$prenoms[2] = 'Sergei';
//OU
$prenoms[] = 'Nikolai '; //créera $prenoms[0]
$prenoms[] = 'Vladimir '; //créera $prenoms[1]
$prenoms[] = 'Sergei '; //créera $prenoms[2]

echo $prenoms[1];

//TABLEAU ASSOCIATIF
//on crée notre array $coordonnees
$coordonnees = array(
    'prenom' => 'Nikolai',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradigme',
    'ville' => 'Carcosa');
/*
Vous remarquez qu'on écrit une flèche (=>) pour dire « associé à ». Par exemple, on dit « ville » associée à « Carcosa ».
*/
//il est aussi possible de l'afficher case par case comme ceci
/*
$coordonnees['prenom'] = 'Nikolai';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradigme';
$coordonnees['ville'] = 'Carcosa';
*/
//afficher un tableau associatif
echo $coordonnees['ville'];

/*
Quand utiliser un array numéroté et quand utiliser un array associatif ?
-Les arrays numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque élément du tableau contiendra alors un prénom.
-Les arrays associatifs permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…
*/
//parcourir un tableau
/*
Pour cela, trois moyen sont utilisés:
-boucle FOR
-boucle FOREACH
-fonction PRINT_R utilisée principaleement pour le debogage
*/
//on crée notre array prenoms
$prenoms = array ('Nikolai', 'Vladimir', 'Sergei', 'Vasili', 'Joseph');
echo '<br />', '<br />';
// Puis on fait une boucle pour tout afficher:
for ($numero = 0 ; $numero < 5 ; $numero++)
{
    echo $prenoms[$numero] . '<br />';  // affichera $prenoms[0], $prenoms[1] etc.
}
//
echo '<br />';
//
foreach ($prenoms as $element)
{
    echo $element . '<br />';   // affichera $prenoms[0, $prenoms[1] etc.
}
//
echo '<br />';
//  L'avantage de foreach est qu'il permet aussi de parcourir les tableaux associatifs.
$coordonnees = array (
    'prenom' => 'Nikolai',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradigme',
    'ville' => 'Carcosa');

foreach ($coordonnees as $element)
{
    echo $element . '<br />';
}  
/*On met donc entre parenthèses :

    d'abord le nom de l'array (ici$coordonnees) ;

    ensuite le mot-cléas(qui signifie quelque chose comme « en tant que ») ;

    enfin, le nom d'une variable que vous choisissez et qui va contenir tour à tour chacun des éléments de l'array (ici$element).
*/  
//Toutefois, avec cet exemple, on ne récupère que la valeur. Or, on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrireforeachcomme ceci :
foreach ($coordonnees as $cle => $element);
//
echo '<br />';
//
$coordonnees = array (
    'prenom' => 'Nicolaï',
    'nom' => 'Kalinin',
    'adresse' => '3 Rue du Paradigme',
    'ville' => 'Carcosa');

echo '<pre>';
print_r ($coordonnees);
echo '</pre>';

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
/*  Rechercher dans un tableau
Nous allons maintenant faire des recherches dans des arrays. Cela vous sera parfois très utile pour savoir si votre array contient ou non certaines informations.
Nous allons voir trois types de recherches, basées sur des fonctions PHP :

    array_key_exists : pour vérifier si une clé existe dans l'array ;

    in_array : pour vérifier si une valeur existe dans l'array ;

    array_search : pour récupérer la clé d'une valeur dans l'array.
*/
//array_key_exists('cle', $array);
//la fonction renvoie un booleen, c'est a dire "true" si la clé est dans l'array, et f alse si la clef n'y est pas. ça nous permet de faire un test facilement avevec un if:
//
echo '<br />';
//
    if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées!';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays"se trouve dans les coordonnées!';
}
//  Verifier su une valeur existe dans l'array: in_array
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

//
echo '<br /> <br />';
//

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits!';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits!';
}
//  On ne voit que le message pour la cerise, tout simplement parce que in_arraya renvoyétruepour « Cerise » etfalsepour « Myrtille ».

//  Récupérer la clé d'une valeur dans l'array :array_search
/*
Voici ce que renvoie la fonction :

    si elle a trouvé la valeur,array_searchrenvoie la clé correspondante (c'est-à-dire le numéro si c'est un array numéroté, ou le nom de la clé si c'est un array associatif);

    si elle n'a pas trouvé la valeur,array_searchrenvoiefalse.
*/
//
echo '<br /> <br />';
//

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position . '<br />';

/*
    Les tableaux (ou arrays) sont des variables représentées sous forme de tableau. Elles peuvent donc stocker de grandes quantités d'informations.

    Chaque ligne d'un tableau possède une clé (qui permet de l'identifier) et une valeur.

    Il existe deux types de tableaux :

        les tableaux numérotés : chaque ligne est identifiée par une clé numérotée. La numérotation commence à partir de 0 ;

        les tableaux associatifs : chaque ligne est identifiée par une courte chaîne de texte.

    Pour parcourir un tableau, on peut utiliser la boucleforque l'on connaît déjà, mais aussi la boucleforeachqui est dédiée aux tableaux.

    Il existe de nombreuses fonctions permettant de travailler sur des tableaux et notamment d'effectuer des recherches.
    */
?>