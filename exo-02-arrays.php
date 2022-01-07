<?php

require __DIR__.'/vendor/autoload.php';

/*
Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.

Exemple de nom de cartes : '1 pique', '3 carreau', '11 treffle', etc.

Rappel des valeurs de certaines cartes :

- as : 1
- valet : 11
- dame : 12
- roi : 13

Stockez la taille du tableau dans une variable.

Tirez deux nombres au hasard, compris entre 1 et la taille du tableau inclus, en utilisant la fonction random_int().
Stockez ces nombres dans un tableau.

Si le même nombre a été tiré deux fois, affichez un message qui dit que le même nombre a été tiré, puis arrêtez le programme avec la fonction exit().

À l'aide de ces nombres, retirer deux cartes de la main.

Affichez les nombres tirés au hasard et le nom des cartes qui ont été retirées.

Comparez les valeurs numériques des cartes et affichez quelle carte a une valeur supérieur ou s'il y a égalité.
Attention, par convention la carte "as" (valeur 1) est la plus élevée.
*/

$cartes = [
    '1 coeur',
    '3 carreau',
    '4 treffle',
    '3 coeur',
    '5 pique'
];


$tailleTab = count($cartes);

$tirage1 = random_int(1, $tailleTab);
$tirage2 = random_int(1, $tailleTab);

$tirages = [];

array_push($tirages, $tirage1, $tirage2);

if($tirage1 == $tirage2){ echo 'Vous avez tiré le même chiffre'; exit();}

$carte1 = array_splice($cartes, $tirage1-1, 1);
$carte2 = array_splice($cartes, $tirage1-1, 1);

$carte1 = $carte1[0];
$carte2 = $carte2[0];
echo "Vous avez tiré la carte $carte1 pour la premiere carte <br>";
echo "Vous avez tiré la carte $carte2 pour la deuxieme carte";


dump($carte1);
dump($carte2);

$valCarte1 = (int) $carte1[0];
$valCarte2 = (int) $carte2[0];

if($valCarte1 == $valCarte2){
    echo "la carte $carte1 et $carte2 sont équivalentes";
} elseif($valCarte1 > $valCarte2 || $valCarte1 == 1){
    echo "La carte $carte1 est supérieur à la carte $carte2";
} elseif($valCarte2 < $valCarte1 || $valCarte2 == 1){
    echo "La carte $carte1 est supérieur à la carte $carte2";
}



dump($valCarte1);
dump($valCarte2);



dump($tirages);
