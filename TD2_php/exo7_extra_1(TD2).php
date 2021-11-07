<?php
/*


---variables

matiere en chaine
temperature en entier
etat en chaine

Debut
Si (matiere=="eau")
   si (temperature <=0)

    Alors etat = "solide"

  sinon  si (temperature <=100) 

    Alors etat ="liquide"

  sinon 
     alors etat = "gazeux"  

   fin si
   
   

Sinon si (matiere=="mercure")   

   si (temperature <-38)
     Alors etat = "solid"
    Sinon si (temperature <=356)
     Alors etat = "liquide" 

    Sinon 
       Alors etat = "gazeux" 

       fin si




*/

var_dump($_POST);
$matiere = $_POST['matiere'];
$temperature = $_POST ['temperature'];
$etat;

$matiere ="marcure";
$temperature =-20;
$etat;

if($matiere=="eau")
{
    if($temperature<=0)
    {
        $etat= "solide";
    }

    elseif($temperature<=100)
    {
        $etat= "liquide";
    }
    else
    { 
        $etat= "gazeux";
    }
}

elseif ($matiere=="mercure")
{
    if($temperature <= -38)
    {
       $etet="solid";
    }
    elseif($temperature<=356)
    {
        $etat= "liquide";
    }
    else{
        $etat= "gazeux";
    }

}

echo "L'etat de $matiere à $temperature est $etat";
?>