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
$idcour= 6;

$req = $bdd->prepare ('DELETE FROM cour WHERE idcour= :idcour');
//execution de adieu l'usager
$req->execute(array(
	'idcour' => $idcour
));

echo "adieu usager ";
// usager  suprimé
?>