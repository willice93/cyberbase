

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

                               <?php 
                                 $x=0;
                                 if (isset($_GET['quest'])) {
                                   $y=$_GET['quest'];
                                 }
                                 else{$y=1;}
                                 
echo' <form method="POST" action="courView.php?quest='.$y.'"> ';
                                  $reponsesQ1 = explode("-", $reponse[$y]);
                              //on ecrit la question 
                              echo '<h2>'.$reponsesQ1[0].'</h2><br>';//question
                              //cherche la bonne reponse 
                              $findme   = '*';

                              //generer les value a la voléé

                              for ($i=1; $i <5 ; $i++) { 
                                $pos = strpos($reponsesQ1[$i], $findme);
                              if ($pos === false) {echo'<input type="radio" name="a1" value="0">'.$reponsesQ1[$i].'<br>';} 
                              else {$answer=explode("*", $reponsesQ1[$i]);

                                      echo'<input type="radio" name="a1" value="1">'.$answer[1].'<br>';}
                              }
                                ?>
                                <br>
                              <input type="submit" value="validez" ">
                                </form>
</div>
<div id='correction'>
  <?php if (isset($_POST['a1'])){
    if($_POST['a1']==1){ $y++; header('Location: courView.php?quest='.$y) ; }
    elseif ($_POST['a1']==0) {
      
     echo $y;
    }
}
else{}


  ?>
</div>
  <div class="progress col-sm-3">
<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
<span class="sr-only">40% effectué (success)</span>
</div>
</div> 



   

    
  </div>
</div>
 </div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

