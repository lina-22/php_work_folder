<?php
/*
--Algo--
Variables: 
    mdp en chaine
    longeur en entier

Debut 
    mdp= la valeur de l'input 
    longeur= longeur de mdp
    Si (longeur<8)
        Afficher "Le mdp n'est pas valide il a seulement ".longeur." caractères"
    Sinon
        Affiche "Le mdp est valide"
    Fin si
Fin
*/
$mdp=$_POST['inputMdp'];
$longeur=strlen($mdp);
if($longeur<8)
{
    echo "<h2>Le mdp n'est pas valide il a seulement ".$longeur." caractères</h2>";
}
else {
    echo "<h2>Le mdp est valide</h2>";
}
echo "<a href='../'>Retour aux formulaires</a>";
?>