<?php

class Cour {

private $_idcour;
private $_nom;
private $_niveau;
private $_video;
private $_image;
private $_quizz;
private $_description;

// Cette attributs static nous permettra de creer une constante propre à la classe, tout objet de class aurait cette meme constante modifiable que dans la class.

private static $_compteur = 0;

// Fonction get accesseur pour recuperer les valeurs de nos attributs
								function idcour() {
										return $this->_idcour;
									}
								function nom() {
									return $this->_nom;
								}

								function niveau() {
									return $this->_niveau;
								}

								function video() {
									return $this->_video;
								}

								function image() {
									return $this->_image;
								}
								function quizz() {
									return $this->_quizz;
								}
								function description() {
									return $this->_description;
								}

// Nous permet d'optenir la valeur de l'attribut static (le mot "self" defini qu'on parle de la class elle meme)
								static	function getCompteur() {
									return self::$_compteur;
								}


// Fonction set mutateur pour modifier nos attributs (il nous restera qu'a typé les valeurs)
								function setIdcour($idcour) {
							     $this->_idcour = $idcour;
								}
								function setNom($nom) {
							     $this->_nom = $nom;
								}

								function setNiveau($niveau) {
							     $this->_niveau = $niveau;
								}

								function setVideo($video) {
							     $this->_video = $video;
								}

								function setImage($image) {
							     $this->_image = $image;
								}
								function setQuizz($quizz) {
							     $this->_quizz = $quizz;
								}
								function setDescription($description) {
							     $this->_description = $description;
								}
// comme sont nom l'indique cette fonction vas pour donner tout les attributs et leurs valeurs

							  function listeAttributs()
							  {
							    foreach ($this as $attribut => $valeur)
							    {
							      echo '<strong>', $attribut, '</strong> => ', $valeur, '<br />';
							    }
							  }


// fonction nous permettant d'initialisé l'object et ces attributs 

			function __construct ($idcour,$nom,$niveau,$video,$image,$quizz, $description) {
			
			$this->setIdcour($idcour);
			$this->setNom($nom);
			$this->setNiveau($niveau);
			$this->setVideo($video);
			$this->setImage($image);
			$this->setQuizz($quizz);
			$this->setDescription($description);

// On incrémente à chaque creation d'object 
			self::$_compteur++;

			} 

			public function hydrate(array $donnees)
{
  foreach ($donnees as $key => $value)
  {
    // On récupère le nom du setter correspondant à l'attribut.
    $method = 'set'.ucfirst($key);
        
    // Si le setter correspondant existe.
    if (method_exists($this, $method))
    {
      // On appelle le setter.
      $this->$method($value);
    }
  }
}
}



