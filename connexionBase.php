<?php

//connexion a la base de donnée
try
{

	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '');
	$bdd2 = mysqli_connect("localhost", "root", "", "bd-cyb");

}

catch(Exception $e)

{
    die('Erreur : '.$e->getMessage());

}