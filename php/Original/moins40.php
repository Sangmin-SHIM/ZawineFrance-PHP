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
    <title>Vins Moins de 40 Euros</title>




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
          <a class="my-md-3 site-title text-Black">Zawine France</a>
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
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Couleur
                        <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Blanc
                                <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Evenement
                                        <i class="fas fa-chevron-down"></i>
                                        </a>
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
                                        <a href="#">Moins de 40 Euros</a>
                                    </li>
                                </ul>    
                            </li>
                            <li>
                                <a href="#">Rouge
                                <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Evenement
                                        <i class="fas fa-chevron-down"></i>
                                        </a>  
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
                                        <a href="#">Moins de 40 Euros</a>
                                    </li>
                                </ul>  
                            </li>
                            <li>
                                <a href="#">Rosé
                                <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Evenement
                                        <i class="fas fa-chevron-down"></i>
                                        </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">Mariage</a>
                                                </li>
                                                <li>
                                                    <a href="#">Soirée</a>
                                                </li>
                                                <li>
                                                    <a href="#">Hello</a>
                                                </li>
                                            </ul> 
                                    </li>
                                    <li>
                                        <a href="#">Moins de 40 Euros</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Château
                        <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                                                <li>
                                                    <a href="#">Arpaillan</a>
                                                </li>
                                                <li>
                                                    <a href="#">Brondeau</a>
                                                </li>
                        </ul> 
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Partenaires</a>
                    </li>
                    <li class="move-right btn">
                        <a href="#" class="move-a">Contact</a>
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
                            <a href="checkout.php" class="iconbtn fas fa-cash-register" data-info="Ma Liste" title="paiement"></a>
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


    <div class="container-fluid">
        <div class="row" >
        <br>
        <br>
        <br>
            <div class="col-md-3">
            <h3>Price</h3>

                <div class="list-group">
                    <input type="hidden" id="hidden_minimum_price" value="0">
                    <input type="hidden" id="hidden_maximum_price" value="100">
                    <p id="price_show">10 - 95</p>
                    <div id="price_range"></div>
                </div>

                <div class="list-group">
                    <h3>Château</h3>
                    <?php
                      $query = "SELECT DISTINCT chateau FROM products ORDER BY chateau";
                      $statement=$dbh->prepare($query);
                      $statement->execute();
                      $result = $statement->fetchAll();
                      foreach($result as $row)
                      {
                      ?>
                      <div class="list-group-item checkbox" style="color:#820000;">
                        <label><input type="checkbox" class="common_selector chateau" value="<?php echo $row['chateau']; ?>" > <?php echo $row['chateau']; ?> </label>
                      </div>
                      <?php
                      }
                      ?>
                </div>

                <div class="list-group">
                    <h3>Date</h3>
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
                </div>

                <div class="list-group">
                    <h3>Nom</h3>

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
                </div>

            </div>    

            <div class="col-md-9" style="margin-top:1rem;">
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
        <i class="fas fa-heart"></i>
  </div>
  <a class="facility-a">Collect</a>
  </div>


  <div class="column facility">
  <div class="icon-facility">
        <i class="fas fa-heart"></i>
  </div>
  <a class="facility-a">Collect</a>
  </div>


  <div class="column facility">
  <div class="icon-facility">
        <i class="fas fa-heart"></i>
  </div>
  <a class="facility-a">Collect</a>
  </div>


  </div>
  </div>     
    <!-- /Facilities -->
  </main>

<!--- /Main Section -->
      

<?php
include ("includes/footer.php");
?>

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
                url:"fetch_data.php",
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
        min:10,
        max:95,
        values:[10,95],
        step:5,
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