<?php

$text1 = 'foo';


$text2 = $text1 . ' bar';

echo $text1 . "<br>\n";
echo $text2 . "<br>\n";

$temperature = 10.5; 

// interpolation de la variable $température
// accolade permet de mettre une limite à la variable on peut la coller à du texte
$report = "La température est de {$temperature}°C";
echo $report . "<br>\n";

echo str_replace('.', ',', $report . "<br>\n");