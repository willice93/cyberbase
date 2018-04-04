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


$num_carte = $_POST['carte'] ;
$nom_usager =$_POST['nom']  ;
$prenom_usager = $_POST['prenom'] ;
$date_naissance = $_POST['date_naissance'] ;
$mdp_usager = $_POST['mdp']  ;
$nivaeu_usager = $_POST['niveau']  ;
if ($num_carte == null) {
	 header('Location: addusager.php');
}
elseif ($nom_usager== null) {
	
}

elseif ($date_naissance== null) {
	
}
elseif ($mdp_usager== null) {
	
}

else{
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

echo 'usager ajouter dans la base de donnée ';} //CONFIRMATION DU TRANSFERT
?>