<?php

require __DIR__ . '/vendor/autoload.php';

$emptyArray = [];

$fruits = [
    'annanas',
    'banane',
    'cerise'
];

echo "fruit n°1 : {$fruits[0]}<br>";
echo "fruit n°2 : {$fruits[1]}<br>";
echo "fruit n°3 : {$fruits[2]}<br>";

$size = count($fruits);
echo " il y a ". $size . " fruits";


$fruits[] = 'datte';
$fruits[] = 'fraise';

dump($fruits);
$size = count($fruits);
echo " il y a ". $size . " fruits";

// enlver le premier element

$fruitA = array_shift($fruits);

dump($fruitA);
dump($fruits);

// enlever le dernier elements

$fruitF = array_pop($fruits);

dump($fruitF);
dump($fruits);

//unset supprime l'index avec l'element tandis que array_splice réindexe les elements du tableau
// cerize est supp et est remplacé par coing
array_splice($fruits, 1, 1, ['coing']);
dump($fruits);


// enlver un element 

// @warbing la fonction unset ne reindexe pas le tbleu
unset($fruits[2]);
dump($fruits);

$vegetables = [
    'artichaut',
    'betterave', 
    'carotte'
];


// concaténation de deux tableau 
$bigList = array_merge($fruits, $vegetables);

dump($bigList);

if(!in_array('ananas', $bigList)){
    echo "il n'y a pas d'ananas dans la liste<br>";
}

if(in_array('carotte', $bigList)){
    echo "il y a des carottes dans la liste";
}