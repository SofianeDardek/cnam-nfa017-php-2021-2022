<?php

for($i = 0; $i < 10; $i++){
    echo "$i<br>\n";
}

echo '<br>';

$fruits = ['ananas', 'banane', 'cerise'];

for($i = 0; $i < count($fruits); $i++){
    echo "$fruits[$i]<br>\n";
}

echo '<br>';

foreach($fruits as $key => $fruit){
    echo "$key : $fruit";
}

echo '<br>';

