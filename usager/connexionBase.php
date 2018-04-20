<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd-cyb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$bdd2 = mysqli_connect("localhost", "root", "", "bd-cyb");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}