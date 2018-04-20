<?php

require('modelUser.php');
$num_carte = htmlspecialchars($_POST['carte']) ;
$nom_usager =htmlspecialchars($_POST['nom'])  ;
$prenom_usager = htmlspecialchars($_POST['prenom']) ;
$date_naissance = htmlspecialchars($_POST['date_naissance']) ;
$mdp_usager = htmlspecialchars($_POST['mdp'])  ;
$nivaeu_usager = htmlspecialchars($_POST['niveau']) ;
$numero_rue = htmlspecialchars($_POST['rue']);
$libelle_rue = htmlspecialchars($_POST['libelle']);
$ville = htmlspecialchars($_POST['ville']);
$code_postale = htmlspecialchars($_POST['code_postale']);

addUser($num_carte,$nom_usager,$prenom_usager,$date_naissance,$mdp_usager,$nivaeu_usager,$numero_rue,$libelle_rue,$ville,$code_postale);



