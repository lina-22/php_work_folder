<!-- 

// variables:

// nombre1 en entier
// nombre2 en entier
// operateur en chaine
// resultat en réel

// Debut 
// si (opérateur=="+")
//   Alors resultat = nombre1+nombre2

//   si (opérateur=="-")
//   Alors resultat = nombre1-nombre2 


//   si (opérateur=="*")
//   Alors resultat = nombre1*nombre2


//   si (opérateur=="/")
//   Alors resultat = nombre1/nombre2
  
//  fin si 
//  Affiche "Le resultat de ".nombre1." ".opérateur." ".nombre2." = ".resultat; 

// fin -->

<?php
$nombre1= $_POST['nb1'];
$nombre2= $_POST['nb2'];
$signe=$_POST['signe'];
$resultat;

if($signe=="+")
{
    $resultat=$nombre1+$nombre2;

}

elseif($signe=="-")
{
    $resultat=$nombre1-$nombre2;

}

elseif($signe=="*")
{
    $resultat=$nombre1*$nombre2;

}

elseif($signe=="/")
{
    $resultat=$nombre1/$nombre2;

}

echo " Le resultat de l'operation ".$nombre1." ".$signe." ".$nombre2." =" .$resultat;

?>


