
		<?php


//decoupage de la chaine en 4 partie question reponse 
$question =file_get_contents("qcm.txt", "r");
$question = explode("?", $question);


$reponse1=$question[1];
$reponse2=$question[2];
$reponse3=$question[3];
$reponse4=$question[4];



$reponsesQ1 = explode("-", $reponse1);
//on ecrit la question 
echo $reponsesQ1[0].'<br>';//question
echo '<br>';
//on propose les reponses 

	echo'<input type="checkbox" name="a1" value="">'.$reponsesQ1[1].'<br>';
	echo'<input type="checkbox" name="a2" value="">'.$reponsesQ1[2].'<br>';
	echo'<input type="checkbox" name="a3" value="">'.$reponsesQ1[3].'<br>';
	echo'<input type="checkbox" name="a4" value="">'.$reponsesQ1[4].'<br>';

$findme   = '*';


for ($i=0; $i <5 ; $i++) { 
	$pos = strpos($reponsesQ1[$i], $findme);
if ($pos === false) {echo"vous n'avez donnez accune reponse" ;} else {echo $reponsesQ1[$i].'<br>';}
}


	$reponsesQ2 = explode("-", $reponse2);
//on ecrit la question 
echo $reponsesQ2[0].'<br>';//question
echo '<br>';
//on propose les reponses 

	echo'<input type="checkbox" name="a1" value="">'.$reponsesQ2[1].'<br>';
	echo'<input type="checkbox" name="a2" value="">'.$reponsesQ2[2].'<br>';
	echo'<input type="checkbox" name="a3" value="">'.$reponsesQ2[3].'<br>';
	echo'<input type="checkbox" name="a4" value="">'.$reponsesQ2[4].'<br>';

for ($i=0; $i <5 ; $i++) { 
	$pos = strpos($reponsesQ2[$i], $findme);
if ($pos === false) {echo"vous n'avez donnez accune reponse" ;} else {echo $reponsesQ2[$i].'<br>';}
}
	$reponsesQ3 = explode("-", $reponse3);
//on ecrit la question 
echo $reponsesQ3[0].'<br>';//question
echo '<br>';
//on propose les reponses 

	echo'<input type="checkbox" name="a1" value="">'.$reponsesQ3[1].'<br>';
	echo'<input type="checkbox" name="a2" value="">'.$reponsesQ3[2].'<br>';
	echo'<input type="checkbox" name="a3" value="">'.$reponsesQ3[3].'<br>';
	echo'<input type="checkbox" name="a4" value="">'.$reponsesQ3[4].'<br>';
for ($i=0; $i <5 ; $i++) { 
	$pos = strpos($reponsesQ3[$i], $findme);
if ($pos === false) {echo"vous n'avez donnez accune reponse" ;} else {echo $reponsesQ3[$i].'<br>';}
}
	$reponsesQ4 = explode("-", $reponse4);
//on ecrit la question 
echo $reponsesQ4[0].'<br>';//question
echo '<br>';
//on propose les reponses 

	echo'<input type="checkbox" name="a1" value="">'.$reponsesQ4[1].'<br>';
	echo'<input type="checkbox" name="a2" value="">'.$reponsesQ4[2].'<br>';
	echo'<input type="checkbox" name="a3" value="">'.$reponsesQ4[3].'<br>';
	echo'<input type="checkbox" name="a4" value="">'.$reponsesQ4[4].'<br>';

	for ($i=0; $i <5 ; $i++) { 
	$pos = strpos($reponsesQ4[$i], $findme);
if ($pos === false) {echo"vous n'avez donnez accune reponse" ;} else {echo $reponsesQ4[$i].'<br>';}
}

	




