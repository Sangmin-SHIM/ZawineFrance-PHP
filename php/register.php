<?php

//BDD Configuration File
include('includes/connection.php');
error_reporting(0);
if(isset($_POST['register-submit']))
{

  //POST
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pwd = password_hash($_POST['pwd'],PASSWORD_BCRYPT);

//Si pwd n'est pas la meme que pwd-repeat
if($_POST['pwd'] !== $_POST['pwd-repeat']) {
  header("Location: includes/pwderror.php");
  exit(); 
}

//Query
$ret="SELECT * FROM users WHERE email=:email";
$queryt= $dbh-> prepare($ret);
$queryt->bindParam(':email',$email,PDO::PARAM_STR);
$queryt-> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt-> rowCount() == 0)
{

  //Query pour Inscription
$sql = "INSERT INTO users(nom,prenom,email,pwd) VALUES(:nom,:prenom,:email,:pwd)";
$query= $dbh->prepare($sql);

//Bind POST VALUES
$query->bindParam(':nom',$nom,PDO::PARAM_STR);
$query->bindParam(':prenom',$prenom,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':pwd',$pwd,PDO::PARAM_STR);
$query->execute();
$msg="Bienvenue !";
}
else { echo "<script>alert('E-mail déjà existant.')</script>";
}
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="shortcut icon" href="../images/GKM.ico">
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

</head>
<body>
    <img class="wave" src="../images/register/wave.png">
    <div class="container">
        <div class="img">
          <img src="../images/register/bg.svg">
        </div> 

        <div class="login-container">

        <form action='' method="post">
              <img class="avatar" src="../images/register/GKM.jpg">
              <h2>Bienvenue</h2>

<!--Error Message-->
<?php if($error){ ?><div class="errorWrap">
                <strong class="bold-red">Error </strong> : <?php echo htmlentities($error);?></div>
                <?php } ?> 
<!--Success Message-->
  <?php if($msg){ ?><div class="succWrap">
                <div><strong> Inscription Réussite. </strong>Bienvenue sur<br><a href="index.php">Zawine France</a></div>  <?php echo "<script>alert('Inscription Réussite !')</script>";?></div>
                <?php } ?> 


              <!-- NOM -->
              <br>
              <div class="input-div one">
                  <div class="i">
                      <i class="fas fa-user">
                      </i>
                  </div>
                  <div>
                    <h5>Nom</h5>
                    <input class="input" type="text" name="nom" required>
                   </div>
              </div>
              <!-- ID -->
              <div class="input-div one">
                  <div class="i">
                      <i class="fas fa-user">
                      </i>
                  </div>
                  <div>
                    <h5>Prénom</h5>
                    <input class="input" type="text" name="prenom" required>
                   </div>
              </div>
              <!--E-Mail-->
              <div class="input-div two">
                  <div class="i">
                      <i class="fas fa-at">
                      </i>
                  </div>
                  <div>
                    <h5>E-mail</h5>
                    <input class="input" type="email" name="email" onBlur="checkEmailAvailability()" required>
                    <span id="email-availability-status"></span>
                  </div>
              </div>
              <!--/E-Mail-->
              <!--Mot de Passe-->
              <div class="input-div">
                  <div class="i">
                      <i class="fas fa-lock">
                      </i>
                  </div>
                  <div>
                    <h5>Mot de passe</h5>
                    <input class="input" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'The Password must be at least 4 characters long.' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" name="pwd" required>
                  </div>
              </div>
              <!--/Mot de Passe-->
              <div class="input-div">
                  <div class="i">
                      <i class="fas fa-lock">
                      </i>
                  </div>
                  <div>
                    <h5>Confirmation Mot de passe</h5>
                    <input class="input" type="password" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'The Password must be at least 4 characters long.' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"  name="pwd-repeat" required>
                  </div>
              </div>
              <!--Partie Login--> 
              <input type="submit" class="btn" value="S'inscrire" name="register-submit">
            </form>
           </div>
         </div>

<script type="text/javascript" src="../js/register.js"></script>

</body>
</html>
