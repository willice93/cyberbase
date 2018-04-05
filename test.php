<?php
include('usager/ajoutUser.php');
$num_carte = 156;
$nom_usager ='demo'  ;
$prenom_usager = 'demod' ;
$date_naissance ='2010-05-05' ;
$mdp_usager = 'mdp'  ;
$nivaeu_usager = 0 ;

ajoutUser($num_carte,$nom_usager,$prenom_usager,$date_naissance,$mdp_usager,$nivaeu_usager);
?>