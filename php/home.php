<?php
  session_start();
  include('includes/connection.php');
  
  ?>


<!DOCTYPE html>
<html lang="fr" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Zawine France Page d'accueil</title>

        <!--Icon -->
		<link rel="shortcut icon" href="../images/GKM.ico">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        <!-- /Coeur et Panier Icon -->

        <!-- Page d'accueil-->
        
               <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>

                <!-- Font Awesome CDN -->
        <script src="../js/fontawesome.js"></script>

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
               
              <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="../css/online.css"/>

                <!-- Slick Slider -->
        <link rel="stylesheet" href="../css/slick.css">
        <!-- /Page d'accueil-->


        <!-- new nav-->
        <link href="../css/newnav.css" rel="stylesheet">
        <!-- /new Nav-->

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
                        <a href="home.php">Home</a>
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
                                                    <a href="mariage.php">Mariage</a>
                                                </li>
                                                <li>
                                                    <a href="loisirs.php">Soirée</a>
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
                            
                         $email=$_SESSION['userlogin'];
                         $query=$dbh->prepare("SELECT nom,prenom,email FROM users WHERE
                         (email=:email)");

                         $query->execute(array('email'=>$email));

                         //$query->execute(array(':nom'=>$nom));
                         $result=$query->fetchAll(PDO::FETCH_OBJ);
    
    
                          if (session_status() == PHP_SESSION_ACTIVE) {
                          //echo 'You are logged in !<br>';
                          echo 'Bonjour, ';}
    
                        }  
                        else  
                        { 
                        echo "<a href='login.php' class='login px-a'>S'identifier</a>";
                        echo "<a href='register.php' class='login px-b'>Inscription</a>";
                        }
                        ?>




<?php
                        $query = "SELECT DISTINCT nom,prenom FROM users WHERE (email=:email)";

                        $statement=$dbh->prepare($query);
                        $statement->bindParam(':email',$email,PDO::PARAM_STR);
                        $statement->execute();
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                        
                        //echo '<pre>';
                        //print_r($result);
                        //echo '</pre>';

  
                        if(isset($_SESSION['userlogin'])){
                           
                            echo $result[0]['prenom'];
                            echo '&nbsp';
                            echo strtoupper($result[0]['nom']);
                            echo '&nbsp&nbsp ';
                            echo "<i class='far fa-kiss-wink-heart'></i>";

                            echo '&nbsp';
                            echo "<i class= 'fas fa-wine-glass-alt'></i>";

                            echo "<br><a href='logout.php'>Logout</a><br><br>";

                            }
?>
                </div>
        </div>

                  </p>
            </div>
    </div>
  </div>
</header>

    <main>
    <div class="container text-center">
    <div class="features">
        <h1 style="color:#cd853f;">Zawine est née d'une envie : 
" Rendre la qualité des plus grands vins accessible au plus grand nombre "</h1>
        
    </div>
    </div>

      <!--- First Slider -->
      <div class="container-fluid p-0">
          <div class="site-slider">
            <div class="slider-one">
              <div>
                <img src="images/1.jpg" class="img-fluid" style="margin-left:auto; margin-right:auto; display:block;" alt="Test 1">
              </div>
              <div>
                <img src="images/2.jpg" class="img-fluid" style="margin-left:auto; margin-right:auto; display:block;" alt="Test 2">
              </div>
              <div>
                <img src="images/3.jpg" class="img-fluid" style="margin-left:auto; margin-right:auto; display:block;" alt="Test 3">
              </div>
            </div>
            <div class="slider-btn">
              <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
              <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
      <!--- /First Slider -->

        <!--- Second Slider -->
        <div class="container text-center">
          <div class="features">
            <a href="grands.php" style="text-decoration:none; color:black;"><h1>Les Grands Crus Classés</h1></a>
              <p class="text-secondary">
              Essayez La Qualité
              </p>
          </div>
        </div>

      <div class="container-fluid p-0">
        <div class="site-slider-two px-md-4">
          <div class="row slider-two text-center">
            <div class="col-md-2 product pt-md-5 pt-4">
              <img src="images/Grands_Crus/Chateau-Bahans.jpg" class="img-fluid" alt="Product 1" />
              <span class="border site-btn btn-span">Bahans</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
              <img src="images/Grands_Crus/Chateau-Brane.jpg" class="img-fluid" alt="Product 2" />
              <span class="border site-btn btn-span">Brane</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
              <img src="images/Grands_Crus/Chateau-dissan.jpg" class="img-fluid" alt="Product 3" />
              <span class="border site-btn btn-span">Issan</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
              <img src="images/Grands_Crus/Chateau-Latour.jpg" class="img-fluid" alt="Product 4" />
              <span class="border site-btn btn-span">Latour</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
              <img src="images/Grands_Crus/Chateau-Lynch.jpg" class="img-fluid" alt="Product 5" />
              <span class="border site-btn btn-span">Lynch</span>
            </div>
            <div class="col-md-2 product pt-md-5 pt-4">
              <img src="images/Grands_Crus/Chateau-Latour.jpg" class="img-fluid" alt="Product 3" />
              <span class="border site-btn btn-span">Latour</span>
            </div>
          </div>
        <!--Flash-->
        <div class="slider-btn">
          <span class="prev position-top">
            <i class="fas fa-chevron-left fa-2x text-secondary"></i>
          </span>
          <span class="next position-top right-0">
            <i class="fas fa-chevron-right fa-2x text-secondary"></i>
          </span>
        </div>
    </div>
  </div>
  <!--- /Second Slider -->

  <hr class="hr"/>

    <!-- Title Features Section-->
    <div class="container text-center">
    <div class="features">
    <a href="moins40.php" style="text-decoration:none; color:black;"><h1>Moins de 40 Euros</h1></a>
        <p class="text-secondary">
        Achetez Moin Cher !
        </p>
    </div>
    </div>
    <!-- /Title Features Section-->

    <!-- Features Third Slider-->
    <div class="container-fluid">
        <div class="site-slider-three px-md-4">
          <div class="slider-three row text-center px-4">
            <!--1st Product-->
            <div class="col-md-2 product pt-md-5">
              <img src="images/Moins40/Chateau-Chatelet.jpg" class="img-fluid" alt="Image 1">
              <div class="cart-details">
                <h6 class="pro-title p-0">Château Le Châtelet</h6>
                <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="pro-price py-2">
                  <h5>
                    <small>
                    <s class="text-secondary">€40</s>
                    </small>
                    <span>
                    €28
                    </span>
                  </h5>
                </div>
                <div class="cart mt-4">
                  
              </div>
            </div>
          </div>
          <!--2nd Product-->
          <div class="col-md-2 product pt-md-5">
            <img src="images/Moins40/Chateau-Latour.jpg" class="img-fluid" alt="Image 2">
            <div class="cart-details">
              <h6 class="pro-title p-0">Château Latour Martillac</h6>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="pro-price py-2">
                <h5>
                  <small>
                  <s class="text-secondary">€30</s>
                  </small>
                  <span>
                  €25
                  </span>
                </h5>
              </div>
              <div class="cart mt-4">
                
              </div>
              </div>
            </div>
            <!--3rd Product-->
            <div class="col-md-2 product pt-md-5">
              <img src="images/Moins40/Chateau-Lynch.jpg" class="img-fluid" alt="Image 3">
              <div class="cart-details">
                <h6 class="pro-title p-0">Château Lynch-Moussas</h6>
                <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="pro-price py-2">
                  <h5>
                    <small>
                    <s class="text-secondary">€46</s>
                    </small>
                    <span>
                    €39
                    </span>
                  </h5>
                </div>
                <div class="cart mt-4">
                  
              </div>
            </div>
          </div>
          <!--4st Product-->
          <div class="col-md-2 product pt-md-5">
            <img src="images/Moins40/Chateau-Mejean.jpg" class="img-fluid" alt="Image 4">
            <div class="cart-details">
              <h6 class="pro-title p-0">Château Méjean</h6>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="pro-price py-2">
                <h5>
                <small>
                    <s class="text-secondary">€30</s>
                    </small>
                    <span>
                    €23
                    </span>
                </h5>
              </div>
              <div class="cart mt-4">
                
            </div>
          </div>
        </div>
        <!--5st Product-->
        <div class="col-md-2 product pt-md-5">
          <img src="images/Moins40/La-Garde.jpg" class="img-fluid" alt="Image 4">
          <div class="cart-details">
            <h6 class="pro-title p-0">Château La Garde (2009)</h6>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="pro-price py-2">
              <h5>
                <small>
                <s class="text-secondary">€40</s>
                </small>
                <span>
                €37
                </span>
              </h5>
            </div>
            <div class="cart mt-4">
              
          </div>
        </div>
      </div>
      <!--6st Product-->
      <div class="col-md-2 product pt-md-5">
        <img src="images/Moins40/La-Garde.jpg" class="img-fluid" alt="Image 5">
        <div class="cart-details">
          <h6 class="pro-title p-0">Château La Garde (2010)</h6>
          <div class="rating">
          <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <div class="pro-price py-2">
            <h5>
              <small>
              <s class="text-secondary">€36</s>
              </small>
              <span>
              €33
              </span>
            </h5>
          </div>
          <div class="cart mt-4">
            
          </div>
        </div>
      </div>
    </div>
    <!-- Flash -->
    <div class="slider-btn">
      <span class="prev position-top left-0">
        <i class="fas fa-chevron-left fa-2x text-secondary"></i>
      </span>
      <span class="next position-top right-0">
        <i class="fas fa-chevron-right fa-2x text-secondary"></i>
      </span>
    </div>
    </div>
    </div>
    <!-- /Features Third Slider-->

    <!-- Wine -->
    <div class="container">
      <div class="row">
       <div class="col">
         <img src="images/8.jpg" alt="Wine" class="img-fluid">
        </div> 
      </div> 
    </div>

    <div class="container-fluid sofa bg-light" style="width:75%; margin:auto;">
    <br>
      <h1 class="text-center" style="font-family:Fredericka the Great;">Notre Mission</h1>
      <hr style="width:50%; margin:auto;">
      <br>
      <h6>NOTRE PRINCIPAL OBJECTIF, PERMETTRE À TOUTES ET À TOUS DE DÉCOUVRIR, D’APPRÉCIER, ET DE DÉGUSTER DES VINS DIFFÉRENTS <br>ET DE QUALITÉ .</h6>
          <p class="text-left pt-3 winetext" style="color: #a00; ">
            Parce que nous savons que le monde du vin de Bordeaux peut sembler impressionnant, en raison du grand nombre de choix, d’appellations, d’étiquettes et autres spécificités… Nous avons choisi de vous aider à faire votre choix .<br><br>

            Quel que soit votre budget, votre localisation dans le monde, nous nous engageons à vous proposer du vin de Bordeaux d’excellente qualité et fidèle à vos attentes . Zawine se veut un site accessible au plus grand nombre pour se rassembler autour d’une passion commune,  » l’Or Rouge « . <br><br>

Que vous soyez collectionneur, amateur occasionnel ou simple curieux, vous trouverez ici toutes les gammes de bouteilles de vin de Bordeaux . Zawine deviendra votre cave en ligne et sera présente pour tous vos grands événements : mariage, baptême, anniversaires, grandes fêtes ou dîners d’exceptions . <br><br>

Avec Zawine, laissez-vous tenter par des crus d’exception. <br><br>
          </p>
          <div style="text-align:center;">
          <a href="contact.php" style="background-color:#820000; border-radius:4rem; padding:1rem; color:#cd853f; font-weight:bold;">Nous Contacter</a>
          </div>
          <br><br>
    </div>
    <!-- /Wine -->
<br><hr>
    <!-- Title Features Section-->
    <div class="container text-center">
    <div class="features">
    <a href="moins40.php" style="text-decoration:none; color:black;"><h1>Nos Partenaires</h1></a>
        <p class="text-secondary">
        Domaine d'Arpaillan & Domaine de Brondeau Lalande
        </p>
    </div>
    </div>
    <!-- /Title Features Section-->
    <!-- Product-->
    <div class="container-fluid">
      <div class="site-slider-four px-md-4">
          <div class="slider-four row text-center">
              <div class="col-md-2 product pt-md-5">
                <img src="images/Chateau/Arpaillan.jpg" class="border img-fluid" style=" border-radius: 50%; margin:auto;" alt="Chateau 1" title="Domain d'Arpaillan">
              </div>
              <div class="col-md-2 product pt-md-5">
                <img src="images/Chateau/Darpaillan.jpg" class="border img-fluid" style=" border-radius: 50%; margin:auto;" alt="Chateau 2" title="Domain d'Arpaillan">
              </div>
              <div class="col-md-2 product pt-md-5">
                <img src="images/Chateau/VinArpaillan.jpg" class="border img-fluid" style=" border-radius: 50%; margin:auto;" alt="Chateau 3" title="Domain d'Arpaillan">
              </div>
              <div class="col-md-2 product pt-md-5">
                <img src="images/Chateau/BrondeauLalande.jpg" class="border img-fluid" style=" border-radius: 50%; margin:auto;" alt="Chateau 4" title="Domaine de Brondeau Lalande">
              </div>
              <div class="col-md-2 product pt-md-5">
                <img src="images/Chateau/brondeau.jpg" class="border img-fluid" style=" border-radius: 50%; margin:auto;" alt="Chateau 5" title="Domaine de Brondeau Lalande">
              </div>
              <!--<div class="col-md-2 product pt-md-5">
                <img src="images/Chateau/Saint-Julien.jpg" class="border img-fluid" style=" border-radius: 50%; margin:auto;" alt="Chateau 6" title="Château Saint-Julien">
              </div>-->
              <div class="col-md-2 product pt-md-5">
                <img src="images/Chateau/brondeau2.jpg" class="border img-fluid" style=" border-radius: 50%; margin:auto;" alt="Chateau 7" title="Domaine de Brondeau Lalande">
              </div>
          </div>
          <!-- Flash -->
          <div class="slider-btn">
            <span class="prev position-top left-0">
              <i class="fas fa-chevron-left fa-2x text-secondary"></i>
            </span>
            <span class="next position-top right-0">
              <i class="fas fa-chevron-right fa-2x text-secondary"></i>
            </span>
          </div>
      </div>
    </div>  
      <!--Product-->

    <!--Banner-->
    <div class="container my-5 banner">
          <div class="col-md-8 col-12">
            <img src="images/banner3.jpg" class="img-fluid" alt="Banner 3">
          </div>
          
          <div class="col-md-4 col-12">
            <img src="images/banner2.jpg" class="img-fluid" alt="Banner 2">
          </div>
    </div>
    <!--/Banner-->





    <!-- New, Best and Features Sellers -->
  <div class="row">
  <div class="container items">
  <div class="column items">
    <div>
    <a href="arpaillan.php" style="text-decoration:none; color:black;"><h4 style="font-family: Fredericka the Great; ">Domaine d'Arpaillan</h4></a>
    <div class="photo-items">
      <img src="images/Domaine/Chateau-Lartenac.jpg" alt="Product 1" width="100px" height="100px">
      <span>Château Lartenac</span>
    </div>
    <div class="photo-items">
      <img src="images/Domaine/Chateau-Lavalette-Prestige.jpg" alt="Product 2" width="100px" height="100px">
      <span>Château Lavalette Cuvée Prestige</span>

    </div>
    <div class="photo-items">
      <img src="images/Domaine/Chateau-La-Pommeraie.jpg" alt="Product 3" width="100px" height="100px">
      <span>Château La Pommeraie</span>
    </div>
    </div>
  </div>

  <div class="column">
  <a href="brondeau.php" style="text-decoration:none; color:black;"><h4 style="font-family: Fredericka the Great; ">Domaine de Brondeau Lalande</h4></a>
    <div class="photo-items">
      <img src="images/Domaine/Lalande.jpg" alt="Product 1" width="100px" height="100px">
      <span>Château Brondeau Lalande (2018)</span>
    </div>
    <div class="photo-items">
      <img src="images/Domaine/Lalande.jpg" alt="Product 2" width="100px" height="100px">
      <span>Château Brondeau Lalande (2017)</span>
    </div>
    <div class="photo-items">
      <img src="images/Domaine/Lalande.jpg" alt="Product 3" width="100px" height="100px">
      <span>Château Brondeau Lalande (2010)</span>
    </div>

  </div>
  

  </div>
  </div>
    <!-- /New, Best and Features Sellers -->

    <!-- Brand -->
    <div class="container-fluid">
      <div class="slider-brand">
        <div class="slider-five px-5">
          <div>
            <img src="images/Logo/Cos.jpg" alt="Brand 1" class="img-fluid" style="margin:auto;">
          </div>
          <div>
            <img src="images/Logo/Giscours.jpg" alt="Brand 2" class="img-fluid" style="margin:auto;">
          </div>
          <div>
            <img src="images/Logo/Lynch-Bages.jpg" alt="Brand 3" class="img-fluid" style="margin:auto;">
          </div>
          <div>
            <img src="images/Logo/Malartic.jpg" alt="Brand 4" class="img-fluid" style="margin:auto;">
          </div>
          <div>
            <img src="images/Logo/Margaux.jpg" alt="Brand 5" class="img-fluid" style="margin:auto;">
          </div>
          <div>
            <img src="images/Logo/Pontet-Canet.jpg" alt="Brand 6" class="img-fluid" style="margin:auto;">
          </div>
          <div>
            <img src="images/Logo/Talbot.jpg" alt="Brand 7" class="img-fluid" style="margin:auto;">
          </div>
        </div>
        <!-- Flash -->
        <div class="slider-btn">
          <span class="prev position-top left-0">
            <i class="fas fa-chevron-left"></i>
          </span>
          <span class="next position-top right-0">
            <i class="fas fa-chevron-right"></i>
          </span>
        </div>
      </div>
    </div>
    <!-- /Brand -->

    <!-- Our Client-->
    <div class="container-fluid p-0">
      <div class="slider-client">
        <div class="slider-box text-center">
          <h1 class="pt-5 font-elmessiri" style="font-family:elmessiri; font-weight:bold;">Qu'est ce que vous cherchez ?</h1>
          <div class="slider-six">
            <div>
              <p>
                1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <h5 class="m-0">Sangmin SHIM</h5>
              <small class="pb-1">EPSI PARIS</small>
            </div>
            <div>
              <p>
                2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <h5 class="m-0">Aminata MBATHIE</h5>
              <small class="pb-1">EPSI PARIS</small>
            </div>
            <div>
              <p>
                3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <h5 class="m-0">Gérald MORZADEC</h5>
              <small class="pb-1">GKM</small>
            </div>
            <div>
              <p>
                4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <h5 class="m-0">Marie MORZADEC</h5>
              <small class="pb-1">PAU</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Our Client-->
                    <br>

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




        <!-- Script Script Script Script Script Script Script Script Script Script Script Script Script Script Script Script-->
  
        <!--Index HTML-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>

        <script src="../js/slick.js"></script>
        <script src="../js/online.js"></script>
        <!-- /Page d'accueil -->

        <!-- New Nav-->
        <script src="../js/newnav.js"></script>
        <!-- /New Nav-->


        <!-- /Script Script Script Script Script Script Script Script Script Script Script Script Script Script Script Script-->

	</body>
</html>
