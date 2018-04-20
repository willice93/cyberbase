

<?php include '../head.php';
include'modelQcm.php';
?>
<body>

<?php include('menuUser.php');$video="BIBLIOTHEQUE.mp4";?>
<div class="container-fluid text-center">    
  <div class="row content">
                  
  
           <div class="col-sm-6 text-left"> 
     
                  
                    
                      <?php echo'<video width="600" height="400" controls="controls" src='.$video.'>';?>
                    
               
	
 </div>
 <div class="col-sm-6 text-left"> 

  <form>
    <?php
    $reponsesQ1 = explode("-", $reponse1);
//on ecrit la question 
echo $reponsesQ1[0].'<br>';//question
echo '<br>';
//on propose les reponses 

  echo'<input type="checkbox" name="a1" value="">'.$reponsesQ1[1].'<br>';
  echo'<input type="checkbox" name="a2" value="">'.$reponsesQ1[2].'<br>';
  echo'<input type="checkbox" name="a3" value="">'.$reponsesQ1[3].'<br>';
  echo'<input type="checkbox" name="a4" value="">'.$reponsesQ1[4].'<br>';

$findme   = '*';


for ($i=0; $i <5 ; $i++) { 
  $pos = strpos($reponsesQ1[$i], $findme);
if ($pos === false) {} else {echo $reponsesQ1[$i].'<br>';}
}?>

	<input type="submit" value="envoyer" class="btn btn-primary">
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

