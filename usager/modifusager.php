<?php

// OBJECTIF Modifier un usager

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// conection a la base de Donnée



$modif= 30; // La personne a modifiée
// parametre a modifier
$new_carte =123;
$new_usager='PHP';
$prenom_usager = 'AZETY';
$new_naissance = '2013/05/23';
$new_mdp = 'AZETY';
$new_niveaux = 'AZETY';
// parametre a modifier


$req = $bdd->prepare('UPDATE  usager SET num_carte = :new_carte, nom_usager = :new_usager, prenom_usager = :prenom_usager, date_naissance = :new_naissance, mdp_usager = :new_mdp, nivaeu_usager = :new_niveaux WHERE idusager = :modif');
// MODIFICATION DE LA BASE DE DONNEE

$req->execute(array(
	'num_carte' => $new_carte,
	'nom_usager' => $new_usager,
	'prenom_usager' => $prenom_usager,
	'date_naissance' => $new_naissance,
	'mdp_usager' => $new_mdp,
	'nivaeu_usager' => $new_niveaux,
	'idusager' => $modif
));
//Modifier les parametre
?>
