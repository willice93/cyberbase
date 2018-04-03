<?php
//OBJECTIF Ajouter un usager

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//conection a la base de Donnée


$num_carte = '126roi' ;
$nom_usager = 'test' ;
$prenom_usager = 'date';
$date_naissance = '2018-05-23';
$mdp_usager = 'avoir' ;
$nivaeu_usager = 4 ;
// Donnée récuperré du formulaire

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

echo 'usager ajouter dans la base de donnée ' //CONFIRMATION DU TRANSFERT
?>