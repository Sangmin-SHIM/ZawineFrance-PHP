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
		<title>Zawine France Mentions Légales</title>

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
        font-family: "Roboto" , Sans-serif;
        font-size: 45px;
    }

    .elementor-clearfix {
        text-align: center;
        color: black;
        font-family: "Roboto" , Sans-serif;
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
    <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">Identification &amp; Définition</h2>
</div>
<div class="elementor-element elementor-element-0a3864d elementor-widget elementor-widget-text-editor" data-id="0a3864d" data-element_type="widget" data-widget_type="text-editor.default">
    <div class="elementor-widget-container">
        <div class="elementor-text-editor elementor-clearfix">
            <div class="gs">
                <div class="">
                    <div id=":x7" class="ii gt adO">
                        <div id=":x8" class="a3s aXjCH ">
                            <div dir="ltr">
                                <p>Direction : Gérald MORZADEC<br>Adresse postale de l’entreprise : 61 Avenue de Limerick 29000 Quimper</p>
                                <p>Immatriculation RCS : 847 514 080 R.C.S QUIMPER</p>
                                <p>Numéro de TVA intracommunautaire : FR77847514080&nbsp;</p>
                                <p>Numéro de téléphone : 0650675977<br>Adresse courriel : contact@zawinefrance.fr</p>
                                <div class="yj6qo ajU">
                                    <div id=":yi" class="ajR" tabindex="0" role="button" data-tooltip="Afficher le contenu abrégé" aria-label="Afficher le contenu abrégé" aria-expanded="false"><img class="ajT" src="https://ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hi">&nbsp;</div>
                </div>
            </div>
            <p><b>Client&nbsp;:</b>&nbsp;tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des présentes conditions générales.<br><b>Prestations et Services&nbsp;:</b> <a href=#>#</a> met à disposition des Clients&nbsp;:</p>
            <p><b>Contenu&nbsp;:</b>&nbsp;Ensemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.</p>
            <p><b>Informations clients&nbsp;:</b> Ci après dénommé «&nbsp;Information (s)&nbsp;» qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par <a href=#>#</a> pour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.</p>
            <p><b>Utilisateur :</b> Internaute se connectant, utilisant le site susnommé.</p>
            <p><b>Informations personnelles :</b> « Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l’identification des personnes physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
            <p>Les termes «&nbsp;données à caractère personnel&nbsp;», «&nbsp;personne concernée&nbsp;», «&nbsp;sous traitant&nbsp;» et «&nbsp;données sensibles&nbsp;» ont le sens défini par le Règlement Général sur la Protection des Données (RGPD&nbsp;: n° 2016-679)</p>
        </div>
    </div>
</div>
<section class="elementor-element elementor-element-46f0781 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="46f0781" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-9b83db9 elementor-column elementor-col-100 elementor-top-column" data-id="9b83db9" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-72b16d5 elementor-widget elementor-widget-heading" data-id="72b16d5" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">1. Présentation du site internet.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-77e48ab elementor-widget elementor-widget-text-editor" data-id="77e48ab" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site internet&nbsp;<a href=#>#</a> l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-1b98281 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="1b98281" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">

            <div class="elementor-element elementor-element-d3d2208 elementor-column elementor-col-33 elementor-top-column" data-id="d3d2208" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-a780e07 elementor-widget elementor-widget-image" data-id="a780e07" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">

                            </div>
                            <div class="elementor-element elementor-element-7a09d01 elementor-widget elementor-widget-heading" data-id="7a09d01" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">Propriétaire &amp; responsable de publication</h5>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-416cdaa elementor-widget elementor-widget-text-editor" data-id="416cdaa" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>Gérald Morzadec – contact@zawinefrance.fr<br>Le responsable publication est une personne physique ou une personne morale.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-43767b5 elementor-column elementor-col-33 elementor-top-column" data-id="43767b5" data-element_type="column">
                        <div class="elementor-column-wrap  elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-d24a2a4 elementor-widget elementor-widget-image" data-id="d24a2a4" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">

                                    </div>
                                    <div class="elementor-element elementor-element-d6019da elementor-widget elementor-widget-heading" data-id="d6019da" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h5 class="elementor-heading-title elementor-size-default">Hébergeur du site internet Zawine France</h5>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8ea950f elementor-widget elementor-widget-text-editor" data-id="8ea950f" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p>02 switch – 222-224 Boulevard Gustave Flaubert 63000 Clermont-Ferrand 04 44 44 60 40</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<section class="elementor-element elementor-element-f654593 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f654593" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-c568c9e elementor-column elementor-col-100 elementor-top-column" data-id="c568c9e" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-9805dd5 elementor-widget elementor-widget-heading" data-id="9805dd5" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">2. Conditions générales d’utilisation du site et des services proposés.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c752873 elementor-widget elementor-widget-text-editor" data-id="c752873" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables.<br>Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.</p>
                                    <p>L’utilisation du site&nbsp;<a href=#>#</a>&nbsp;implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site&nbsp;<a href=#>#</a>&nbsp;sont donc invités à les consulter de manière régulière.</p>
                                    <p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par <a href=#>#</a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.<br>Le site web&nbsp;<a href=#>#</a>&nbsp;est mis à jour régulièrement par <a href=#>#</a> responsable. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
                                    <h2>&nbsp;</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-c239adb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c239adb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-61e94f4 elementor-column elementor-col-100 elementor-top-column" data-id="61e94f4" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-c82ec4d elementor-widget elementor-widget-heading" data-id="c82ec4d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">3. Description des services fournis.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-81ea905 elementor-widget elementor-widget-text-editor" data-id="81ea905" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Le site internet&nbsp;<a href=#>#</a>&nbsp;a pour objet de fournir une information concernant l’ensemble des activités de la société.<br><a href=#>#</a> s’efforce de fournir sur le site&nbsp;<a href=#>#</a>&nbsp;des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
                                    <p>Toutes les informations indiquées sur le site&nbsp;<a href=#>#</a>&nbsp;sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site&nbsp;<a href=#>#</a>&nbsp;ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
                                    <h2>&nbsp;</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-d7bdc7c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="d7bdc7c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-3fb732b elementor-column elementor-col-100 elementor-top-column" data-id="3fb732b" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-563ff37 elementor-widget elementor-widget-heading" data-id="563ff37" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">4. Limitations contractuelles sur les données techniques.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d6e5b37 elementor-widget elementor-widget-text-editor" data-id="d6e5b37" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Le site utilise la technologie JavaScript.</p>
                                    <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.<br>Le site <a href=#>#</a> est hébergé chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD&nbsp;: n° 2016-679)</p>
                                    <p>L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>
                                    <p><a href=#>#</a> et l’hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie lié notamment à l’encombrement du réseau empêchant l’accès au serveur.</p>
                                    <h2>&nbsp;</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-5e7ccec elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5e7ccec" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-73637b8 elementor-column elementor-col-100 elementor-top-column" data-id="73637b8" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-31b4f63 elementor-widget elementor-widget-heading" data-id="31b4f63" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">5. Propriété intellectuelle et contrefaçons.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7870a87 elementor-widget elementor-widget-text-editor" data-id="7870a87" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p><a href=#>#</a> est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons.<br>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : <a href=#>#</a>.</p>
                                    <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
                                    <h2>&nbsp;</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-da8a992 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="da8a992" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-ac5b1e8 elementor-column elementor-col-100 elementor-top-column" data-id="ac5b1e8" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-4439826 elementor-widget elementor-widget-heading" data-id="4439826" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">6. Limitations de responsabilité.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f82ab42 elementor-widget elementor-widget-text-editor" data-id="f82ab42" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p><a href="#/">#</a>&nbsp;agit en tant qu’éditeur du site.&nbsp;<a href="#/">#</a>&nbsp;&nbsp;est responsable de la qualité et de la véracité du Contenu qu’il publie.</p>
                                    <p><a href="#/">#</a>&nbsp;ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet&nbsp;<a href="#/">#</a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                                    <p><a href="#/">#</a>&nbsp;ne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site&nbsp;<a href="#/">#</a>.<br>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs.&nbsp;<a href="#/">#</a>&nbsp;se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant,&nbsp;<a href="#/">#</a>&nbsp;se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-73f3504 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="73f3504" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-cd525c2 elementor-column elementor-col-100 elementor-top-column" data-id="cd525c2" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-32ecb71 elementor-widget elementor-widget-heading" data-id="32ecb71" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">7. Gestion des données personnelles.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e338be3 elementor-widget elementor-widget-text-editor" data-id="e338be3" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD&nbsp;: n° 2016-679).</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1259581 elementor-widget elementor-widget-heading" data-id="1259581" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">7.1 Responsables de la collecte des données personnelles</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ae6790e elementor-widget elementor-widget-text-editor" data-id="ae6790e" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : Zawine France. <a href=#>#</a>est représenté par Gérald Morzadec, son représentant légal</p>
                                    <p>En tant que responsable du traitement des données qu’il collecte, <a href=#>#</a> s’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité.<br>Chaque fois que <a href=#>#</a> traite des Données Personnelles, <a href=#>#</a> prend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles <a href=#>#</a> les traite.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-713de58 elementor-widget elementor-widget-heading" data-id="713de58" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">7.2 Finalité des données collectées</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-39c2aec elementor-widget elementor-widget-text-editor" data-id="39c2aec" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p><a href=#>#</a> est susceptible de traiter tout ou partie des données :</p>
                                    <p>pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et services commandés par l’utilisateur : données de connexion et d’utilisation du Site, facturation, historique des commandes, etc.<br>–<br>pour prévenir et lutter contre la fraude informatique (spamming, hacking…) : matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe (hashé)<br>–<br>pour améliorer la navigation sur le Site : données de connexion et d’utilisation<br>pour mener des enquêtes de satisfaction facultatives sur <a href=#>#</a> : adresse email<br>–<br>pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse email<br><br><a href=#>#</a> ne commercialise pas vos données personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et d’analyses.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8d33c67 elementor-widget elementor-widget-heading" data-id="8d33c67" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">7.3 Droit d’accès, de rectification et d’opposition</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a4a86a9 elementor-widget elementor-widget-text-editor" data-id="a4a86a9" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Conformément à la réglementation européenne en vigueur, les Utilisateurs de&nbsp;<a href="#/">#</a>&nbsp;disposent des droits suivants :<br>–<br>Droit d’accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des données des Utilisateurs droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l’utilisation, la communication ou la conservation est interdite<br>–</p>
                                    <div style="text-align: center;"><span style="text-align: left;">Droit de retirer à tout moment un consentement (article 13-2c RGPD)</span></div>
                                    <div style="text-align: center;">–<span style="text-align: left;"><br></span><span style="text-align: left;">Droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)</span><br>–<span style="text-align: left;"><br></span></div>
                                    <div style="text-align: center;"><span style="text-align: left;">Droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD)</span></div>
                                    <div style="text-align: center;">
                                        <p>–</p>
                                        <p><span style="text-align: left;">Droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)<br></span>–<br><span style="text-align: left;">Droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui&nbsp;</span><a style="text-align: left; background-color: #ffffff;" href="#/">#</a><span style="text-align: left;">&nbsp;</span><span style="text-align: left;">devra communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné</span></p>
                                        <p>Dès que&nbsp;<a href="#/">#</a>&nbsp;a connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part,&nbsp;<a href="#/">#</a>&nbsp;s’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou pour répondre à une obligation légale.</p>
                                        <p>Si l’Utilisateur souhaite savoir comment&nbsp;<a href="#/">#</a>&nbsp;utilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur traitement, l’Utilisateur peut contacter&nbsp;<a href="#/">#</a>&nbsp;par écrit à l’adresse suivante :</p>
                                        <p>Zawine France – DPO, Tom Breton<br>61 avenue de Limerick 29000 Quimper.</p>
                                        <p>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait que&nbsp;<a href="#/">#</a>&nbsp;corrige, mette à jour ou supprime, en s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou passeport).</p>
                                        <p>Les demandes de suppression de Données Personnelles seront soumises aux obligations qui sont imposées à&nbsp;<a href="#/">#</a>&nbsp;par la loi, notamment en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs de&nbsp;<a href="#/">#</a>&nbsp;peuvent déposer une réclamation auprès des autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-f350b3f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f350b3f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-51bbb42 elementor-column elementor-col-100 elementor-top-column" data-id="51bbb42" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-41b5f7c elementor-widget elementor-widget-heading" data-id="41b5f7c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">8. Notification d’incident</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a463156 elementor-widget elementor-widget-text-editor" data-id="a463156" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Quels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode de stockage électronique n’est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité absolue.<br>Si nous prenions connaissance d’une brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu’ils puissent prendre les mesures appropriées. Nos procédures de notification d’incident tiennent compte de nos obligations légales, qu’elles se situent au niveau national ou européen. Nous nous engageons à informer pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur fournir toutes les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en matière de reporting.</p>
                                    <p>Aucune information personnelle de l’utilisateur du site&nbsp;<a href="#/">#</a>&nbsp;n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat de&nbsp;<a href="#/">#</a>&nbsp;et de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site&nbsp;<a href="#/">#</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9a39423 elementor-widget elementor-widget-heading" data-id="9a39423" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Sécurité</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cf02573 elementor-widget elementor-widget-text-editor" data-id="cf02573" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Pour assurer la sécurité et la confidentialité des Données Personnelles et des Données Personnelles de Santé,&nbsp;<a href="#/">#</a>&nbsp;utilise des réseaux protégés par des dispositifs standards tels que par pare-feu, la pseudonymisation, l’encryption et mot de passe.</p>
                                    <p>Lors du traitement des Données Personnelles,&nbsp;<a href="#/">#</a>&nbsp;prend toutes les mesures raisonnables visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation, altération ou destruction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-43aa027 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="43aa027" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-b265cc0 elementor-column elementor-col-100 elementor-top-column" data-id="b265cc0" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-4b31c57 elementor-widget elementor-widget-heading" data-id="4b31c57" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">9. Liens hypertextes « cookies » et balises (“tags”) internet</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-22e8ec8 elementor-widget elementor-widget-text-editor" data-id="22e8ec8" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Le site&nbsp;<a href="#/">#</a>&nbsp;contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de&nbsp;<a href="#/">#</a>. Cependant,&nbsp;<a href="#/">#</a>&nbsp;n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                                    <p>Sauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous sont offertes et rappelées ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie des Services proposés par le site.</p>
                                    <h2>&nbsp;</h2>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2422f38 elementor-widget elementor-widget-heading" data-id="2422f38" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">9.1. « COOKIES »
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c586a02 elementor-widget elementor-widget-text-editor" data-id="c586a02" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Un « cookie » est un petit fichier d’information envoyé sur le navigateur de l’Utilisateur et enregistré au sein du terminal de l’Utilisateur (ex : ordinateur, smartphone), (ci-après « Cookies »). Ce fichier comprend des informations telles que le nom de domaine de l’Utilisateur, le fournisseur d’accès Internet de l’Utilisateur, le système d’exploitation de l’Utilisateur, ainsi que la date et l’heure d’accès. Les Cookies ne risquent en aucun cas d’endommager le terminal de l’Utilisateur.</p>
                                    <p><a href="#/">#</a>&nbsp;est susceptible de traiter les informations de l’Utilisateur concernant sa visite du Site, telles que les pages consultées, les recherches effectuées. Ces informations permettent à&nbsp;<a href="#/">#</a>&nbsp;d’améliorer le contenu du Site, de la navigation de l’Utilisateur.</p>
                                    <p>Les Cookies facilitant la navigation et/ou la fourniture des services proposés par le Site, l’Utilisateur peut configurer son navigateur pour qu’il lui permette de décider s’il souhaite ou non les accepter de manière à ce que des Cookies soient enregistrés dans le terminal ou, au contraire, qu’ils soient rejetés, soit systématiquement, soit selon leur émetteur. L’Utilisateur peut également configurer son logiciel de navigation de manière à ce que l’acceptation ou le refus des Cookies lui soient proposés ponctuellement, avant qu’un Cookie soit susceptible d’être enregistré dans son terminal.&nbsp;<a href="#/">#</a>&nbsp;informe l’Utilisateur que, dans ce cas, il se peut que les fonctionnalités de son logiciel de navigation ne soient pas toutes disponibles.</p>
                                    <p>Si l’Utilisateur refuse l’enregistrement de Cookies dans son terminal ou son navigateur, ou si l’Utilisateur supprime ceux qui y sont enregistrés, l’Utilisateur est informé que sa navigation et son expérience sur le Site peuvent être limitées. Cela pourrait également être le cas lorsque&nbsp;<a href="#/">#</a>&nbsp;ou l’un de ses prestataires ne peut pas reconnaître, à des fins de compatibilité technique, le type de navigateur utilisé par le terminal, les paramètres de langue et d’affichage ou le pays depuis lequel le terminal semble connecté à Internet.</p>
                                    <p>Le cas échéant,&nbsp;<a href="#/">#</a>&nbsp;décline toute responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des services éventuellement proposés par&nbsp;<a href="#/">#</a>, résultant (i) du refus de Cookies par l’Utilisateur (ii) de l’impossibilité pour&nbsp;<a href="#/">#</a>&nbsp;d’enregistrer ou de consulter les Cookies nécessaires à leur fonctionnement du fait du choix de l’Utilisateur. Pour la gestion des Cookies et des choix de l’Utilisateur, la configuration de chaque navigateur est différente. Elle est décrite dans le menu d’aide du navigateur, qui permettra de savoir de quelle manière l’Utilisateur peut modifier ses souhaits en matière de Cookies.</p>
                                    <p>À tout moment, l’Utilisateur peut faire le choix d’exprimer et de modifier ses souhaits en matière de Cookies.&nbsp;<a href="#/">#</a>&nbsp;pourra en outre faire appel aux services de prestataires externes pour l’aider à recueillir et traiter les informations décrites dans cette section.</p>
                                    <p>Enfin, en cliquant sur les icônes dédiées aux réseaux sociaux Twitter, Facebook, Linkedin et Google Plus figurant sur le Site de&nbsp;<a href="#/">#</a>&nbsp;ou dans son application mobile et si l’Utilisateur a accepté le dépôt de cookies en poursuivant sa navigation sur le Site Internet ou l’application mobile de&nbsp;<a href="#/">#</a>, Twitter, Facebook, Linkedin et Google Plus peuvent également déposer des cookies sur vos terminaux (ordinateur, tablette, téléphone portable).</p>
                                    <p>Ces types de cookies ne sont déposés sur vos terminaux qu’à condition que vous y consentiez, en continuant votre navigation sur le Site Internet ou l’application mobile de&nbsp;<a href="#/">#</a>. À tout moment, l’Utilisateur peut néanmoins revenir sur son consentement à ce que&nbsp;<a href="#/">#</a>&nbsp;dépose ce type de cookies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c31ea63 elementor-widget elementor-widget-heading" data-id="c31ea63" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Article 9.2. BALISES (“TAGS”) INTERNET</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a5f3bcc elementor-widget elementor-widget-text-editor" data-id="a5f3bcc" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p><a href="#/">#</a>&nbsp;peut employer occasionnellement des balises Internet (également appelées « tags », ou balises d’action, GIF à un pixel, GIF transparents, GIF invisibles et GIF un à un) et les déployer par l’intermédiaire d’un partenaire spécialiste d’analyses Web susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l’adresse IP de l’Utilisateur) dans un pays étranger.</p>
                                    <p>Ces balises sont placées à la fois dans les publicités en ligne permettant aux internautes d’accéder au Site, et sur les différentes pages de celui-ci.</p>
                                    <p>Cette technologie permet à&nbsp;<a href="#/">#</a>&nbsp;d’évaluer les réponses des visiteurs face au Site et l’efficacité de ses actions (par exemple, le nombre de fois où une page est ouverte et les informations consultées), ainsi que l’utilisation de ce Site par l’Utilisateur.</p>
                                    <p>Le prestataire externe pourra éventuellement recueillir des informations sur les visiteurs du Site et d’autres sites Internet grâce à ces balises, constituer des rapports sur l’activité du Site à l’attention de&nbsp;<a href="#/">#</a>, et fournir d’autres services relatifs à l’utilisation de celui-ci et d’Internet.</p>
                                    <h2>&nbsp;</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-b64aee1 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="b64aee1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-c3e28fe elementor-column elementor-col-100 elementor-top-column" data-id="c3e28fe" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-b871cb9 elementor-widget elementor-widget-heading" data-id="b871cb9" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">10. Droit applicable et attribution de juridiction.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a6a937b elementor-widget elementor-widget-text-editor" data-id="a6a937b" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Tout litige en relation avec l’utilisation du site&nbsp;<a href=#>#</a>&nbsp;est soumis au droit français.<br>En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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