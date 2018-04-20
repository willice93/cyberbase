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
$idcour= 5;
$niveau_cour = '10' ;
$nom_cour = 'on veut des sous' ;
$video_cour = 'gagner de largent' ;
$img_cour = 'willyprof' ;
$quizzcour = 'ez win' ;
// récuperration du formulaire

$req = $bdd->prepare('UPDATE cour SET niveau_cour = :niveau_cour, nom_cour = :nom_cour, video_cour = :video_cour, img_cour = :img_cour, quizzcour =:quizzcour WHERE idcour = :idcour');
$req->execute(array(
'idcour' => $idcour,
'niveau_cour' => $niveau_cour,
'nom_cour' => $nom_cour,
'video_cour' => $video_cour,
'img_cour' => $img_cour,
'quizzcour' => $quizzcour

));
//donnée son modifier
echo "modif de cours";
?>
