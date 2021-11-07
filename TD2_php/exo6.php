<?php
// Les variable
/*etat en chaine
temperature en entier

debut 
si (temperature <=0)
  Alors etat = "Etat solide"
Sinon si (temperature<=100)
  Alors etat = "Etat liquide"
Sinon
  etat = "Etat gazeux"

  Fin Si
  affiche etat
  Fin
*/


if(isset($_POST['temperature'])==false)
{
    echo "<a href='index.html'> Lien vers le formulaire</a>";
    exit;
} 

$etat;
$temperature = $_POST['temperature'];
// $temperature=150;
if($temperature<=0)
{
    $etat = "Etat solide";
}


elseif($temperature<=100)
{
    $etat = "Etat Liquide";
}

else
{
    $etat = "Etat gazeux";
}

echo "L'etat de l'eau a $temperature °C est $etat";
?>