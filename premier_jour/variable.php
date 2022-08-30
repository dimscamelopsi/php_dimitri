<?php 
// On déclare une variable avec $

$nbr1 = 10;
$nbr2 = 13;

if ($nbr1>$nbr2){
    echo 'Le nbr 1 est plus grand ';
}

else if($nbr1 == $nbr2){
    echo '1 et 2 sont identiques ';
}

else{
    echo 'Le nbr 2 est plus grand ';
}

$nbr1 = 50;
$nbr2 = 26;
$nbr1 = $nbr2;

// premier type de concaténation
echo "$nbr1 et $nbr2";
// deuxième type de concaténation
echo ' nombre 1 : '.$nbr1.' , nombre 2 : '.$nbr2.'';

// Les variables dans une fonction n'existent que dans la fonction
// On peut déclarer le type de la variable int $nbr (retourne un nombre entier)

function testNbr($nbr3,$nbr4){
    if ($nbr3>$nbr4){
        echo 'Le nbr 1 est plus grand ';
    }
    else if($nbr3 == $nbr4){
        echo '1 et 2 sont identiques ';
    }
    else{
        echo 'Le nbr 2 est plus grand ';
    }
}

echo testNbr(60,60);

function somme($un,$deux,$trois):int{
    return $un+$deux+$trois;
}

// On peut aussi passer la fonction dans une variable $var = somme(45,21,65)
echo '</br>' .somme(45,21,65);

function moyenne($un,$deux,$trois){
    return ($un+$deux+$trois)/3;
}

echo '</br>' .moyenne(10,20,60);





?>