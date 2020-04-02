<?php

$phrase = 'Cogito ergo sum';
$phraseComte = 'dans un pays si lointain, et imperceptible que les flots du temps ne pouvais l\'atteindre et toussa toussa cette histoire est inutile, et de toute facon, elle ne sera jamais mienne, j\'aurais beau lui offrir le monde et bruler la galaxie en son nom, elle continuera a voler loin, trop loin de moi. Bon, je pense que c\'est assez long comme ca, et ce n\'est pas le bon endroit, ni le bon moment, pour conter cette histoire. Pardon! Par contre, cela m\'aura permis de constater que la commande str_shuffle n\'aime guere les accent sur les lettres et les cedilles des c.';


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
echo str_shuffle('MILLE MILLIONS DE MILLE SABORD !!!')





?>