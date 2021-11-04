<?php
  session_start();
  include('includes/connection.php');
  ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Zawine France Page Grands Crus Classés</title>

    <!--Icon -->
		<link rel="shortcut icon" href="../images/GKM.ico">
	    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/online.css"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="../js/fontawesome.js"></script>

    <!-- new nav -->
    <link href="../css/newnav.css" rel="stylesheet">    
    <!-- /new nav -->

    <!-- Products Css -->
    <link rel="stylesheet" href="../css/product.css">

    <!-- Favicons -->
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">


</head>
<body class="bodynewnav">
 <!-- Nav -->
 <header class="newnav">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-12 text-centers">
          <a class="my-md-3 site-title text-Black" style="font-family:Fredericka the Great;">Zawine France</a>
        </div>
        
        </div>
      </div>
    <br>
        <div class="container-nav">
            <nav>
                <div class="menu-icons">
                    <i class="fas fa-bars"></i>         
                    <i class="fas fa-times"></i>   
                </div>
               <!-- Test <a href="index.php" class="logo">
                    <i class="fas fa-wine-glass-alt"></i>
                </a> -->
                <ul class="nav-list">
                   <li>
                        <a href="index.php">Home</a>
                    </li>


                    <li>
                        <a href="#">VIN
                        <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="grands.php">Grands Crus Classés
                                </a>

                            </li>
                            <li>
                                <a href="moins40.php">Moins de 40 Euros
                                </a>
                                
                            </li>
                            <li>
                                <a href="#">événement
                                <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>  
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">Mariage</a>
                                                </li>
                                                <li>
                                                    <a href="#">Soirée</a>
                                                </li>
                                            </ul> 
                                    </li>
                                    <li>
                                        <a href="mariage.php">Mariage</a>
                                    </li>
                                    <li>
                                        <a href="loisirs.php">Loisirs</a>
                                    </li>
                                </ul>  
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Domaine
                        <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                                                <li>
                                                    <a href="arpaillan.php">Arpaillan</a>
                                                </li>
                                                <li>
                                                    <a href="brondeau.php">Brondeau Lalande</a>
                                                </li>
                        </ul> 
                    </li>

                    <li>
                        <a href="../blog.html">Blog</a>
                    </li>

                    <li class="move-right btn">
                        <a href="contact.php" class="move-a">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


<br><br><br><br><br><br><br><br>
		
<div class=sangmin>
					<div class="s1">
					<!-- My Part-->
          <a href="panier.php" class="iconbtn fas fa-shopping-cart" data-info="Ma Liste" title="panier"></a>
          <a href="order.php" class="iconbtn fas fa-cash-register" data-info="Ma Liste" title="paiement"></a>
					<!-- /My Part-->
          </div>
</div>
               <div class="container">
                        
                    <div class="col-md-5 col-12 text-right">
                          <p class="my-md-4 login">
                            <?php
                            //Validation Session 'userlogin' par login.php
                            if(isset($_SESSION['userlogin']))
                            {
                            //$_SESSION['userlogin'] = $_POST['email'];
                              $nom=$_SESSION['userlogin'];
                              $query=$dbh->prepare("SELECT nom,prenom,email FROM users WHERE
                              (nom=:nom || email=:nom)");
                              $query->execute(array(':nom'=>$nom));
                              $result=$query->fetchAll(PDO::FETCH_OBJ);
                        
                              echo "Bonjour, ", "$nom", "   :-)";
                              echo "<br><a href='logout.php'>Logout</a>";
                            } else  
                            { 
                              echo "<a href='login.php' class='login px-a'>S'identifier</a>";
                              echo "<a href='register.php' class='login px-b'>Inscription</a>";
                            }
                            ?>
                          </p>
                        </div>
                    </div>
                  </div>
            </header>
        

<main role="main">

<?php
if(isset($_POST["envoyer"]))
    {
        echo '<div class="alert alert-success">Votre dévis a été bien ajouté.</div>';
        unset($_SESSION["envoyer"]);
    }
?>


<div class="container-fluid p-0">
          <div class="site-slider">
            <div class="slider-one">
              <div>
                <img src="images/Event/mariage1.jpg" class="img-fluid" style="margin-left:auto; margin-right:auto; display:block;" alt="Test 1">
              </div>
              <div>
                <img src="images/Event/mariage2.jpg" class="img-fluid" style="margin-left:auto; margin-right:auto; display:block;" alt="Test 2">
              </div>
              <div>
                <img src="images/Event/mariage3.jpg" class="img-fluid" style="margin-left:auto; margin-right:auto; display:block;" alt="Test 3">
              </div>
            </div>
            <div class="slider-btn">
              <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
              <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
        </div>
       
<!-- Product Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product   -->

		<!-- Main view -->
		<div class="view">
			<!-- Product grid -->
			<section class="grido">
				<!-- Products -->

				<div class="product">
					<div class="product__info">
                        <div>
                                <img class="product__image" src="../images/11.png" alt="Product 1" />
                                
                        </div>


						<h5 class="product__title">Chryseia</h5>

					</div>
				</div>


				<div class="product">
					<div class=" product__info">
                        <div>
                            <img class="product__image" src="../images/11.png" alt="Product 2" />
                            
                        </div>
						<h3 class="product__title">Meiomi Pinot Noir</h3>

					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                            <img class="product__image" src="../images/11.png" alt="Product 3" />
                            
                        </div>

						<h3 class="product__title">Antucura</h3>

					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 4" />
                        
                        </div>
						<h3 class="product__title">Leonetti Sangiovese</h3>


					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 5" />
                        
                        </div>
						<h3 class="product__title">Chateau</h3>


					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 6" />
                        
                        </div>
						<h3 class="product__title">Quintessa</h3>

					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 7" />
                        
                        </div>
						<h3 class="product__title">Clarendon</h3>

					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 8" />
                        
                        </div>
						<h3 class="product__title">Lapostolle</h3>
	

					</div>
	            </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 9" />
                        
                        </div>
						<h3 class="product__title">Bodega larumin</h3>

					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 10" />
                        
                        </div>
						<h3 class="product__title">Montevertin gooda</h3>

					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 11" />
                        
                        </div>
						<h3 class="product__title">Massolino </h3>

					</div>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/11.png" alt="Product 12" />
                        
                        </div>
						<h3 class="product__title">Chateau Branai</h3>

                    </div>
				</div>
			</section>
        </div>        


        <?php

if (isset($_POST['envoyer'])) {

    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Telephone = $_POST['telephone'];
    $Email = $_POST['email'];
    $Datedemariage = $_POST['datedemariage'];
    $Departement = $_POST['departement'];
    $Votrebudget = $_POST['votrebudget'];
    $Nombredadultes = $_POST["nombredadultes"];
    $Decrivezvosbesoins = $_POST['decrivezvosbesoins'];
    $mecontacterpar = "";
    foreach ($_POST['mecontacterpar'] as $valeurChoisie) {
        $mecontacterpar .= $valeurChoisie . ",";
    }
    $pourlevindhonneur = "";
    foreach ($_POST['pourlevindhonneur'] as $valeurChoisie) {
        $pourlevindhonneur .= $valeurChoisie . ",";
    }
    $pourlerepas = "";
    foreach ($_POST['pourlerepas'] as $valeurChoisie) {
        $pourlerepas .= $valeurChoisie . ",";
    }
    $pourledessert = "";
    foreach ($_POST['pourledessert'] as $valeurChoisie) {
        $pourledessert .= $valeurChoisie . ",";
    }

    $sql = $dbh->prepare("Insert into devis(
nom,
prenom,
telephone,
email,
datedemariage,
departement,
votrebudget,
nombresdadultes,
decrivezvosbesoins,
mecontacterpar,
pourlevindhonneur,
pourlerepas,
pourledessert
)

values(:nom,:prenom,:telephone,:email,:datedemariage,:departement,:votrebudget,:nombredadultes,:decrivezvosbesoins,:mecontacterpar,:pourlevindhonneur,:pourlerepas,:pourledessert)");
    $sql->execute(array(
        ':nom' => $Nom,
        ':prenom' => $Prenom,
        ':telephone' => $Telephone,
        ':email' => $Email,
        ':datedemariage' => $Datedemariage,
        ':departement' => $Departement,
        ':votrebudget' => $Votrebudget,
        ':nombredadultes' => $Nombredadultes,
        ':decrivezvosbesoins' => $Decrivezvosbesoins,
        ':mecontacterpar' => $mecontacterpar,
        ':pourlevindhonneur' => $pourlevindhonneur,
        ':pourlerepas' => $pourlerepas,
        ':pourledessert' => $pourledessert
    ));

    echo "<h1>Votre devis a été ajouté</h1>";
} elseif ($Nom = "" || $Prenom = "" || $Telephone = "" || $Datedemariage = "" || $Departement = "" || $Votrebudget = "" || $Nombredadultes = "" || $Decrivezvosbesoins = "" || $Mecontacterpar = "" || $Pourlevindhonneur = "" || $Pourlerepas = "" || $Pourledessert = "") {
    echo "<h2>Impossible de se connecter à la base de données</h2>";
}
?>

<!-- /Product Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product  Product   -->
<form action="mariage.php" method="POST">
                        <div class="devis" style="border: solid; padding: 30px; border-radius: 15px;">

                            <h3 class="text-danger">Votre Devis Personnalisé - Pour MARIAGE</h3>
                            <b>Vos informations</b>
                            <div class="row">
                                <div style="border-right: solid;border-color: lightgrey" class="col-lg-4">
                                    <div class="form-group">
                                        <span style="color: red">*</span> <label for="exampleInputEmail1">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <span style="color: red">*</span> <label for="exampleInputPassword1">Prenom</label>
                                        <input type="text" class="form-control" name="prenom" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <span style="color: red">*</span> <label for="exampleInputPassword1">Téléphone</label>
                                        <input type="tel" class="form-control" name="telephone" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <span style="color: red">*</span> <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <span style="color: red">*</span> <label for="exampleInputPassword1">Date de marriage</label>
                                        <input type="date" class="form-control" name="datedemariage" id="exampleInputPassword1">
                                    </div>
                                </div>

                                <div style="border-right: solid;border-color: lightgrey" class="col-lg-4 ">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Département</label>
                                        <input type="text" class="form-control" name="departement" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Votre budget (EURO)</label>
                                        <select class="form-control" name="votrebudget" id="exampleFormControlSelect1">
                                            <option>300-500</option>
                                            <option>600-1000</option>
                                            <option>1100-2000</option>
                                            <option>2000-50000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span style="color: red">*</span> <label for="exampleInputPassword1">Nombre d'adultes</label>
                                        <input type="number" class="form-control" name="nombredadultes" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Décriver vos besoins</label>
                                        <textarea class="form-control" id="besoin" name="decrivezvosbesoins" rows="5" cols="60"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="">Me contacter par </label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="mecontacterpar[]" value="tel">
                                            <label class="form-check-label" for="inlineCheckbox1">Téléphone</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="mecontacterpar[]" value="email">
                                            <label class="form-check-label" for="inlineCheckbox1">Email</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4 class="text-danger">Vos préférences</h4>
                            <div class="row">
                                <div class="col-lg-4" style="border-right: solid;border-color: lightgrey">
                                    POUR LE VIN D'HONNEUR
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlevindhonneur[]" id="exampleRadios1" value="Champagne">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Champagne
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlevindhonneur[]" id="exampleRadios1" value="Vinmoelleux">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin moelleux
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlevindhonneur[]" id="exampleRadios1" value="Effervescent">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Effervescent
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlevindhonneur[]" id="exampleRadios1" value="Vinrouge">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin rouge
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlevindhonneur[]" id="exampleRadios1" value="Vinblanc">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin blanc
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlevindhonneur[]" id="exampleRadios1" value="Vinrose">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin rosé
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4" style="border-right: solid;border-color: lightgrey">
                                    POUR LE REPAS
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlerepas[]" id="exampleRadios1" value="Champagne">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Champagne
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlerepas[]" id="exampleRadios1" value="Vinmoelleux">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin moelleux
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlerepas[]" id="exampleRadios1" value="Effervescent">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Effervescent
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlerepas[]" id="exampleRadios1" value="Vinrouge">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin rouge
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlerepas[]" id="exampleRadios1" value="Vinblanc">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin blanc
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourlerepas[]" id="exampleRadios1" value="Vinrose">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin rosé
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    POUR LE DESSERT
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourledessert[]" id="exampleRadios1" value="Champagne">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Champagne
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourledessert[]" id="exampleRadios1" value="Vinmoelleux">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin moelleux
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourledessert[]" id="exampleRadios1" value="Effervescent">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Effervescent
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourledessert[]" id="exampleRadios1" value="Spiritueux">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Spiritueux
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourledessert[]" id="exampleRadios1" value="Vinrouge">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin rouge
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourledessert[]" id="exampleRadios1" value="Vinblanc">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin blanc
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pourledessert[]" id="exampleRadios1" value="Vinrose">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Vin rosé
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <span style="font-size: 10px" class="text-danger">* Veuillez remplir tous les champs obligatoires, vos données ne seront utilisées que pour vous transmettre une proposition, et ne seront en aucun cas transmises à des tiers.</span>
                                    <br> <br>
                                    <button type="submit" name="envoyer" class="btn btn-dark btn-sm">
                                     <svg class=" bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        </svg>
                                        ENVOYER
                                    </button>
                                </div>
                            </div>
                        </div>

                        </br>
                </div>
            </div>
            </form>


    <!-- Facilities -->
    <div class="row">
  <div class="container facility text-center grands" style="
    display: grid;
    grid-auto-columns: 1fr;
    grid-auto-flow: column;
    margin:auto;">
  
  <div class="column facility">
  <div class="icon-facility">
        <i class="fas fa-truck" style="color:white; font-size:40px;"></i>
  </div>
  <a class="facility-a" style="color:white; font-size:20px;">Livraison Gratuite</a>
  </div>


  <div class="column facility">
  <div class="icon-facility">
      <i class="fas fa-wine-glass-alt" style="color:white; font-size:40px;"></i>  
  </div>
  <a class="facility-a" style="color:white; font-size:20px;">Qualité de Vin Garantie</a>
  </div>


  <div class="column facility">
  <div class="icon-facility">
      <i class="fas fa-envelope" style="color:white; font-size:40px;"></i> 
  </div>
  <a class="facility-a" style="color:white; font-size:20px;" href="contact.php">Des Questions ? <br> Demandez-Nous ! </a>
  </div>


  </div>
  </div>     
    <!-- /Facilities -->
  </main>

<!--- /Main Section -->
      <br><br>


<footer>

<div class="container">
<div class="row">
<div class="container footers" style="padding:30px;">

<div class="footer-menu"  style="align-items:center !important;">  
  <h1 style="color:#cd853e;">Zawine France</h1>
  <h3 style="color:#ffffff">Nous Contacter</h3>
  <ul>
    <li style="color:#ffffff"><i class="fas fa-phone"></i>&nbsp 06.50.67.59.77</li>
    <li style="color:#ffffff"><i class="fas fa-at"></i>&nbsp contact@zawinefrance.fr</li>
  </ul>
  <div style="text-align:center;">
      <div>
      <i class="fab fa-instagram" style="color:#ffffff"></i>  
      <i class="fab fa-facebook" style="color:#ffffff"></i>
      </div>
  </div>
</div>


<div class="footer-menu">
  <h2 style="color:#ffffff">Navigation</h2>
  <ul>
    <li style="color:#ffffff"><i class="fas fa-arrow-circle-right"></i><a href="moins40.php" style="color:white;">&nbsp Nos vins à moins de 40 euros</a></li>
    <li style="color:#ffffff"><i class="fas fa-arrow-circle-right"></i><a href="grands.php" style="color:white;">&nbsp Cave grands crus classés</a></li>
    <li style="color:#ffffff"><i class="fas fa-arrow-circle-right"></i><a href="arpaillan.php" style="color:white;">&nbsp Domaine d'Arpaillan</a></li>
    <li style="color:#ffffff"><i class="fas fa-arrow-circle-right"></i><a href="brondeau.php" style="color:white;">&nbsp Domaine de Brondeau Lalande</a></li>
  </ul>
  <div></div>
</div>

<div class="footer-menu">
  <h2 style="color:#ffffff">Société</h2>
  <ul>
    <li style="color:#ffffff"><i class="fas fa-arrow-circle-right"></i><a href="mentions_legales.php" style="color:white;">&nbsp Mentions légales</a></li>
    <li style="color:#ffffff"><i class="fas fa-arrow-circle-right"></i><a href="conditions_generales.php" style="color:white;">&nbsp Conditions générales de vente</li>
  </ul>
</div>
</div>
</div>


<!-- Payment Layout -->
<div class="row" style="margin:auto;">
    <div class="container text-center">
        <p class="pt-5">
          <img src="images/assets/payment.png" alt="payment image" class="img-fluid">
        </p>
        <small class="text-secondary py-4">Zawine France © 2020 Wine Store. All Rights Reserved. Designed by Sangmin SHIM, Aminata MBATHIE</small>
    </div>
</div>  
<!-- /Payment Layout -->
</div>


        
</footer>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="/docs/4.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd"
        crossorigin="anonymous"></script>

<!-- New Nav -->
<script src="../js/newnav.js"></script>
<!-- /New Nav -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>

  <script src="../js/slick.js"></script>
  <script src="../js/online.js"></script>


</html>
