
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
//on verifie si l'utilisateur est logger
if ((!isset($_SESSION['pseudo'])) || (empty($_SESSION['pseudo'])))
  {
    // la variable 'login' de session est non déclaré ou vide
    echo '  <p>Petit curieux... <a href="../index.php" title="Connexion">Connexion d\'abord !</a></p>';
    exit();
  }?>