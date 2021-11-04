<?php
    include ('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="sangmin">
    <meta http-esquiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Filter and Range</title>

<!-- Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering -->

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


<!-- Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering Filtering -->



<style>
#loading
{
    text-align:center;
    background:url('images/loader.gif') no-repeat center;
    height:150px;

}
</style>
</head>
<body>

<h3 class="text-center text-light bg-info p-2"> Filtering</h3>

    <div class="container-fluid">
        <div class="row">
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
                      <div class="list-group-item checkbox">
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
                    <div class="list-group-item checkbox">
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
                    <div class="list-group-item checkbox">
                      <label><input type="checkbox" class="common_selector nom" value="<?php echo $row['pro_nom'];?>"><?php echo $row['pro_nom'];?></input></label>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>    

            <div class="col-md-9">
                <br>
                <div class="row filter_data">
 
                </div>
        </div>

        </div>
    </div>

<!-- Payment Layout -->
<div class="row" style="margin: auto">
    <div class="container text-center">
        <p class="pt-5">
          <img src="images/assets/payment.png" alt="payment image" class="img-fluid">
        </p>
        <small class="text-secondary py-4">Zawine France © 2020 Wine Store. All Rights Reserved. Designed by Sangmin SHIM, Aminata MBATHIE</small>
    </div>
</div>  
<!-- /Payment Layout -->
</div>

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
</html>