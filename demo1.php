<?php

$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Notez notre utilisation de ===.  == ne fonctionnerait pas comme attendu
// car la position de 'a' est la 0-ième (premier) caractère.
if ($pos === false) {
    echo "La chaîne '$findme' ne se trouve pas dans la chaîne '$mystring'";
} else {
    echo "La chaine '$findme' a été trouvée dans la chaîne '$mystring'";
    echo " et débute à la position $pos";
}
?>