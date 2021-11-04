<?php
    include ('includes/connection.php');

    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="sangmin">
    <meta http-esquiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domaine de Brondeau Lalande</title>




<!-- FontAwesome -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- /FontAwesome -->


<!-- Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering -->


<!-- BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- /BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap BootStrap-->


<!-- JQuery Price Range Slider -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering -->

 
<!--Icon -->
<link rel="shortcut icon" href="../images/GKM.ico">
<!-- Fontawesome CSS-->
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<!-- Footer Footer Footer-->       
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
<!-- Font Awesome CDN -->
<script src="../js/fontawesome.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Custom Stylesheet -->
<link rel="stylesheet" href="../css/online.css"/>
<!-- /Footer Footer Footer-->

<!-- new nav-->
<link href="../css/newnav.css" rel="stylesheet">
<!-- /new Nav-->

<!-- product css-->
<link href="../css/product.css" rel="stylesheet">
<!-- /Product css-->

<style>
#loading
{
    text-align:center;
    background:url('images/loader.gif') no-repeat center;
    height:150px;

}
.ui-slider-range.ui-corner-all.ui-widget-header {
    background-color:#820000;
}

@media screen and (max-width: 740px) {
    .bodynewnav {
        margin-top:10% !important;
    }

div.ui-slider.ui-corner-all.ui-slider-horizontal.ui-widget.ui-widget-content{
    background-color:#820000 !important;
}

.popover{
    whdth:100%;
    max-width:800px;
}

}

</style>

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
    <!-- /Nav -->

    <br><br><br><br><br><br><br><br>
		
        <div class="sangmin">
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
    </div>

    <?php 
    //from Payment.php
    if(isset($_SESSION["success_message"]))
    {
        echo '<div class="alert alert-success">'.$_SESSION["success_message"].'</div>';
        unset($_SESSION["success_message"]);
    }
    ?>
    <h2 style="text-align:center; font-family:Fredericka the Great;">Domaine de Brondeau Lalande</h2>
    <hr>

    <div class="container-fluid">
        <div class="row" >
           <!-- <div class="col-md-3"> -->
           <!-- <h4>Price</h4>

                <div class="list-group">
                    <input type="hidden" id="hidden_minimum_price" value="0">
                    <input type="hidden" id="hidden_maximum_price" value="30">
                    <p id="price_show">1 - 30</p>
                    <div id="price_range"></div>
                </div> -->
               <!-- <br> -->
                
               <!-- <div class="list-group">
                    <h4>Château</h4>
                    <br>
                    <?php
                      $query = "SELECT DISTINCT chateau FROM products ORDER BY chateau";
                      $statement=$dbh->prepare($query);
                      $statement->execute();
                      $result = $statement->fetchAll();
                      foreach($result as $row)
                      {
                        if($row['chateau'] !="Graves" && $row['chateau'] !="Pauillac" && $row['chateau'] !="Pessac Léognan")
                        {
                      ?>
                      <div class="list-group-item checkbox" style="color:#820000;">
                        <label><input type="checkbox" class="common_selector chateau" value="<?php echo $row['chateau']; ?>" > <?php echo $row['chateau']; ?> </label>
                      </div>
                      <?php
                        } 
                    }
                      ?>
                </div>
                <br>

                <div class="list-group">
                <h4>Date</h4>
                    <?php

                    $query = "SELECT DISTINCT date FROM products ORDER BY date";
                    $statement=$dbh->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    { 
                    ?>
                   <div class="list-group-item checkbox" style="color:#820000;">
                      <label><input type="checkbox" class="common_selector date" value="<?php echo $row['date']; ?>"> <?php echo $row['date'];?></input></label>
                    </div>
                    <?php
                    
                    }
                    ?>
                </div> -->

                <!--<div class="list-group">
                    <h4>Nom</h4>
                    <br>
                    <?php

                    $query= "SELECT DISTINCT pro_nom FROM products ORDER BY pro_nom";
                    $statement=$dbh->prepare($query);
                    $statement->execute();
                    $result=$statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox" style="color:#820000;">
                      <label><input type="checkbox" class="common_selector nom" value="<?php echo $row['pro_nom'];?>"> <?php echo $row['pro_nom'];?></input></label>
                    </div>
                    <?php
                    }
                    ?>
                </div>-->

            <!--</div>-->    

            <div class="col-md-12 container" style="margin-top:1rem; padding-left:15%;">
                <br>
                <div class="row filter_data">
 
                </div>
            </div>

        </div>
    </div>


<br><br><br>

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

<!-- Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering -->
<script>
$(document).ready(function(){


  
    filter_data();


    function filter_data()
    {
            $('.filter_data').html('<div id="loading" style=""></div>');
            var action = 'fetch_data';
            var minimum_price = $('#hidden_minimum_price').val();
            var maximum_price = $('#hidden_maximum_price').val();
            var chateau = get_filter('chateau');
            var date = get_filter('date');
            var nom = get_filter('nom');
            
            $.ajax({
                url:"fetch_brondeau.php",
                method:"POST",
                data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, chateau:chateau, date:date, nom:nom},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
    }

    function get_filter(class_name)
    {
        var filter= [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1,
        max:30,
        values:[1,30],
        step:3,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });


});
</script>
<!-- /Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering -->

</body>

<script src="../js/newnav.js"></script>
</html>