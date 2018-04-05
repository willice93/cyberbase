<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php';?>
<body>

<?php include('menuAnim.php');?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h2>modifier un usager</h2>
      <div class="form-group col-xs-3 ">

   <form  action="editUsager.php" method="POST">
  numero de carte <input type="text" name="carte" class='form-control col-xs-3'><br>
  nom:<input type="text" name="nom" class='form-control'><br>
  prenom:<input type="text" name="prenom" class='form-control' ><br>
  date de naissance<input type="date" name="date_naissance" class='form-control'><br>
  mot de passe<input type="text" name="mdp" class='form-control'><br>
  niveau:<input type="text" name="niveau" class='form-control'><br>
  <input type="submit" value="envoyer" class="btn btn-primary">
</form>
</div>
    </div>
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
