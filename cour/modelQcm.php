<?php


//decoupage de la chaine en 4 partie question reponse 
$question =file_get_contents("qcm/qcm.txt", "r");
$question = explode("?", $question);



//lis autant de question qui l'en trouve 
$num=count($question);
for ($i=1; $i <$num ; $i++) { 
	$reponse[$i]=$question[$i];
}

