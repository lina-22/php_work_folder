<?php



/*
nb1 en entier
nb2 en entier
nb3 en entier


Debut
Si(nb1==nb2 && nb1==nb3)

  Alors affiche " les trois nombre sont égaux"
Sinon si (nb1==nb2|| nb1==nb3 || nb2==nb3)

Alors affiche "deux nombres sont égaux"

sinon affiche " les trois sont différent"

fin



*/ 


$nb1=1;
$nb2=2;
$nb3=1;

if($nb1==$nb2 && $nb1==$nb3){
    echo" les trois nombres sont éguaux";
}
elseif ($nb1==$nb2|| $nb1==$nb3 || $nb2==$nb3)
{
   echo " deux des trois nombres sont different";}
  
else {
    echo "Les trois nombres sont différents";}

?>