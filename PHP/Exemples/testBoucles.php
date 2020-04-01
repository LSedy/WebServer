<?php
//boucle while
$repetitions = 0;

while ($repetitions < 13)
{
    echo '<p>Je ne dois pas  copier sur mon voisin ' . $repetitions . ' fois.</p>';
    $repetitions = $repetitions + 1;
    //OU
    $repetitions++;
}
//boucle for
for ($repetitions = 0 ; $repetitions < 20 ; $repetitions++)

//while
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprend le PHP. <br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}
/*
Il faut TOUJOURS s'assurer que la condition sera fausse au moins une fois. Si elle ne l'est jamais, alors la boucle s'exécutera à l'infini !
PHP refuse normalement de travailler plus d'une quinzaine de secondes. Il s'arrêtera tout seul s'il voit que son travail dure trop longtemps et affichera un message d'erreur.
*/
// autre exemple
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++; 
}
//for
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>
/*
La bouclewhile est plus simple et plus flexible : on peut faire tous les types de boucles avec mais on peut oublier de faire certaines étapes comme l'incrémentation de la variable.
En revanche,for est bien adapté quand on doit compter le nombre de fois que l'on répète les instructions et il permet de ne pas oublier de faire l'incrémentation pour augmenter la valeur de la variable !
*/
/*
Si vous hésitez entre les deux, il suffit simplement de vous poser la question suivante : « Est-ce que je sais d'avance combien de fois je veux que mes instructions soient répétées ? ».
Si la réponse est oui, alors la boucleforest tout indiquée. Sinon, alors il vaut mieux utiliser la bouclewhile.
*/
?>