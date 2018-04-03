<?php

// OBJECTIF Modifier un adresse

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// conection a la base de Donnée


$idanimateur = 7;
$nom_animateur = 'WILLY';
$mdp_animateur = 'EZ PHP';

$req = $bdd->prepare('UPDATE animateur SET nom_animateur = :nom_animateur, mdp_animateur = :mdp_animateur WHERE idanimateur = :idanimateur'
);
$req->execute (array(
'idanimateur'=> $idanimateur,
'nom_animateur'=> $nom_animateur,
'mdp_animateur'=> $mdp_animateur
));
echo "ON PHP PAS NOUS ";
?>





