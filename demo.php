<?php
/* function palindrome()
{
    
    $mot = readline('Veuillez entrer un mot : ');
    $reverse = strtolower(strrev($mot));
    if (strtolower($mot) === $reverse) {
        echo $mot . ' C\'est une palindrome';
    } else {
        echo $mot . ' n\'est pas un palindrome';
    }
}
function calcul_moyenne($notes){
$sum = array_sum($notes);
$count = count($notes);
echo "\nvous avez " . round($sum / $count, 2) . " de moyenne";
}
palindrome();
calcul_moyenne($notes = [10,14,18,19]); */

function moy_notes($notes){
    $sum_notes=array_sum($notes);
    $nbre_element=count($notes);
    $moy=round($sum_notes/$nbre_element,2);
    return $moy;
}
$notes=[12.569,15.236548,18,16,17];



function ajout_notes($notes,$val){
    array_push($notes,$val);
    
    return $notes;
}
$val=readline('Tape ta note !');
$notes=ajout_notes($notes, $val);
$moy=moy_notes($notes);
echo 'la moyenne est de : '.$moy ;
echo 'la derniere note est : ' .$val;
print_r($notes);




// Note dans 1 tab trouver la moy faire somme toutes v fct somme et fct longueur d'un tableau
