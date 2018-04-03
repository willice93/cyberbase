<?php

// OBJECTIF :suprimé une adresse

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// CONNECTION A LA BASE DE DONNEE
$idadress= 24;

$req = $bdd->prepare ('DELETE FROM adresse WHERE idadress= :idadress');
//execution de adieu adresse
$req->execute(array(
	'idadress' => $idadress
));

echo "adieu usager ";
// adresse  suprimé
?>