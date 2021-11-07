<?php
/*



les variable

reponse chaine


debut

si (reponse=="oui"|| reponse=="non")
   Alors affiche "Valide"

 sinon affiche "Non Valide"
 
 Fin */

 $reponse=$_POST['reponse'];
 $reponse=strtolower($reponse);

 if($reponse=="oui"||$reponse=="non"){
     echo "valide";
    
 }

 else 
 {
     header ("location: index.html"); /* for get the main page by header*/ 
 }
  
?>