<?php
include('../connexionBase.php');
include('verifiePresence.php');
$test=verifiePresence('usager',2,'will');
if ($test== true){echo 'il ya'; }
	else {echo 'yapa';}
?>