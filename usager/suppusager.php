<?php

// OBJECTIF :suprimé un usager

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// CONNECTION A LA BASE DE DONNEE
$idusager= 24;

$req = $bdd->prepare ('DELETE FROM usager WHERE idusager= :idusager');
//execution de adieu l'usager
$req->execute(array(
	'idusager' => $idusager
));

echo "adieu usager ";
// usager  suprimé
?>