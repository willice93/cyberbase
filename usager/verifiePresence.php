<?php
function verifiePresence($nom_table,$num_arg1,$var_recherche){
	include('../connexionBase.php');
// verifie si la la valeur existe  dans la table1
//requete SELECT
$resultat2 = mysqli_query($bdd2, 'SELECT * FROM '.$nom_table.'');
//initialisation du compteur 
$x=0;

//tant qu'on parcour le tableau de resultat on cree 2 autre tableau pour stocker les valeurs
/*changer le nom des tableau pour etre plus clair */
while($row= mysqli_fetch_row($resultat2))
{

	$mailtab[$x]=$row[$num_arg1];
	
	$x++;
}

mysqli_free_result($resultat2);
// on recupere la taille du tableau 
$fin_user=count($mailtab);


/* rajouter un AND num_rue a faire sinon 
le num de rue n'est pas pris en compte*/
for ($z=0; $z < $fin_user; $z++) {
	if ($mailtab[$z] == $var_recherche) {
return TRUE;}
	else {
return FALSE;
	}

}
}
?>