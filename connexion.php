<?php

/*
Page: connexion.php
*/
session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['pseudo'])) {
        header('Location: index3.html');
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])) {

           
            header('Location: index3.html');

        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "", "bd-cyb");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM usager WHERE num_carte = '".$Pseudo."' AND mdp_usager = '".$MotDePasse."'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                 $Requete2 = mysqli_query($mysqli,"SELECT * FROM animateur WHERE nom_animateur = '".$Pseudo."' AND mdp_animateur = '".$MotDePasse."'");


                if(mysqli_num_rows($Requete) == 0 AND mysqli_num_rows($Requete2)== 0) {
                    
                    
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                    header('Location: index.php');
                } 

                elseif (mysqli_num_rows($Requete) == 1 ){
                     // on ouvre la session avec $_SESSION:
                    $_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                    header('Location: cour.php');
                    exit;
                } 
                elseif (mysqli_num_rows($Requete2) == 1 ){
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                    header('Location: usager/pageAnim.php');
                    exit;
                }
                
            }
        }
    }
}