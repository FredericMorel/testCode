<?php

/* 
**************   liste des fonctions php ***********************

readline()
strtolower()
strrev()

Exercie faire un algo dire si le mot est un palindrome ou pas.

*/
# region palindrome
/**
 * palindrome
 * 
 * @return void
 */
function palindrome()
{
    $mot = readline('veuillez entrer un mot : '); // $mot = Kayak
    $reverse = strtolower(strrev($mot)); // $reverse = kayak $mot= Kayak
    if (strtolower($mot) === $reverse) {
        echo 'Le mot ' . $mot . ' est un palindrome';
    }else {
        # code...
        echo 'Le mot ' . $mot . ' n\'est pas un palindrome';
    }
   
}
palindrome();
#  endregion

# region somme d'un tableau
$note=array(15, 18, 14, 16);
echo '<br> la moyenne des notes est de : ' .count($note);

#endregion

