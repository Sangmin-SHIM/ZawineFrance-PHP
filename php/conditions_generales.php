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
		<title>Zawine France Conditions Générales</title>

        <!--Icon -->
		    <link rel="shortcut icon" href="../images/GKM.ico">
	    	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        <!-- Page d'accueil-->
        
               <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>

                <!-- Font Awesome CDN -->
        <script src="../js/fontawesome.js"></script>

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
               
              <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="../css/online.css"/>
        <!-- /Page d'accueil-->


        <!-- new nav-->
        <link href="../css/newnav.css" rel="stylesheet">
        <!-- /new Nav-->

        <!-- Grands Crus Classés -->
        <link rel="stylesheet" href="../css/grands.css">

        <!-- Products Css -->
        <link rel="stylesheet" href="../css/product.css">


        <style>
    body {
        margin: 0;
        padding: 0;
        background-color: white;
        background-image: url();
        background-size: cover;
        -webkit-background-size: cover;

    }

    .elementor-748 .elementor-element.elementor-element-116830a .elementor-background-overlay {
        filter: brightness(111%) contrast(100%) saturate(101%) blur(0px) hue-rotate(0deg);
        background-color: #000000;
        background-image: url(https://www.zawinefrance.fr/wp-content/uploads/2019/09/zawine-france.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 0.85;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        position: absolute;
    }


    .elementor-size-default {
        text-align: center;
        color: #820000;
        font-family: 'Roboto', Sans-serif;
        font-size: 45px;
    }

    .elementor-clearfix {
        text-align: center;
        color: black;
        font-family: "Roboto", Sans-serif;
    }
</style>

  <!-- Nav -->
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
                                                    <a href="brondeau.php">Brondeau</a>
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

    <div class="thumbnail">
<img src="images/5.jpg" class="img-fluid" alt="..." width=" 1500px " />
<div class="caption post-content">
 </div>
            <br>
<h2 class="elementor-heading-title elementor-size-default">Acceptation</h2>
<div class="elementor-text-editor elementor-clearfix" text-align="center" ; color="red">Toute commande implique l’acceptation sans réserve par l’acheteur et son adhésion pleine et entière aux présentes conditions générales de vente et, est irrévocable et non susceptible de modification.
    Les commandes ne sont définitives que lorsque le prix en a été totalement réglé au vendeur. Les offres s’entendent dans la limite des stocks disponibles, sans engagement et sauf vente.
    Tous les vins indiqués sur le site sont en notre possession.&nbsp;
    Si les bouteilles commandées n’étaient pas dans un parfait état, une photo de la bouteille réelle est disponible sur la page produit. Lorsque plusieurs bouteilles sont disponibles, la photo représente la bouteille en moins bon état (nous sommes à votre disposition pour d’autres photos complémentaires si besoin)
    Conformément à l’article L. 3342-1 du Code de la Santé Publique, vous vous engagez, en passant commande sur notre site, à avoir dix-huit ans (18) ans révolus à la date de la commande.
    Par ailleurs, vous déclarez avoir la capacité juridique vous permettant d’effectuer une commande sur le site.</div>
<h2 class="elementor-heading-title elementor-size-default">Livraison et assurance</h2>
<div class="elementor-element elementor-element-d571c55 elementor-widget elementor-widget-text-editor" data-id="d571c55" data-element_type="widget" data-widget_type="text-editor.default">
    <div class="elementor-widget-container">
        <div class="elementor-text-editor elementor-clearfix">
            <p class="p1"><span class="s1">A ce jour, Zawine France expédie en France métropolitaine et Corse ainsi que dans le monde entier .</span></p>
            <p class="p1"><span class="s1">Le coût de livraison est fixe et comprend l’assurance du colis.</span></p>
            <p class="p1"><span class="s1">Dès validation de votre paiement, votre commande est prise en charge par notre équipe sous 24h.&nbsp;</span></p>
            <p class="p1"><span class="s1">Les expéditions d’effectuent du Lundi au Jeudi. La commande sera envoyée à l’adresse indiquée lors de la validation. La livraison en France métropolitaine sera effectuée dans un délai de 48 à 72h selon la destination.</span></p>
            <p class="p1"><span class="s1">En cas d’erreur dans le libellé des coordonnées du destinataire, le vendeur ne saurait être tenu responsable de l’impossibilité dans laquelle il pourrait être de livrer le produit. Bien que tout soit mis en œuvre pour respecter les délais indiqués, ces derniers ne sont donnés qu’à titre indicatif. Un retard de livraison ne saurait donner lieu à aucune pénalité ou indemnité de quelque ordre que ce soit ni à l’annulation de la commande.</span></p>
        </div>
    </div>
</div>
<h2 class="elementor-heading-title elementor-size-default">Livraison et assurance</h2>
<div class="elementor-element elementor-element-a8ae1c3 elementor-widget elementor-widget-text-editor" data-id="a8ae1c3" data-element_type="widget" data-widget_type="text-editor.default">
    <div class="elementor-widget-container">
        <div class="elementor-text-editor elementor-clearfix">
            <p class="p1"><span class="s1">A la réception des produits, il vous appartient impérativement :</span></p>
            <p class="p1"><span class="s1">• de contrôler scrupuleusement le contenu du colis et d’indiquer vos réserves le cas échéant. En cas de casse avérée, vous devez refuser le colis au livreur.</span></p>
            <p class="p1"><span class="s1">• de nous prévenir sous 24 heures aux coordonnées indiquées sur le site. Aucune réclamation ne pourra être retenue au-delà ce de délai.</span></p>
            <p class="p1"><span class="s1">Assurance : Chaque envoi comprend une assurance « à la valeur » en cas de casse ou de perte du colis. Attention : L’assurance ne prend pas en charge les défauts d’étanchéité des bouchons sur les vieux millésimes.</span></p>
        </div>
    </div>
</div>
<h2 class="elementor-heading-title elementor-size-default">Retour</h2>
<div class="elementor-element elementor-element-6365790 elementor-widget elementor-widget-text-editor" data-id="6365790" data-element_type="widget" data-widget_type="text-editor.default">
    <div class="elementor-widget-container">
        <div class="elementor-text-editor elementor-clearfix">
            <p class="p1"><span class="s1">En application des dispositions de l’article L.121-16 du code de la consommation, l’acheteur particulier dispose de 14 jours francs, à compter de la réception de sa commande, pour refuser les articles livrés.</span></p>
            <p class="p1"><span class="s1">Dans ce cas, ces derniers devront être retournés, aux frais de l’acheteur, dans leurs emballages d’origine, et seront remboursés avec les frais de transport initiaux s’ils n’ont pas été l’objet d’avaries, après réception et contrôle.</span></p>
        </div>
    </div>
</div>
<div class="elementor-column-wrap  elementor-element-populated">
    <div class="elementor-widget-wrap">
        <div class="elementor-element elementor-element-202bd53 elementor-widget elementor-widget-heading" data-id="202bd53" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Qualité</h2>
            </div>
        </div>
        <div class="elementor-element elementor-element-d5d6773 elementor-widget elementor-widget-text-editor" data-id="d5d6773" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
                <div class="elementor-text-editor elementor-clearfix">
                    <p class="p1"><span class="s1">Même si nous veillons au plus grand soin de conservation des vins (température, hygrométrie, obscurité), nous ne pouvons garantir la qualité irréprochable des vieux millésimes. Conformément aux usages internationaux, le vendeur n’est pas tenu d’échanger les bouteilles bouchonnées.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="elementor-element elementor-element-6f43470 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="6f43470" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-e36fad8 elementor-column elementor-col-100 elementor-top-column" data-id="e36fad8" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-4e9e498 elementor-widget elementor-widget-heading" data-id="4e9e498" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Prix et paiement</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c3e888d elementor-widget elementor-widget-text-editor" data-id="c3e888d" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p class="p1"><span class="s1">Tous nos prix sont affichés en Euro.</span></p>
                                    <p class="p1"><span class="s1">Conformément à l’article 297A du CGI, nos prix s’entendent TTC, TVA non récupérable (tva sur marge).&nbsp;</span></p>
                                    <p class="p1"><span class="s1">• Paiement par carte sécurisée :</span></p>
                                    <p class="p1"><span class="s1">Zawine France vous garantit que toutes les transactions que vous effectuez sur notre site sont sécurisées à 100%. Le protocole SSL contrôle automatiquement la validité des droits d’aces lors du paiement par carte et crypte tous nos échanges afin d’en garantir la confidentialité.</span></p>
                                    <p class="p1"><span class="s1">• Paiement par virement :&nbsp;</span></p>
                                    <p class="p1"><span class="s1">Nous contacter pour les modalités .</span></p>
                                    <p class="p1"><span class="s1">Dès validation de votre paiement par carte bancaire ou virement, votre facture sera disponible dans votre espace client, après connexion avec vos identifiants et mots de passe choisis lors de la création de votre compte.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-894f99a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="894f99a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-843b1da elementor-column elementor-col-100 elementor-top-column" data-id="843b1da" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-0f02000 elementor-widget elementor-widget-heading" data-id="0f02000" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Protection des mineurs</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-745abdf elementor-widget elementor-widget-text-editor" data-id="745abdf" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p class="p1">Conformément à l’article L. 3342-1 du Code de la santé publique, la vente des boissons alcooliques à des mineurs est interdite. Le Client déclare et s’engage à avoir 18 ans révolus à la date de la commande.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-e5dae4c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e5dae4c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-2278732 elementor-column elementor-col-100 elementor-top-column" data-id="2278732" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-6b37b55 elementor-widget elementor-widget-heading" data-id="6b37b55" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Confidentialité
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b495e9f elementor-widget elementor-widget-text-editor" data-id="b495e9f" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p class="p1"><span class="s1">Soucieux de la protection de votre vie privée, Zawine France traite toutes les informations vous concernant avec la plus stricte confidentialité.</span></p>
                                    <p class="p1"><span class="s1">Lorsque vous commandez, nous avons besoin de votre nom, de votre adresse personnelle ou professionnelle, de votre adresse e-mail, et si vous commandez par carte bancaire, de votre numéro de carte et de la date d’expiration. L’accès à votre compte personnel est protégé par un code confidentiel que vous choisissez lors de la création de votre compte.</span></p>
                                    <p class="p1"><span class="s1">Zawine France respecte les dispositions de la Commission Nationale de l’Informatique et des Libertés. Conformément à la loi «&nbsp;informatique et libertés&nbsp;» du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en vous adressant à :</span></p>
                                    <p class="p1"><span class="s1">&nbsp;ZAWINE FRANCE – GERALD MORZADEC&nbsp;</span></p>
                                    <p class="p1"><span class="s1">61 RUE DE LEMERICK&nbsp;</span></p>
                                    <p class="p1"><span class="s1">29000 QUIMPER&nbsp;</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-f866579 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f866579" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-5dd9de5 elementor-column elementor-col-100 elementor-top-column" data-id="5dd9de5" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-e7ba308 elementor-widget elementor-widget-heading" data-id="e7ba308" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Protection de vos informations personnelles
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-570a3dd elementor-widget elementor-widget-text-editor" data-id="570a3dd" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p class="p1"><span class="s1">Collecte et utilisation de vos données personnelles</span></p>
                                    <p class="p1"><span class="s1">ZAWINE FRANCE est le responsable du traitement de vos données personnelles. De façon générale, les informations que vous nous communiquez, à l’exception de votre mot de passe qui est crypté et ne peut jamais être lu, sont destinées au personnel habilité de ZAWINE FRANCE qui est le responsable de traitement, vos données sont utilisées afin de gérer vos accès à votre compte client&nbsp;ZAWINE FRANCE, et aussi pour le traitement et le suivi de vos commandes, le SAV des produits commandés sur notre Site, la gestion marketing et de la relation client, le recouvrement et la lutte contre la fraude, le reporting, le pilotage la segmentation et la sélection marketing. Les données qui vous concernent ne sont transmises à aucun prestataire tiers.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<p style="text-align: center;"><span style="font-size: 24pt; color: #ffba20; font-family: Roboto, sans-serif; font-weight:bold;">L'ABUS D'ALCOOL EST DANGEREUX POUR LA SANTÉ, À CONSOMMER AVEC MODÉRATION</span></p>








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
      <br>


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


        <!-- Page d'accueil -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>

         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
          </script>

         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
         </script>
        <!-- /Page d'accueil -->

        <!-- New Nav -->
        <script src="../js/newnav.js"></script>
        <!-- /New Nav -->

        <!-- /Script Script Script Script Script Script Script Script Script Script Script Script Script Script Script Script-->

	</body>
</html>