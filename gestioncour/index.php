<?php

function chargerClass($class) {
require $class .'.php'; 
}

spl_autoload_register('chargerClass');

$cour = new Cour(6,"windows 10","debutant","../chemin/video/","../chemin/image/","quizz 2","description");

$cour->listeAttributs();




