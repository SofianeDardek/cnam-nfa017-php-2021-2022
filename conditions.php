<?php
// 1 = true
// 0 = false 
require __DIR__.'/vendor/autoload.php';

$isWaterOff = (bool) random_int(0, 1);
$isGasOff = (bool) random_int(0, 1);

dump($isWaterOff);
dump($isGasOff);

if($isWaterOff && $isGasOff){
    echo 'On peut partir en WE!<br>';
} else {
    echo 'On ne peut pas partir en WE!<br>';

    if(!$isWaterOff){
        echo 'il faut couper l\'eau <br>';
    }

    if(!$isGasOff){
        echo 'il faut couper le gaz <br>';
    }
}


$hasPaymentCard = (bool) random_int(0,1);
$hasCash = (bool) random_int(0,1);

dump($hasPaymentCard);
dump($hasCash);

if($hasPaymentCard || $hasCash){
    echo "Vous pouvez partir faire les courses<br>\n";

    if($hasPaymentCard == false){
        echo "il manque la carte de paiement<br>\n";
    }

    if($hasCash == false){
        echo "il manque le liquide<br>\n";
    }
} else {
    echo "Vous ne pouvez pas faire la course<br>\n";
    echo " Vous n'avez aucun moyen de paiement<br>\n";

}


$stock = random_int(0, 10);

dump($stock);

if($stock == 0 ){
    echo "rupture de stock<br>\n";
} elseif($stock == 1){
    echo "il reste $stock piéce<br>\n";
} elseif($stock <=3){
    echo "il reste $stock pièces<br>\n";
} else {
    echo "stock disponible";
}