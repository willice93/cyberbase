<?php
//OBJECTIF Ajouter un annimateur

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//conection a la base de Donnée

$nom_animateur = 'ROMAIN';
$mdp_animateur = 'rastacool01';


$req = $bdd->prepare ('INSERT INTO animateur(nom_animateur, mdp_animateur) VALUES(:nom_animateur, :mdp_animateur)');
$req->execute(array(
'nom_animateur' => $nom_animateur,
'mdp_animateur' => $mdp_animateur
));
echo "Ajouter";
?>