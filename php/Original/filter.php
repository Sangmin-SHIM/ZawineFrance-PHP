<?php
    require 'includes/connection.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="sangmin">
    <meta http-esquiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Filter</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<!-- JQuery Price Range Slider -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <style>
  .ui-slider-horizontal .ui-slider-range{
  background-color: #820000 !important;
  }
  </style>


     <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 300,
      values: [ 0, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
<!-- JQuery Price Range Slider -->

</head>
<body>
    <h3 class="text-center text-light bg-info p-2"> Filtering</h3>
    <div class="container-fluid">
        <div class="row">

        <!-- FILTERING -->
            <div class="col-lg-3">
                <h5>Filter Product</h5>
                
                <hr>

              <label for="amount"><h6 class="text-info">Price range:</h6></label>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                
                    <div id="slider-range"></div>  

                <br>
                <hr>

                <h6 class="text-info">Selectionner le Château</h6>
                <ul class="list-group">
                    <?php 
                      $sql="SELECT DISTINCT chateau FROM products ORDER BY chateau";
                      $result=$dbh->query($sql);
                      while($row=$result->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['chateau']; ?>" id="chateau">
                                <?= $row['chateau']; ?>
                            </label>
                        </div>
                    </li>
                <?php }  ?>
                </ul>

                <br>
                <h6 class="text-info">Selectionner le Nom</h6>
                <ul class="list-group">
                    <?php 
                      $sql="SELECT DISTINCT pro_nom FROM products ORDER BY pro_nom";
                      $result=$dbh->query($sql);
                      while($row=$result->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['pro_nom']; ?>" id="pro_nom">
                                <?= $row['pro_nom']; ?>
                            </label>
                        </div>
                    </li>
                <?php }  ?>
                </ul>

                <br>
                <h6 class="text-info">Selectionner la date</h6>
                <ul class="list-group">
                    <?php 
                      $sql="SELECT DISTINCT date FROM products ORDER BY date";
                      $result=$dbh->query($sql);
                      while($row=$result->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['date']; ?>" id="date">
                                <?= $row['date']; ?>
                            </label>
                        </div>
                    </li>
                <?php }  ?>
                </ul>
        <!-- /FILTERING -->
 

            </div>
            <div class="col-lg-9">
              <h5 class="text-center" id="textChange">All Products</h5>
              <hr>
               <div class="text-center">
                 <img src="images/loader.gif" id="loader" width="200" style="display:none;">
               </div>            
               <div class="row" id="result">
                 <?php
                  $sql="SELECT * FROM products";
                  $result=$dbh->query($sql);
                  while($row=$result->fetch(PDO::FETCH_ASSOC)) {
                 ?>
                 <div class="col-md-3 mb-2">
                   <div class="card-deck">
                     <div class="card border-secondary">
                       <img src="<?= $row['img']; ?>" class="card-img-top">
                       <div class="card-img-overlay">
                       <br><br>
                         <h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1"><?= $row['pro_nom'];?></h6>
                       </div>
                       <div class="card-body">
                         <h4 class="card-title text-danger">Prix : <?= number_format($row['pro_prix']); ?>/-</h4>
                         <p>
                           DATE : <?= $row['date'];  ?><br>
                           Château : <?= $row['chateau'];  ?><br>
                         </p>
                        <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                       </div>
                     </div>
                   </div>
                 </div>
                  <?php } ?>
               </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){

              // Class = ".product_check" //
            $(".product_check").click(function(){
              // Loading //
              $("#loader").show();

                // get_filter_text Name ID //
              var action = 'data';
              var chateau = get_filter_text('chateau');
              var nom = get_filter_text('pro_nom');
              var date = get_filter_text('date');

              $.ajax({
                url:'action.php',
                method:'POST',
                data:{action:action,chateau:chateau,nom:nom,date:date},
                success:function(response){
                    $("#result").html(response);
                    $("#loader").hide();
                    $("#textChange").text("Filtered Products");
                }
              });


            });
            

            function get_filter_text(text_id){
                var filterData = [];
                $('#'+text_id+':checked').each(function(){
                  filterData.push($(this).val());
                });
                return filterData;                
            }

        });
    </script>


</body>
</html>

