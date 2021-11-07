<?php
/*
--Algo--
Variables :
nombre en réels
resultat en réels

Debut
    nombre= valeur de l'input
    Si (nombre <0)
        Alors resultat=nombre*-1 
    Sinon
        resultat=nombre
    Fin Si
    
    Afficher "La valeur absolue de ".nombre." est ".resultat
Fin
--Fin Algo--
*/
$nombre=$_POST['inputNombre'];
$resultat;

if($nombre<0)
{
    $resultat=$nombre*-1;
}
else{
    $resultat=$nombre;
}

echo " <h2>La valeur absolue de ".$nombre." est ".$resultat."</h2>";
echo "<a href='../'>Retour aux formulaires</a>";
?>

