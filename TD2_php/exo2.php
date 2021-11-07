<?php
/*
--Algo--
Variables :
    destination en chaine
    route en chaine

Debut
    route=valeur du select
    Si (destination =="Paris" ou destination =="Sully")
        Alors route= "D948"
    Sinon
        route = "D51"
    Fin Si
    Affiche " Pour aller a ".desitnation." il faut prendre la route ".route 
Fin 
*/
$destination=$_POST['selectDestination'];
$route;
if($destination=="Paris"||$destination=="Sully")
{
    $route="D948";
}
else{
    $route="D51";
}
echo "<h2> Pour aller a ".$destination." il faut prendre la route ".$route ."</h2>";
echo "<a href='../'>Retour aux formulaires</a>";

?>