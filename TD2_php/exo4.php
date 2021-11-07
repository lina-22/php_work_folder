<?php
/*
Variables 
    periode en chaine
    age en entier
    prix en entier
    reduction en réel
    resultat en réel

Debut
    periode= valeur du select
    age= valeur de l'input
    Si(periode=="semaine")
        prix=20
    Sinon
        prix=40
    Fin Si

    Si(age<=14)
        reduction=0.5
    Sinon Si (age<=16)
        reduction=0.75
    Sinon
        reduction=1 
    Fin Si

    resultat=prix*reduction
    Afficher "Le prix de l'entrée est de ".resultat." € "
*/

$periode=$_POST['selectPeriode'];
$age=$_POST['age'];
if($periode=="semaine")
{
    $prix=20;
}
else {
    $prix=40;
}

if($age<=14)
{
    $reduction=0.5;
}
else if($age<=16)
{
    $reduction=0.75;
}
else {
    $reduction=1;
}

$resultat=$prix*$reduction;
echo "<h2>Le prix de l'entrée est de $resultat € </h2>";
echo "<a href='../'>Retour aux formulaires</a>";
?>