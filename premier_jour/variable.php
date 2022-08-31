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

// ------------------------------------------- FAIRE DES TABLEAUX ----------------------------------------------------------------------------------------------------
//------------------------------------------ tableau indexé---------------------------------------------------------------------------------
$tab1 = ["texte",59,"blabla",99];
$tab2 = array(); //cette méthode commence à être dépréciée

$tab1[0]="sushi";
echo $tab1[0];

// ------------------------------------------tableau associatif/ collection (utilisé pour stocker dans la bdd)--------------------------
$tab3 = ['nom'=>'',
        'prenom'=>'Dimitri',
        'age'=>'2'];

$tab3['nom']="no surname";
$tab3['telephone']="0767989254";
echo $tab3["telephone"];
//-------------Permet de voir le contenu du tableau normal-----------------------
//--------------------La variable value peut être remplacée par n'importe quel mot, elle stocke juste la valeur de la case

foreach ($tab1 as $value){
    echo $value;
}

//-------------Permet de voir le contenu du tableau associatif-----------------------
var_dump($tab3);

foreach ($tab3 as $key => $value){
    echo "</br> le $key est : $value";
}

//-----------Fonction quel est le plus grand nombre ?--------------------------------

$tab = [5, 11, 8, 22, 36, 42, 3, 78, 1, 29];
//retourne la valeur minimale d'un tableau
function minValue($tableau){
    $min = $tableau[0];
    foreach($tableau as $value){
        if($value<$min){
            $min = $value;
        }
    }
    return $min;
}
//retourne la valeur maximale d'un tableau
function maxValue($tableau){
    $max = 0;
    foreach($tableau as $value){
        if($value>$max){
            $max = $value;
        }
    }
    return $max;
}
echo 'La valeur minimale est : '.minValue($tab).'<br>';    
echo 'La valeur maximamle est : '.maxValue($tab).'<br>'; 

function moy($tableau){
    $moy = 0;
    foreach($tableau as $value){
            $moy += $value;
    }
    return $moy/count($tableau);
}

echo moy($tab)
?>

