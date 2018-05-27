<?php
class courManager
{
 private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Cour $cour)
  {
    $q = $this->_db->prepare('INSERT INTO cour (idcour, niveau_cour, nom_cour, video_cour, img_cour, quizz_cour, description) VALUES(:idcour, :niveau_cour, :nom_cour, :video_cour, :img_cour, :quizz_cour, :description)');

    $q->bindValue(':idcour', $cour->idcour());
	$q->bindValue(':nom_cour', $cour->nom());
    $q->bindValue(':niveau_cour', $cour->niveau());
    $q->bindValue(':video_cour', $cour->video());
    $q->bindValue(':img_cour', $cour->image());
    $q->bindValue(':quizz_cour', $cour->quizz());
    $q->bindValue(':description', $cour->description());

    $q->execute();
  }

  public function delete(Cour $cour)
  {
    $this->_db->exec('DELETE FROM cour WHERE id = '.$cour->id());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT * FROM cour WHERE idcour = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new Cour($donnees);
  }

  public function getList()
  {
    $cours = [];

    $q = $this->_db->query('SELECT * FROM cour ORDER BY nom_cour');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $cours[] = new Cour($donnees);
    }

    return $cours ;
  }

  public function update(Cour $cour)
  {
    $q = $this->_db->prepare('UPDATE cour SET nom = :nom_cour, niveau = :niveau_cour, video = :video_cour, image = :img_cour, description = :description WHERE idcour = :id');

    $q->bindValue(':nom', $cour->nom());
    $q->bindValue(':niveau', $cour->niveau());
    $q->bindValue(':video', $cour->video());
    $q->bindValue(':description', $cour->description());
    $q->bindValue(':id', $cour->id());

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}