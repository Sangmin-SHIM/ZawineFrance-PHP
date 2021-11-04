<?php
session_start();

//BDD
include('includes/connection.php');
error_reporting(0);

if(isset($_POST['login']))
{

  //POST
$email=$_POST['email'];
$pwd=$_POST['pwd'];

//Query
$sql="SELECT nom, prenom, email, pwd FROM users WHERE email=:email";
$query=$dbh-> prepare($sql);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$result=$query->fetch(PDO::FETCH_ASSOC);

if($query-> rowCount() > 0)
{   
    if(!password_verify($pwd, $result['pwd'])) {
      echo "<script>alert('Invalide !')</script>";
      die();
    } 
    //SESSION 'userlogin' Starts here
    $_SESSION['userlogin'] = $_POST['email'];
    echo "<script>alert('Bienvenue !')</script>";
    header("Location: index.php");

  }

  else if($query-> rowCount() == 0)
{
  echo "<script>alert('Il n y en a pas')</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/fontawesome.js"></script>
    
        <!-- Javascript Pour Check E-mail Availability-->
    <script>
    function checkEmailAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
      url: "includes/check.php",
      data: 'email='+$("#email").val(),
      type: "POST",
      success:function(data){
      $("#email-availability-status").html(data);
      $("#loaderIcon").hide();
      },
      error:function(){
        event.preventDefault();
      }
      });
      }
    </script>



<link rel="shortcut icon" href="../images/GKM.ico">
</head>
<body>

    <img class="wave" src="../images/register/wave2.png">
    <div class="container">
        <div class="img">
          <img src="../images/register/login.svg">
         </div>
    
        <div class="login-container">
          <form method="post" class="form-horizontal">
              <img class="avatar" src="../images/register/GKM.jpg">
              <h2>Bienvenue</h2>
              <!--E-Mail-->
              <div class="input-div two">
                  <div class="i">
                      <i class="fas fa-at">
                      </i>
                  </div>
                  <div>
                    <h5>E-mail</h5>
                    <input class="input" type="text" name="email" onBlur="checkEmailAvailability()" required>
                  </div>
              </div>
              <!--Mot de Passe-->
              <div class="input-div">
                  <div class="i">
                      <i class="fas fa-lock">
                      </i>
                  </div>
                  <div>
                    <h5>Mot de passe</h5>
                    <input class="input" type="password" name="pwd" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Vous devez saisir au moins 4 caractères' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
                  </div>
              </div>
              <a> Mot de Passe oublié ? </a>
              <!--Partie Login-->
              <input type="submit" class="btn" name="login" value="login">
            
            </form>
        </div>
    
    </div>

    <script type="text/javascript" src="../js/login.js"></script>
</body>
</html>

