<?php

/*
Afficher les nombres de 0 à 9 avec une boucle for.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" lors de 
la dernière itération.
*/

for($i = 0; $i <=9; $i++){
    echo "$i<br>";
    if($i == 0)
        echo "premiere iteration <br>";

    if($i == 9)
        echo "derniere itération";
}