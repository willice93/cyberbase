<?php

// OBJECTIF :suprimé une animateur

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// CONNECTION A LA BASE DE DONNEE
$idanimateur= 6;

$req = $bdd->prepare ('DELETE FROM animateur WHERE idanimateur= :idanimateur');
//execution de adieu animateur
$req->execute(array(
	'idanimateur' => $idanimateur
));

echo "Bonne chance pour la suite ";
// animateur  suprimé
?>