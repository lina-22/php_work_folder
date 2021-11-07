<?php
$matiere="mercue";
$temperature=400;
$etat;

if(($matiere=="eau"&&$temperature<=0) || ($matiere=="mercure"&&$matiere<=38))
{
    $etat="solide";

}
elseif(($matiere=="eau"&&$temperature<=100) || ($matiere=="mercure"&&$matiere<=356))
{
    $etat="liquide";

}

else{
    $etat= "gazeux";
}

echo " l'etat de $matiere a $temperature est $etat";

?>