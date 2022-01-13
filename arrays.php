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

// enleve le premier element

$fruitA = array_shift($fruits);

dump($fruitA);
dump($fruits);

// enleve le dernier element

$fruitF = array_pop($fruits);

dump($fruitF);
dump($fruits);

//unset supprime l'index avec l'element tandis que array_splice réindexe les elements du tableau
// cerize est supp et est remplacé par coing
array_splice($fruits, 1, 1, ['coing']);
dump($fruits);




// @warning la fonction unset ne reindexe pas le tableau
unset($fruits[2]);
dump($fruits);

$vegetables = [
    'artichaut',
    'betterave', 
    'carotte'
];


// concaténation de deux tableaux
$bigList = array_merge($fruits, $vegetables);

dump($bigList);

if(!in_array('ananas', $bigList)){
    echo "il n'y a pas d'ananas dans la liste<br>";
}

if(in_array('carotte', $bigList)){
    echo "il y a des carottes dans la liste";
}

$data = [
    'nom' => 'Lorem',
    'prenom' => 'Toto',
    'age' => '12',
    'email' => 'toto.lorem@example.com',
    'validation' => true
    
];

dump($data);

// accès en lecture
echo "Email: {$data['email']}";

// accès en écriture
$data['age'] = 12;

// ajout d'un couple clé valeur
$data['spammer'] = true;

// supression d'un couple clé valeur
unset($data['spammer']);