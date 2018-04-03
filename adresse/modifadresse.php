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


$idadress = 24;
$numero_rue = 6;
$libelle_rue = 'normalment sa marche';
$ville = 'st denis';
$code_postale = 93200;

$req = $bdd->prepare('UPDATE adresse SET numero_rue = :numero_rue, libelle_rue = :libelle_rue, ville = :ville, code_postale = :code_postale WHERE idadress = :idadress');
$req->execute(array(
'idadress'=>$idadress,
'numero_rue'=>$numero_rue,
'libelle_rue'=>$libelle_rue,
'ville'=>$ville,
'code_postale'=>$code_postale
));

echo "ça marche";
?>


