
<?php



//OBJECTIF Ajouter un usager



 



​



try



{



	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');



	$bdd2 = mysqli_connect("localhost", "root", "", "bd-cyb");



}



catch(Exception $e)



{



    die('Erreur : '.$e->getMessage());



}



​



//conection a la base de Donnée



​



​



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



	



​



​



// verifie si la l'adresse existe deja dans la bdd



$resultat2 = mysqli_query($bdd2, 'SELECT * FROM adresse');



​



$x=0;



while($row= mysqli_fetch_row($resultat2))



{



​



​



	$mailtab[$x]=$row[2];



	$idusagetab[$x] = $row[0];



​



	$x++;



​



}



mysqli_free_result($resultat2);



​



$fin_user=count($mailtab);



for ($z=0; $z < $fin_user; $z++) {



	if ($mailtab[$z] == $libelle_rue) {



​



		$verif_adress=true;



	}



	else {



​



$verif_adress=false;



​



	}



​



}



​



​



					// Si l'adresse exite pas creer la



​



if ($verif_adress == false) {



												//requete adresse 



​



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



 )); //recuperrer le nom de l'usager 



​



while ($donnees = $req->fetch())



{



	$idadress = $donnees['idadress'];



}



​



​



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



​



}



​



		else { 				



			$req = $bdd->prepare('SELECT idadress FROM adresse WHERE numero_rue = :numero_rue AND libelle_rue = :libelle_rue AND ville = :ville AND code_postale = :code_postale');



$req->execute (array(



'numero_rue' => $numero_rue,



'libelle_rue' => $libelle_rue,



'ville' => $ville,



'code_postale' => $code_postale



 )); //recuperrer le nom de l'usager 



​



while ($donnees = $req->fetch())



{



	$idadress = $donnees['idadress'];



}



​



​



		//requete usager



​



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



​



echo "Bonjour, $nom_usager votre compte à bien été crée";



}



​
?>