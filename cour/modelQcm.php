<?php


//decoupage de la chaine en 4 partie question reponse 
$question =file_get_contents("qcm.txt", "r");
$question = explode("?", $question);


$reponse1=$question[1];
$reponse2=$question[2];
$reponse3=$question[3];
$reponse4=$question[4];