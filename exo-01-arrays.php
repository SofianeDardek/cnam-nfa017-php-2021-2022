<?php

/*
Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.

Exemple de nom de cartes : 'As pique', '3 carreau', 'Valet treffle', etc.

Tirez un nombre "n" au hasard, compris entre 1 et 5 inclus.

À l'aide de ce nombre, retirer la "n-ième" carte de la main.

Affichez le nom de la carte qui a été retirée.
*/


$cartes = [
    'As pique',
    '3 carreau',
    'Valet treffle',
    '3 coeur',
    '5 pique'
];

$nbCartes = count($cartes);

$number = random_int(0, $nbCartes-1);

echo "Vous avez tiré la carte " . "<b>n°". "$number " . $cartes[$number] . "</b>";