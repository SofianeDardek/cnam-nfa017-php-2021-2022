<?php

/*
Créez toutes les cartes de l'as au roi de cœur en utilisant une boucle for.
Le résultat doit être un tableau contenant les éléments suivants : ['1 cœur', '2 cœur', '3 cœur', ..., '13 cœur']
Ensuite, utilisez une boucle foreach pour afficher tous les éléments du tableau.
*/

$cartes = [];

for($i = 1; $i <= 13; $i ++){
    $cartes[] = "$i coeur";
}

echo '<br>';

foreach($cartes as $carte){
    echo $carte . '<br>';
}