<?php
function palindrome()
{
    
    $mot = readline('Veuillez entrer un mot : ');
    $reverse = strtolower(strrev($mot));
    if (strtolower($mot) === $reverse) {
        echo $mot . ' C\'est une palindrome';
    } else {
        echo $mot . ' n\'est pas un palindrome';
    }
}
function calcul_moyenne(){
$notes = [10,14,18,19];
$sum = array_sum($notes);
$count = count($notes);
echo "vous avez " . round($sum / $count, 2) . " de moyenne";
}
palindrome();
calcul_moyenne();





// Note dans 1 tab trouver la moy faire somme toutes v fct somme et fct longueur d'un tableau
