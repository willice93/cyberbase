<?php
//OBJECTIF Ajouter un usager
 //conection a la base de Donnée
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$bdd2 = mysqli_connect("localhost", "root", "", "bd-cyb");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

include ('verif.php');



$num_carte = htmlspecialchars($_POST['carte']) ;
$nom_usager =htmlspecialchars($_POST['nom'])  ;
$prenom_usager = htmlspecialchars($_POST['prenom']) ;
$date_naissance = htmlspecialchars($_POST['date_naissance']) ;
$mdp_usager = htmlspecialchars($_POST['mdp'])  ;
$nivaeu_usager = htmlspecialchars($_POST['niveau']) ;
$numero_rue = htmlspecialchars($_POST['rue']);
$libelle_rue = htmlspecialchars($_POST['libelle']);
$ville = htmlspecialchars($_POST['ville']);
$code_postale = htmlspecialchars($_POST['code_postale']);



// verifie si le numero de carte existe deja dans la bdd
$verif_user = verif('usager', 1, $num_carte);
$verif_adress = verif('adresse',2,$libelle_rue);



					// Si l'adresse exite pas creer la

if ($verif_adress == false AND $verif_user == false) {
												//requete adresse 

$req = $bdd->prepare('INSERT INTO adresse (numero_rue, libelle_rue, ville, code_postale) VALUES (:numero_rue, :libelle_rue, :ville, :code_postale)');
$req->execute(array(
	'numero_rue' => $numero_rue,
	'libelle_rue' => $libelle_rue,
	'ville' => $ville,
	'code_postale' => $code_postale
	));
	
		$req = $bdd->prepare('SELECT idadress FROM adresse WHERE numero_rue = :numero_rue AND libelle_rue = :libelle_rue AND ville = :ville AND code_postale = :code_postale');
$req->execute (array(
'numero_rue' => $numero_rue,
'libelle_rue' => $libelle_rue,
'ville' => $ville,
'code_postale' => $code_postale
 )); //recuperrer le nom de  l'usager 

while ($donnees = $req->fetch())
{
	$idadress = $donnees['idadress'];
}


		$req = $bdd->prepare('INSERT INTO usager(num_carte, nom_usager, prenom_usager, date_naissance, mdp_usager, nivaeu_usager, idadress) VALUES(:num_carte, :nom_usager, :prenom_usager, :date_naissance, :mdp_usager, :nivaeu_usager, :idadress)');
$req->execute(array(
	'num_carte' => $num_carte,
	'nom_usager' => $nom_usager,
	'prenom_usager' => $prenom_usager,
	'date_naissance' => $date_naissance,
	'mdp_usager' => $mdp_usager,
	'nivaeu_usager' => $nivaeu_usager,
	'idadress' => $idadress
	));
echo "Bonjour, $nom_usager votre compte à bien été crée";
echo'<a href="aform.php">retour</a>';
}

elseif ($verif_user == true) {

	echo 'Ce numero de carte est deja existant..';
	echo'<a href="aform.php">retour</a>';

}


		else { 				
			$req = $bdd->prepare('SELECT idadress FROM adresse WHERE numero_rue = :numero_rue AND libelle_rue = :libelle_rue AND ville = :ville AND code_postale = :code_postale');
$req->execute (array(
'numero_rue' => $numero_rue,
'libelle_rue' => $libelle_rue,
'ville' => $ville,
'code_postale' => $code_postale
 )); //recuperrer le nom de  l'usager 

while ($donnees = $req->fetch())
{
	$idadress = $donnees['idadress'];
}


		//requete usager

		$req = $bdd->prepare('INSERT INTO usager(num_carte, nom_usager, prenom_usager, date_naissance, mdp_usager, nivaeu_usager, idadress) VALUES(:num_carte, :nom_usager, :prenom_usager, :date_naissance, :mdp_usager, :nivaeu_usager, :idadress)');
$req->execute(array(
	'num_carte' => $num_carte,
	'nom_usager' => $nom_usager,
	'prenom_usager' => $prenom_usager,
	'date_naissance' => $date_naissance,
	'mdp_usager' => $mdp_usager,
	'nivaeu_usager' => $nivaeu_usager,
	'idadress' => $idadress
	));

echo "Bonjour, $nom_usager votre compte à bien été crée";
echo'<a href="aform.php">retour</a>';
}
?>