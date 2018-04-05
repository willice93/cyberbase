<?php 
session_start();
include 'connexionBase.php';
include 'recupDataCour.php';
include 'viewUser.php';


header('AddType video/ogg .ogv');
header('AddType video/ogg .ogg');
header('AddType video/mp4 .mp4');
header('AddType video/webm .webm');

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=EB+Garamond&amp;subset=all">
<title>cours</title>
<link rel="stylesheet" type="text/css" href="css/site.20180213182517.css">
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="css/site.20180213182517-lteIE7.css">
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="css/site.20180213182517-lteIE8.css">
<![endif]-->
<!--[if gte IE 9]>
<link rel="stylesheet" type="text/css" href="css/site.20180213182517-gteIE9.css">
<![endif]-->
</head>
<body id="body">
<div class="pos vis section">
	<form name='quizz' action="controlQuizz.php" method="POST">
<div class="vis-2 pos-27 size-25 cont">
<div class="vis-2 pos-2 size-25 colwrapper">
<div class="vis-2 pos-2 size-26 cont-8">
<p class="para"><span class="font-7"><?php   echo $numcour;   ?></span></p>
</div>
<div class="vis-2 pos-28 size-27 cont-21">
<div class="vis-2 pos-29 size-28 cont-7">
<p class="para-5"><span class="font-8"><?php   echo'$description';   ?></span></p>
</div>
</div>
</div>
</div>
<div class="vis-2 pos-30 size-29 cont">
<div class="vis-2 pos-31 size-30 colwrapper">
<div class="vis-2 pos-32 size-31 cont">
<div class="vis-2 pos-2 size-31 colwrapper">
<div class="vis-2 pos-33 size-32 cont-6">
<p class="para-6"><span class="font-8"><?php   echo 'Vous etes au niveau :'.' '.$niveau;   ?></span></p>
</div>
<div class="vis-2 pos-34 size-33 cont-22"></div>
</div>
</div>
<div class="vis-2 pos-35 size-34 cont-5">
 <video width="320" height="240" controls>
  <source src="video1.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video> 
</div>
</div>
<div class="vis-2 pos-36 size-35 colwrapper">
<div class="vis-2 pos-37 size-36 cont">
<div class="vis-2 pos-2 size-37 cont-9">
<p class="para-7"><span class="font-9">QUIZZ:</span></p>
</div>
<div class="vis-2 pos-38 size-38 cont-23">
<p class="para-8"><span class="font-10">QUESTION 1</span></p>
</div>
</div>
<div class="vis-2 pos-39 size-39 cont-24">
<div class="vis-2 pos-40 size-40 cont-25">
<p class="para-9"><span class="font-11"><?php   echo'$q1';   ?></span></p>
</div>
<div class="vis-2 pos-41 size-41 cont">
<div class="vis-2 pos-2 size-42 cont-26">
<input id="radio-1" value="CLIQUE DROIT SUR LE FICHIER" name="radio" type="radio" class="input-6">
<label for="radio-1" class="font-12">CLIQUE DROIT SUR LE FICHIER</label>
</div>
<div class="vis-2 pos-27 size-43 cont-27">
<input id="radio-2" value="CLIC GAUCHE" name="radio" type="radio" class="input-6">
<label for="radio-2" class="font-13">CLIC GAUCHE</label>
</div>
</div>
<div class="vis-2 pos-42 size-44 cont">
<div class="vis-2 pos-2 size-45 cont-12">
<input id="radio-3" value="SHIFT" name="radio" type="radio" class="input-6">
<label for="radio-3" class="font-14">SHIFT</label>
</div>
<div class="vis-2 pos-43 size-43 cont-13">
<input id="radio-4" value="ESPACE" name="radio" type="radio" class="input-6">
<label for="radio-4" class="font-13">ESPACE</label>
</div>
</div>
<div class="vis-2 pos-44 size-46 cont-15">
<p class="para-8"><span class="font-10"><?php   echo'$q2';   ?></span></p>
</div>
<div class="vis-2 pos-45 size-47 cont-17">
<p class="para-9"><span class="font-11">QUEL EST LA PREMIERE ETAPE POUR RENOMMER UN FICHIER ?</span></p>
</div>
<div class="vis-2 pos-46 size-46 cont-16">
<p class="para-8"><span class="font-10"><?php   echo'$q3';   ?></span></p>
</div>
<div class="vis-2 pos-47 size-48 cont-14">
<p class="para-9"><span class="font-11">QUEL EST LA PREMIERE ETAPE POUR RENOMMER UN FICHIER ?</span></p>
</div>
<div class="vis-2 pos-48 size-44 cont">
<div class="vis-2 pos-2 size-49 cont-18">
<input id="radio-5" value="CLIQUE DROIT SUR LE FICHIER" name="radio" type="radio" class="input-6">
<label for="radio-5" class="font-15">CLIQUE DROIT SUR LE FICHIER</label>
</div>
<div class="vis-2 pos-27 size-45 cont-19">
<input id="radio-6" value="CLIC GAUCHE" name="radio" type="radio" class="input-6">
<label for="radio-6" class="font-14">CLIC GAUCHE</label>
</div>
</div>
<div class="vis-2 pos-49 size-41 cont">
<div class="vis-2 pos-2 size-43 cont-28">
<input id="radio-7" value="SHIFT" name="radio" type="radio" class="input-6">
<label for="radio-7" class="font-13">SHIFT</label>
</div>
<div class="vis-2 pos-43 size-45 cont-20">
<input id="radio-8" value="ESPACE" name="radio" type="radio" class="input-6">
<label for="radio-8" class="font-14">ESPACE</label>
</div>
</div>
<div class="vis-2 pos-50 size-38 cont-29">
<p class="para-8"><span class="font-10"><?php   echo'$q4';   ?></span></p>
</div>
<div class="vis-2 pos-51 size-50 cont-30">
<p class="para-9"><span class="font-11">QUEL EST LA PREMIERE ETAPE POUR RENOMMER UN FICHIER ?</span></p>
</div>
<div class="vis-2 pos-52 size-51 cont">
<div class="vis-2 pos-2 size-52 cont-31">
<input id="radio-9" value="CLIQUE DROIT SUR LE FICHIER" name="radio" type="radio" class="input-6">
<label for="radio-9" class="font-12">CLIQUE DROIT SUR LE FICHIER</label>
</div>
<div class="vis-2 pos-27 size-53 cont-32">
<input id="radio-10" value="CLIC GAUCHE" name="radio" type="radio" class="input-6">
<label for="radio-10" class="font-13">CLIC GAUCHE</label>
</div>
</div>
<div class="vis-2 pos-27 size-41 cont">
<div class="vis-2 pos-2 size-45 cont-33">
<input id="radio-11" value="SHIFT" name="radio" type="radio" class="input-6">
<label for="radio-11" class="font-14">SHIFT</label>
</div>
<div class="vis-2 pos-43 size-43 cont-34">
<input id="radio-12" value="ESPACE" name="radio" type="radio" class="input-6">
<label for="radio-12" class="font-13">ESPACE</label>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="vis-2 pos-53 size-54 cont-35">
<input type="submit" name="valider">
</div>
</form>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/cours.20180213182517.js"></script>
<script type="text/javascript">
var ver=RegExp(/Mozilla\/5\.0 \(Linux; .; Android ([\d.]+)/).exec(navigator.userAgent);if(ver&&parseFloat(ver[1])<5){document.getElementsByTagName('body')[0].className+=' whitespacefix';}
</script>
</body>
</html>