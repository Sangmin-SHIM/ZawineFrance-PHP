<?php 

include ('includes/connection.php');
session_start();

?>

<style>
    /*Contact sectiom*/

.content-header {
    /*font-family: 'Oleo Script', cursive;*/
    color: #cd853f;
    font-size: 45px;
}

.section-content {
    text-align: center;
}

#contact {
    /*font-family:cursive;*/
    padding-top: 0px;
    width: 100vw;
    height: 150%;
    background: #820000;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #820000, #820000);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #820000, #820000);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: #fff;
}

.contact-section {
    padding-top: 40px;
    color: #cd853f;
}

.contact-section .col-md-6 {
    width: 50%;
}

.form-line {
    border-right: 1px solid #B29999;
}

.form-group {
    margin-top: 10px;
}

label {
    font-size: 1.5em;
    line-height: 1em;
    font-weight: normal !important;
}



textarea.form-control {
    height:0px;
    /* margin-top: px;*/
}

.submit {
    font-size: 2em;
    float: left;
    width: 200px;
    background-color: #cd853f;
    color: #fff ;
    text-align: center;
}

}
</style>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="shortcut icon" href="../images/GKM.ico">

<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/text.css">
<title> Contacter ZawineFrance</title>

<?php
if(isset($_POST["ENVOYER"]))
    {
        echo '<div class="alert alert-success" style="margin-bottom:0px !important;">Votre message a été bien envoyé.</div>';
        unset($_SESSION["ENVOYER"]);
    }
?>


<div id="contact">
    <div class="section-content">
  

        <h2 class="section-header" style="margin-top:0px !important;">Contactez <br> <span class="content-header wow fadeIn " data-wow-delay="0.1s" data-wow-duration="1s"> Zawine France<br>06.50.67.59.77<br>contact@zawinefrance.fr</span></h2>
        <div class="container">
        <h3>ZAWINE FRANCE est là pour repondre à toutes vos questions. <br> N’hésitez pas à nous contacter par mail ou par téléphone
        </h3>
        </div>
    </div>
    <form action="contact.php" method="POST">
        <div class="contact-section">
            <div class="container">
                <div class="col-md-6 col-sm-6  form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">*NOM</label>
                        <input type="name" name="nom" class="form-control" id="" placeholder=" Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">*PRENOM</label>
                        <input type="name" class="form-control" name="prenom" id="exampleInputEmail" placeholder=" Entrez votre prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">*EMAIL</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder=" Entrez votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="text">*SUJET</label>
                        <input type="text" class="form-control" name="sujet" placeholder="Entrez votre sujet" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="description">*MESSAGE</label>
                        <textarea class="form-control" name="message" id="description" placeholder="Entrez votre message"></textarea>
                    </div>
                    <div>
                    <input type="checkbox" required>
                    <span>En soumettant ce formulaire, j'accepte que les informations saisies soient utilisées pour des actions commerciales. Pour plus d'information, consultez notre politique de confidentialité.</span>
                    </div>

                    <br>
                    <br>
                    <input name="ENVOYER" type="submit" class="submit" value="ENVOYER">
                    </form> 
    
    </div>
</div>

<?php
if (isset($_POST['ENVOYER'])) {

    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $sql = $dbh->prepare("Insert into contact(
                nom,
                prenom,
               email,
               sujet,
                message )
    
                values(:nom,:prenom,:email,:sujet,:message)");
    $sql->execute(array(
        ':nom' => $Nom,
        ':prenom' => $Prenom,
        ':email' => $email,
        ':sujet' => $sujet,
        ':message' => $message,
    ));
    

} elseif ($Nom = "" || $Prenom = "" || $email = "" || $sujet = ""|| $message = "") {
    echo "<h2>Impossible de se connecter à la base de données</h2>";
}
?>