<?php



/*
Les varible----

nb1 en entier
nb2 en entier
nb3 en entier


debut 
si (nb1<nb2 && nb2<nb3)

alors affiche " les nombres sont dans l'ordre"

sinon affiche  " les nombres ne sont dans l'ordre"



*/



$nb1= 15;
$nb2= 3;
$nb3= 5;


if($nb1<$nb2||$nb2<$nb3){
    echo " les nombres sont dans l'ordre";
}

else{
    echo  " les nombres ne sont dans l'ordre";
}
?>