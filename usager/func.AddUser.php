<?php
//OBJECTIF Ajouter un usager
function ajoutUser($num_carte,$nom_usager,$prenom_usager,$date_naissance,$mdp_usager,$niveau){
require('connexionBase.php');

//conection a la base de Donnée



$req = $bdd->prepare('INSERT INTO usager(num_carte, nom_usager, prenom_usager, date_naissance, mdp_usager, nivaeu_usager) VALUES(:num_carte, :nom_usager, :prenom_usager, :date_naissance, :mdp_usager, :nivaeu_usager)');
$req->execute(array(
	'num_carte' => $num_carte,
	'nom_usager' => $nom_usager,
	'prenom_usager' => $prenom_usager,
	'date_naissance' => $date_naissance,
	'mdp_usager' => $mdp_usager,
	'nivaeu_usager' => $nivaeu_usager

	));
//usager ajouter dans la base de donnée

echo 'usager ajouter dans la base de donnée '; //CONFIRMATION DU TRANSFERT
}
?>