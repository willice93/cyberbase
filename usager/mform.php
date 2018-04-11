<?php include '../head.php';?>
<?php  include('../inc.session.php');?>
<body>

<?php include('menuAnim.php');?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     <?php include('../leftSide.php');?>
    </div>
    <div class="col-sm-8 form-group">
           <div class="col-sm-4 text-left"> 
      <h3><b>Modifier usager</b></h3><br>

    <form  action="addusager.php" method="POST">
	numero de carte <input required type="text" name="carte" class='form-control col-xs-3'><br>
	nom:<input required type="text" name="nom" class='form-control'><br>
	prenom:<input required type="text" name="prenom" class='form-control' ><br>
	date de naissance<input required type="date" name="date_naissance" class='form-control'><br>
	mot de passe<input required type="text" name="mdp" class='form-control'><br>
	
 </div>
 <div class="col-sm-4 text-left"> 
<h3><b>Adresse:</b></h3><br>
  Numero de rue: <input required type="text" name="rue" class='form-control'><br>
  Libellé: <input required type="text" name="libelle" class='form-control'><br>
  code postale: <input required type="text" name="code_postale" class='form-control'><br>
  Ville: <input required type="text" name="ville" class='form-control'><br>
  niveau:<input required type="text" name="niveau" class='form-control'><br>
	<input type="submit" value="envoyer" class="btn btn-primary">
</div>
</form>
</div>
   

  </div>
</div>
 </div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

