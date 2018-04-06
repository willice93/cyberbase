<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>formulaire d'ajout</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf8">
</head>
<body>

<?php include('../menuAnim.php');?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h2>Ajouter un usager</h2>
<div class="form-group col-xs-3 ">
    <form  action="addusager.php" method="POST">
	numero de carte <input required type="text" name="carte" class='form-control col-xs-3'><br>
	nom:<input required type="text" name="nom" class='form-control'><br>
	prenom:<input required type="text" name="prenom" class='form-control' ><br>
	date de naissance<input required type="date" name="date_naissance" class='form-control'><br>
	mot de passe<input required type="text" name="mdp" class='form-control'><br>
	niveau:<input required type="text" name="niveau" class='form-control'><br>
 
<h3><b>Adresse:</b></h3><br>
  Numero de rue: <input required type="text" name="rue" class='form-control'><br>
  Libellé: <input required type="text" name="libelle" class='form-control'><br>
  code postale: <input required type="text" name="code_postale" class='form-control'><br>
  Ville: <input required type="text" name="ville" class='form-control'><br>
  
	<input type="submit" value="envoyer" class="btn btn-primary">
</form>
</div>
    </div>
  </form>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

