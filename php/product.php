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
		<title>Zawine France</title>
		<meta name="description" content="Blueprint: Horizontal Slide Out Menu" />
		<meta name="keywords" content="horizontal, slide out, menu, navigation, responsive, javascript, images, grid" />
        <meta name="author" content="Codrops" />
        <!-- Nav-->
		<link rel="shortcut icon" href="../images/GKM.ico">
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <script src="../js/modernizr.custom.js"></script>
        <!-- /Nav-->


        <!-- Product-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/componentproduct.css" />
		<!-- Modernizr is used for flexbox fallback -->
		<script src="../js/modernizrproduct.custom.js"></script>
		<!-- /Product-->
	

</head>
    
    <body>
        <div class="container">
			<header class="clearfix">
				<h1>Zawine France</h1>
			
				
				<div class=sangmin>
					<section class="s1">
					<!-- My Part-->
					<a href="#" class="iconbtn fas fa-heart" data-info="Ma Liste"></a>

					<a href="#" class="iconbtn fas fa-search" data-info="Ma Liste"></a>
					<!-- /My Part-->
					</section>
                </div>
            </header>
                        
        <div class="main">
			<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
				<div class="cbp-hsinner">
			        <ul class="cbp-hsmenu">

						<li>
							<a href="#">Lovely Spirits</a>
							<ul class="cbp-hssubmenu">
								<li><a href="#"><img src="../images/1.png" alt="img01"/><span>Delicate Wine</span></a></li>
                <li><a href="#"><img src="../images/2.png" alt="img02"/><span>Fine Spirit</span></a></li>				
                <li><a href="#"><img src="../images/3.png" alt="img03"/><span>Heavenly Ale</span></a></li>
								<li><a href="#"><img src="../images/4.png" alt="img04"/><span>Juicy Lemonade</span></a></li>
								<li><a href="#"><img src="../images/5.png" alt="img05"/><span>Wise Whiskey</span></a></li>
								<li><a href="#"><img src="../images/6.png" alt="img06"/><span>Sweet Rum</span></a></li>
							</ul>
						</li>
                        
             <li>
							<a href="#">Delicious Beverages</a>
							<ul class="cbp-hssubmenu cbp-hssub-rows">
								<li><a href="#"><img src="../images/7.png" alt="img07"/><span>Lovely Slurp</span></a></li>
								<li><a href="#"><img src="../images/8.png" alt="img08"/><span>Lemony Grappa</span></a></li>
								<li><a href="#"><img src="../images/9.png" alt="img09"/><span>Eggy Liquor</span></a></li>
								<li><a href="#"><img src="../images/10.png" alt="img10"/><span>Fresh Juice</span></a></li>
								<li><a href="#"><img src="../images/1.png" alt="img01"/><span>Delicate Wine</span></a></li>
								<li><a href="#"><img src="../images/2.png" alt="img02"/><span>Fine Spirit</span></a></li>
								<li><a href="#"><img src="../images/3.png" alt="img03"/><span>Heavenly Ale</span></a></li>
								<li><a href="#"><img src="../images/4.png" alt="img04"/><span>Juicy Lemonade</span></a></li>
								<li><a href="#"><img src="../images/5.png" alt="img05"/><span>Wise Whiskey</span></a></li>
								<li><a href="#"><img src="../images/6.png" alt="img06"/><span>Sweet Rum</span></a></li>
								<li><a href="#"><img src="../images/1.png" alt="img01"/><span>Delicate Wine</span></a></li>
								<li><a href="#"><img src="../images/2.png" alt="img02"/><span>Fine Spirit</span></a></li>
              </ul>							
              </li>

							<li>
								<a href="#">Fine Liquors</a>
								<ul class="cbp-hssubmenu">
									<li><a href="#"><img src="../images/10.png" alt="img10"/><span>Fresh Juice</span></a></li>
									<li><a href="#"><img src="../images/6.png" alt="img06"/><span>Sweet Rum</span></a></li>
									<li><a href="#"><img src="../images/9.png" alt="img09"/><span>Eggy Liquor</span></a></li>
								</ul>
							</li>
							<li><a href="#">Our Mission</a></li>
							<li><a href="#">Contact</a></li>	
						</ul>
						
					</div>
				</nav>
			</div>
		</div>

		<div class="container">
            <div class="row">
                <div class="col-md-7 col-12"><p><a></a></p></div>
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
		



        <!-- Product Product Product Product Product Product Product Product Product Product Product Product-->
		<!-- Compare basket -->
		<div class="compare-basket">
			<button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text">Compare</span></button>
		</div>
		
		
		
		<!-- Main view -->
		<div class="view">
			<!-- Product grid -->
			<section class="grido">
				<!-- Products -->

				<div class="product">
					<div class="product__info">
                        <div>
                                <img class="product__image" src="../images/11.png" alt="Product 1" />
                                <div>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-bell"></i>  
                                </div>
                        </div>


						<h5 class="product__title">Chryseia</h5>
						<span class="product__year extra highlight">2011</span>
						<span class="product__region extra highlight">Douro</span>
						<span class="product__varietal extra highlight">Touriga Nacional</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$55.90</span>

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>


				<div class="product">
					<div class=" product__info">
                        <div>
                            <img class="product__image" src="../images/2.png" alt="Product 2" />
                            <div>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-bell"></i>  
                            </div>
                        </div>
						<h3 class="product__title">Meiomi Pinot Noir</h3>
						<span class="product__year extra highlight">2013</span>
						<span class="product__region extra highlight">California</span>
						<span class="product__varietal extra highlight">Pinot Noir</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$19.90</span>


						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                            <img class="product__image" src="../images/10.png" alt="Product 3" />
                            <div>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-bell"></i>  
                            </div>
                        </div>

						<h3 class="product__title">Antucura Cabernet Sauvignon</h3>
						<span class="product__year extra highlight">2013</span>
						<span class="product__region extra highlight">Argentina</span>
						<span class="product__varietal extra highlight">Cabernet Sauvignon </span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$15.90</span>


						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/4.png" alt="Product 4" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Leonetti Sangiovese</h3>
						<span class="product__year extra highlight">2012</span>
						<span class="product__region extra highlight">Washington</span>
						<span class="product__varietal extra highlight">Sangiovese</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$85.90</span>
						
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/5.png" alt="Product 5" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Chateau Pontet-Canet</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">Pauillac, Bordeaux</span>
						<span class="product__varietal extra highlight">Bordeaux </span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$269.00</span>
						<br>
						

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/6.png" alt="Product 6" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Quintessa</h3>
						<span class="product__year extra highlight">2011</span>
						<span class="product__region extra highlight">California</span>
						<span class="product__varietal extra highlight">Cabernet Sauvignon</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$125.90</span>
						

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/7.png" alt="Product 7" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Clarendon Hills Astralis</h3>
						<span class="product__year extra highlight">2006</span>
						<span class="product__region extra highlight">McLaren Vale</span>
						<span class="product__varietal extra highlight">Syrah, Shiraz</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$153.90</span>
						

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/8.png" alt="Product 8" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Lapostolle Clos Apalta</h3>
						<span class="product__year extra highlight">2010</span>
						<span class="product__region extra highlight">Chile</span>
						<span class="product__varietal extra highlight">Bordeaux</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$82.90</span>
						

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/9.png" alt="Product 9" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Bodega Colome Reserva</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">Argentina</span>
						<span class="product__varietal extra highlight">Malbec</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$99.90</span>
						

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/10.png" alt="Product 10" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Montevertine Le Pergole Torte</h3>
						<span class="product__year extra highlight">2011</span>
						<span class="product__region extra highlight">Tuscany</span>
						<span class="product__varietal extra highlight">Sangiovese </span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$119.90</span>
					

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/2.png" alt="Product 11" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Massolino Vigna Parussi Barolo</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">Piedmont</span>
						<span class="product__varietal extra highlight">Nebbiolo</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$169.90</span>
				

						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>


					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
                </div>
                

				<div class="product">
					<div class="product__info">
                        <div>
                        <img class="product__image" src="../images/4.png" alt="Product 12" />
                        <div>
                            <i class="fa fa-heart"></i>
                            <i class="fa fa-bell"></i>  
                        </div>
                        </div>
						<h3 class="product__title">Chateau Branaire-Ducru</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">St-Julien, Bordeaux</span>
						<span class="product__varietal extra highlight">Bordeaux</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$99.90</span>
						
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>



                    </div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</section>
        </div>        
        <!-- /Product Product Product Product Product Product Product Product Product Product Product Product-->






		
		


















		
        <!-- SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT SCRIPT-->
        <!-- Product-->
        <!-- product compare wrapper -->

		<section class="compare">
			<button class="action action--close"><i class="fa fa-remove"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
		</section>
        
		<script src="../js/classie.js"></script>
        <script src="../js/main.js"></script>
        <!-- /Product-->

        <!-- Nav-->
        <script src="../js/cbpHorizontalSlideOutMenu.min.js"></script>
		<script>
			var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
        </script>
        <!-- /Nav-->    
	
	
	
		<script type="text/javascript">
        if (screen.width <= 699) {
        document.location = "./mariage.php";
        }
        </script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
	



</html>