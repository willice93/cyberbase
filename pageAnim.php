
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
//on verifie si l'utilisateur est logger
if ((!isset($_SESSION['login'])) || (empty($_SESSION['login'])))
  {
    // la variable 'login' de session est non déclaré ou vide
    echo '  <p>Petit curieux... <a href="index.php" title="Connexion">Connexion d\'abord !</a></p>';
    exit();
  }
?><!DOCTYPE html>
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
      <h1>bonjour</h1>
    
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
