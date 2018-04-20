<?php
//OBJECTIF Ajouter un usager
 //conection a la base de Donnée




function verif($nom_table,$num_arg1,$var_recherche){
	
$bdd = mysqli_connect("localhost", "root", "", "bd-cyb");
// verifie si la la valeur existe  dans la table1
//requete SELECT
$resultat2 = mysqli_query($bdd, 'SELECT * FROM '.$nom_table.'');
//initialisation du compteur 
$x=0;

//tant qu'on parcour le tableau de resultat on cree 2 autre tableau pour stocker les valeurs
/*changer le nom des tableau pour etre plus clair */
while($row_user= mysqli_fetch_row($resultat2))
{

	$mailtab[$x]=$row_user[$num_arg1];
	
	$x++;
}

mysqli_free_result($resultat2);
// on recupere la taille du tableau 
$fin_user=count($mailtab);

$verif_user = NULL;
/* rajouter un AND num_rue a faire sinon 
le num de rue n'est pas pris en compte*/
for ($z=0; $z < $fin_user; $z++) {
	if ($mailtab[$z] == $var_recherche) {

$verif_user = true; 
$verif_adress = true;
break;

}	else {
$verif_user = false;
$verif_adress = false;
	}

}
return $verif_user AND $verif_adress;
} 




function addUser($num_carte,$nom_usager,$prenom_usager,$date_naissance,$mdp_usager,$nivaeu_usager,$numero_rue,$libelle_rue,$ville,$code_postale)
{	
$bdd = mysqli_connect("localhost", "root", "", "bd-cyb");				
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

}
?>