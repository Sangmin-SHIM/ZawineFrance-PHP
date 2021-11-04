<?php
  session_start();
  include('includes/connection.php');
  
  ?>

<div class="container">
                
                <div class="col-md-5 col-12 text-right">
                      <p class="my-md-4 login">
                        <?php
                        //Validation Session 'userlogin' par login.php
                        if(isset($_SESSION['userlogin']))
                        {
                          $nom=$_SESSION['userlogin'];
                          $query=$dbh->prepare("SELECT nom,prenom,email FROM users WHERE
                          (nom=:nom || email=:nom)");
                          $query->execute(array(':nom'=>$nom));
                          $result=$query->fetchAll(PDO::FETCH_OBJ);
    
    
                          if (session_status() == PHP_SESSION_ACTIVE) {
                          echo 'You are logged in !<br>';}
    
                          echo "$nom", "   :-)";
                          echo "<br><a href='logout.php'>Logout</a>";
                          echo "<br><br> You're logged in that's why you are here.";
                        } else  
                        { 
                            header("Location: login.php");
                        }
                        ?>
                      </p>
                </div>
        </div>