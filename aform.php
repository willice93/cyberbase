<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>formulaire d'ajout</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf8">
</head>
<body>
	<div class="form-group col-xs-3 ">
<form  action="usager/addusager.php" method="POST">
	numero de carte <input type="text" name="carte" class='form-control col-xs-3'><br>
	nom:<input type="text" name="nom" class='form-control'><br>
	prenom:<input type="text" name="prenom" class='form-control' ><br>
	date de naissance<input type="date" name="date_naissance" class='form-control'><br>
	mot de passe<input type="text" name="mdp" class='form-control'><br>
	niveau:<input type="text" name="niveau" class='form-control'><br>
	<input type="submit" value="envoyer" class="btn btn-primary">

</form>
</div>
</body>
</html>
