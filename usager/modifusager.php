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
$idusager = 25;
$num_carte = 136;
$nom_usager = 'inchalla';
$prenom_usager = 'sa marche';
$date_naissance = '2018-05-23';
$mdp_usager = 'peut etre';
$nivaeu_usager = 0;


$req = $bdd->prepare('UPDATE usager SET num_carte = :num_carte, nom_usager = :nom_usager, prenom_usager = :prenom_usager, date_naissance = :date_naissance, mdp_usager = :mdp_usager, nivaeu_usager = :nivaeu_usager WHERE idusager = :idusager');
//modification de lusager

$req->execute (array(
'idusager' => $idusager,
'num_carte' =>$num_carte,
'nom_usager' =>$nom_usager,
'prenom_usager' =>$prenom_usager,
'date_naissance'=>$date_naissance,
'mdp_usager' =>$mdp_usager,
'nivaeu_usager' =>$nivaeu_usager
//variable remplacé

));
echo "Normalment peut etre un jour sa ce modifie";// sa marche :)
?>

 













