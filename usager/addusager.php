
<?php
//on se connecte a la pase
include('../connexionBase.php');

//donnée du formulaire 
$num_carte = $_POST['carte'] ;
$nom_usager =$_POST['nom'] ;
$prenom_usager = $_POST['prenom'] ;
$date_naissance = $_POST['date_naissance'] ;
$mdp_usager = $_POST['mdp'] ;
$nivaeu_usager = $_POST['niveau'] ;
$idadresse = NULL;
$numero_rue = $_POST['rue'];
$libelle_rue = $_POST['libelle'];
$ville = $_POST['ville'];
$code_postale = $_POST['code_postale'];

// verifie si la l'adresse existe deja dans la bdd
//requete SELECT
$resultat2 = mysqli_query($bdd2, 'SELECT * FROM adresse');
//initialisation du compteur 
$x=0;

//tant qu'on parcour le tableau de resultat on cree 2 autre tableau pour stocker les valeurs
/*changer le nom des tableau pour etre plus clair */
while($row= mysqli_fetch_row($resultat2))
{

	$mailtab[$x]=$row[2];
	$idusagetab[$x] = $row[0];
	$x++;
}

mysqli_free_result($resultat2);
// on recupere la taille du tableau 
$fin_user=count($mailtab);


/* rajouter un AND num_rue a faire sinon 
le num de rue n'est pas pris en compte*/
for ($z=0; $z < $fin_user; $z++) {
	if ($mailtab[$z] == $libelle_rue) {
$verif_adress=true;}
	else {
$verif_adress=false;
	}

}

// Si l'adresse exite pas on la cree
if ($verif_adress == false) {
//requete adresse 
$req = $bdd->prepare('INSERT INTO adresse (numero_rue, libelle_rue, ville, code_postale) VALUES (:numero_rue, :libelle_rue, :ville, :code_postale)');

$req->execute(array(
	'numero_rue' => $numero_rue,
	'libelle_rue' => $libelle_rue,
	'ville' => $ville,
	'code_postale' => $code_postale
	));

//on recupere l'idadresse pour l'insertion usager
		$req = $bdd->prepare('SELECT idadress FROM adresse WHERE numero_rue = :numero_rue AND libelle_rue = :libelle_rue AND ville = :ville AND code_postale = :code_postale');
$req->execute (array(
'numero_rue' => $numero_rue,
'libelle_rue' => $libelle_rue,
'ville' => $ville,
'code_postale' => $code_postale
 )); 
while ($donnees = $req->fetch())

{
	$idadress = $donnees['idadress'];
}


// on fait l'insertion de l'usager

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



echo "Bonjour, $nom_usager  à bien été crée";

}
//si l'usager existe 
else { 				



			$req = $bdd->prepare('SELECT idadress FROM adresse WHERE numero_rue = :numero_rue AND libelle_rue = :libelle_rue AND ville = :ville AND code_postale = :code_postale');



$req->execute (array(

'numero_rue' => $numero_rue,
'libelle_rue' => $libelle_rue,
'ville' => $ville,
'code_postale' => $code_postale
 )); //recuperrer le nom de l'usager 

while ($donnees = $req->fetch())



{



	$idadress = $donnees['idadress'];



}


		//requete inserer l'usager

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

echo "Bonjour, $nom_usager  à bien été crée";
}
?>