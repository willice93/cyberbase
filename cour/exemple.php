<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
//on verifie si l'utilisateur est logger
if ((!isset($_SESSION['login'])) || (empty($_SESSION['login'])))
	{
		// la variable 'login' de session est non déclaré ou vide
		echo '  <p>Petit curieux... <a href="index.php" title="Connexion">Connexion d\'abord !</a></p>';
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Cours Windows</title>
   <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

<div id="entete">
<h1>La bibliothéque</h1>

   <div id="indentification">
    <A  href='../logout.php'>Deconnexion</A><br>
<A href='page_membre.php'>Retour au debut </A> </div>

<?php
//on declare le niveau du cour 
$courLevel= 6;
$login=$_SESSION['login'];

//reglage de la base de donnée

$base = mysql_connect ('localhost', 'root', 'cyberabonnes');
    mysql_select_db ('base_tuto', $base);
$sql="SELECT level FROM membre WHERE login ='$login'";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on recupere le resultat sous forme d'un tableau
$data = mysql_fetch_array($req);

// on libère l'espace mémoire alloué pour cette interrogation de la base
mysql_free_result ($req);

$level=$data['level'];
echo $_SESSION['login'];

echo ' VOTRE NIVEAU '.$data['level'].'<br>' ;

//traitement formulaire
$reponse1= $_POST[corbeil1];
$reponse2= $_POST[corbeil];
$reponse3=$_POST[corbeil2];
$resultat=$reponse1+$reponse2+$reponse3;
echo $resultat.'sur 3 <br>';


if (($resultat == 3 )&& ($level < $courLevel)){



$sql2 = "UPDATE membre SET level=$courLevel WHERE login='$login'";
$req2 = mysql_query($sql2) or die('Erreur SQL !<br />'.$sql2.'<br />'.mysql_error());
}

$sql="SELECT level FROM membre WHERE login ='$login'";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$data = mysql_fetch_array($req);
$level = $data['level'];

if ($level>=$courLevel){echo "<A HREF='dossier.php'>diapo suivante</A>  ";}
echo  ' NOUVEAU NIVEAU '.$data['level'].'<br>' ;
mysql_close ();
?>
</div>

<div id="main">
 <div id="video">
  <video width="600" height="400" controls="controls"
src="BIBLIOTHEQUE.mp4"/></div>
 </div>

 <div id="questionnaire">
 <form method="post" action="bibliotheque.php">
<br> 


<p>Comment renommer la nouvelle bibliothèque ?</p> <br>
<input type="radio" name="corbeil1" value="1" >Effectuer un clic gauche </input>
<br>
<input type="radio" name="corbeil1" value="0">Effectuer un clic droit </input>
<br>
<input type="radio" name="corbeil1" value="0">Double clics sur la bibliothèque</input>
<br>

 <p>Que trouve-t-on dans une bibliothèque ? </p> <br>
<input type="radio" name="corbeil" value="0" >Des livres </input>
<br>
<input type="radio" name="corbeil" value="1">Le dossier musique</input>
<br>
<input type="radio" name="corbeil" value="0">La corbeille</input>
<br>

 <p>Comment créer une nouvelle bibliothèque ?</p> <br>
<input type="radio" name="corbeil2" value="0" >En cliquant sur l’option organiser</input>
<br>
<input type="radio" name="corbeil2" value="0">En cliquant sur le bureau</input>
<br>
<input type="radio" name="corbeil2" value="1">En cliquant sur l'option nouvelle bibliothèque</input>

<input type="submit" value="Valider" />
</form>

 </div>
</div>

<div id="footer">
    <br>
  <?php echo 'video'.$courLevel.' sur 12'?>

</div>
</body>
</html>

