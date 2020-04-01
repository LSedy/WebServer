<?php

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
//
?>