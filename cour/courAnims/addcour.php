<?php
//ajouter un cour


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//connection

$niveau_cour = 'faible' ;
$nom_cour = 'on veut des sous' ;
$video_cour = 'gagner de largent' ;
$img_cour = 'billcoint' ;
$quizzcour = 'ez win' ;
// récuperration du formulaire

$req = $bdd->prepare('INSERT INTO cour(niveau_cour, nom_cour, video_cour, img_cour, quizzcour) VALUES(:niveau_cour, :nom_cour, :video_cour, :img_cour, :quizzcour)');
$req->execute(array(
'niveau_cour' => $niveau_cour,
'nom_cour' => $nom_cour,
'video_cour' => $video_cour,
'img_cour' => $img_cour,
'quizzcour' => $quizzcour

));
//donnée son modifier
echo "ajout de cours";
?>
