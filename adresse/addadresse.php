<?php
//OBJECTIF Ajouter une adresse
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//conection a la base de Donnée


$numero_rue = 2 ;
$libelle_rue  = 'rue de la silicone vallée';
$ville = 'st denis';
$code_postale = 93200;

// Donnée récuperré du formulaire

$req = $bdd->prepare('INSERT INTO adresse (numero_rue, libelle_rue, ville, code_postale) Values (:numero_rue, :libelle_rue, :ville, :code_postale)');
$req->execute(array(
'numero_rue' => $numero_rue,
'libelle_rue' => $libelle_rue,
'ville' => $ville,
'code_postale' => $code_postale



));

echo "adresse Ajouter";
?>