
<?php include '../head.php';?>
<body>

<?php include('menuUser.php');?>

<div class="container-fluid text-center">    
  <div class="row content">
         <section>        
          <!--video-->
           <div id="video" class="col-sm-6 text-left">                     
                      <?php 
                                  //concatenation lien video
            $src='src="../video/'.$video.'">';
            $link='<video width="600" height="400" controls="controls"'.$src.'' ;
                                  echo $link;
                        ?>                           
             </div>
             </section> 
          <section>
 <div class="col-sm-6 text-left"> 
                               <?php 
                                 $x=0;
                                 if (isset($_GET['quest'])) {
                                   $y=$_GET['quest'];
                                 }
                                 else{$y=1;}
                                 
                          echo' <form method="POST" action=index.php?quest='.$y.'> ';
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
                                      <input type="submit" value="validez" "><br>
                                        </form>
                                     

      </div>
                      <div id='correction ' >

                                    <?php 

                                         if (isset($_POST['a1'])){
                                      if($_POST['a1']==1){ $y++; 
                                        if ($num>$y) {
                                          echo'<div class="alert alert-success  col-sm-2"><strong>Bravo!</strong> Bonne reponse.Notez la et continuez</div>';
                                           
                                        
                                        echo'   <a href="index.php?quest='.$y.'" class="btn btn-info" role="button">Je continue</a> ';}
                                           

                                           else{'echo cours fini';}
  
                                                      }

                                           
                                      elseif ($_POST['a1']==0) {
                                        
                                       echo' <div class="alert alert-warning x col-sm-2">
                                            <strong>Faux!</strong> Recommencez
                                              </div>';
                                                      }
                                                  }
                                                  else{}
                                                    
                                                      $prct=$y*100/$num;
                                                 
                                                  ?>

                            </div>
                        <div class="progress col-sm-5">
                            <?php echo '<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '.$prct.'%">';?>

                      </div>
</div> 



   

    
  </div>
 </section>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

