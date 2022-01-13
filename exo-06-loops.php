<?php

/*
Afficher tous les éléments du tableau $fruits avec une boucle foreach.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" lors de la dernière itération.
*/

$fruits = ['ananas', 'banane', 'cerise'];
$size = count($fruits);
$last = $size-1;


foreach($fruits as $key => $fruit){
    echo "$fruit <br>";

    if($key == 0)
        echo "premiere itération<br>";

    if($key == $last)
        echo "dernière itération";
}

// 2eme solution sans la fonction count

// $last = end($fruits);
// $first = reset($fruits);
// foreach($fruits as $fruit){
//     echo "$fruit <br>";

//     if($fruit == $first)
//         echo "premiere itération<br>";

//     if($fruit == $last)
//         echo "dernière itération";
// } 
