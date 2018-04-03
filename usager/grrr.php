<?php
//OBJECTIF MODIFIER un usager

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//conection a la base de Donnée

$bdd->exec ('UPDATE usager SET num_carte= 10, nom_usager= \'pk\', prenom_usager= \'samarchepas\', date_naissance= 2003/05/19, mdp_usager= \'azety\', nivaeu_usager= 10 WHERE idusager= 28');
//traitenement de la modification
echo 'modification de lusagé ' //CONFIRMATION de la modfification
?>
