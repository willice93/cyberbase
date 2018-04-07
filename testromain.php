<?php  





//trouvé les donnée de la personne a modfié personne a modifié

try

{

	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

// conection a la base de Donnée







$num_carte = 7;

$prenom_usager = NULL;

$nom_usager = NULL;



// recheche de l'usager par numero de carte ou nom prenom





$req = $bdd->prepare('SELECT * FROM usager WHERE num_carte = :num_carte OR prenom_usager = :prenom_usager AND nom_usager = :nom_usager');

$req->execute(array(

	'num_carte' => $num_carte,

	'prenom_usager' => $prenom_usager,

	'nom_usager' => $nom_usager

));

// trouve la personne dans la base de donnée





echo '<ul>';

while ($donnees = $req->fetch())

{

	echo '<li>' .  $donnees['idusager'] .' Numero de carte '.  $donnees['num_carte'] .' Nom'.  $donnees['nom_usager'] .' ' .'Prenom'.  $donnees['prenom_usager'] .' ' .'date de naissance' .' '. $donnees['date_naissance'] .' ' .'MDP' . $donnees['mdp_usager'] .' ' . 'Niveau' . $donnees['nivaeu_usager'] .' '.'idadress' . $donnees['idadress'] .'<br>' . ' Voici toute les information de cette personne </li>';

}

echo '</ul>';





$req->closeCursor();
echo 'ok';
?>