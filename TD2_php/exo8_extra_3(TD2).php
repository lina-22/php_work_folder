
<?php
/* <!-- 
    
// les variable 
// prix en entier 
// age en entier
// resulmtat en réel

// Debut
// si (prix>1000&&age<30)

// Alor prix= prix*0.9

sinon
resultat =prix

affiche "Le prix de la commande est " .resultat


// fin

*/ 

$prix = 500;
$age = 34;
$resultat;

if($prix > 1000 ||$age<30)
{
    $resultat=$prix*0.9;
}
else{
    $resultat=$prix;
}

echo "Le prix de la commande est " .$resultat;

?>