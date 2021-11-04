<?php
    session_start();
    include ('includes/connection.php');
        





$product_ids = array();
//session_destroy(); 
//check if Add to Cart button has been submitted
//From Fetch_data.php
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){

        //keep track of how many products are in the shopping cart
        $count = count($_SESSION['shopping_cart']);

        //create sequantial array for matching array keys to products id's
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['shopping_cart'][$count]=array
            (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' =>  filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity'),
            'image' => filter_input(INPUT_POST, 'image')
            );
    
        }

        else{//product already exists, increase quantity
            //match array key to id of the prodcut being added to the cart
            for ($i =0; $i<count($product_ids); $i++){
                if ($product_ids[$i]== filter_input(INPUT_GET, 'id')) {
                    //add item quantity to the exsting product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    }
    else{ //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted from data, start from key 0 and fill it with values
        $_SESSION['shopping_cart'][0]=array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' =>  filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity'),
            'image' => filter_input(INPUT_POST, 'image')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            UNSET($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

//function pre_r($array){
//  echo '<pre>';
//    print_r($array);
//    echo '</pre>';
//}
?>


<html>
    <head>
        <title>Panier</title>
<link rel="shortcut icon" href="../images/GKM.ico">

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
    </head>
    <body>

<!-- Panier Panier Panier Panier Panier Panier Panier Panier -->
 <div class="container">
 <?php
    $connect = mysqli_connect('localhost','root','','login');
    $query= 'SELECT * FROM products ORDER BY id ASC';
    $result = mysqli_query($connect, $query);

    if ($result){
        if(mysqli_num_rows($result)>0){
            while($product = mysqli_fetch_assoc($result)){
             
            }
            }
            }
    ?>

  
<div style="clear:both"></div>
<div class="table-responsive">
<table class="table">
    <tr><th colspan="5" style="border-top:0"><h3>Détails de Produits</h3></th></tr>
    <tr>
        <th width="30%">Image</th>
        <th width="40%">Nom de Produits</th>
        <th width="10%">Quantité</th>
        <th width="20%">Prix</th>
        <th width="15%">Total</th>
        <th width="5%">Action</th>
    </tr>

    <?php     
    if(!empty($_SESSION['shopping_cart'])){

        $total = 0;

        foreach($_SESSION['shopping_cart'] as $key => $product)
        {
        
    ?>
    <tr>
        <td><img src="<?php echo $product['image'];?>" class="img-responsive"></td>
        <td style="vertical-align:middle;"><?php echo $product['name'];?></td>
        <td style="vertical-align:middle;"><?php echo $product['quantity'];?></td>
        <td style="vertical-align:middle;"><?php echo $product['price'];?></td>
        <td style="vertical-align:middle;"><?php echo number_format($product['quantity']*$product['price'],2);?></td>
        <td style="vertical-align:middle;">
            <a href="panier.php?action=delete&id=<?php echo $product['id'];?>">
                <div class="btn-default" style="color:#820000;">Remove</div>
            </a>
        </td>
    </tr>
 
    <?php
        
        $total = number_format($total + $product['quantity']*$product['price'],2);
        
    }
    }
    ?>
    

    <tr>    
    <td colspan="3" style="text-align:right">Total Products</td>
    <?php
    if(empty($_SESSION['shopping_cart'])) {
        echo "<td style='text-align:left'>€ 0</td>";
        echo "<td></td>";
        echo "<td></td>";
    }
    else{
        echo "<td style='text-align:left'>";
        echo htmlspecialchars("€ $total");
        echo "</td>";
        echo "<td></td>";
        echo "<td></td>";
        
        echo "<br><br><br>";
        echo "<tr>";
        echo "<th width='30%'></th>";
        echo "<th width='40%'></th>";
        echo "<th width='10%'></th>";
        echo "<th width='20%'></th>";
        echo "<th width='15%'></th>";
        echo "<th width='5%'><a href='' class='button'></a></th>";
        echo "</tr>";
    }
    ?>       
    </tr>

    <tr>
        <td colspan="5" style="border-top:0px;">
        <?php
            if (isset($_SESSION['shopping_cart'])){
                if(count($_SESSION['shopping_cart'])>0){
             
        ?>

        
        <?php
        }
        }
        ?>
        </td>

    </tr>
</table>
</div>
</div>

<div class="container">
<div>
<a href="moins40.php" style="border-radius:3px; border:solid; border-color:#820000; background-color:#820000; color:#ffaf00; padding:5px;">Continuer Mes Achats (Moins de 40€)</a>
</div>
<br>
<div>
<a href="arpaillan.php" style="border-radius:3px; border:solid; border-color:#820000; background-color:#820000; color:#ffaf00; padding:5px;">Continuer Mes Achats (Domaine d'Arpaillan)</a>
</div>
<br>
<div>
<a href="brondeau.php" style="border-radius:3px; border:solid; border-color:#820000; background-color:#820000; color:#ffaf00; padding:5px;">Continuer Mes Achats (Domaine de Brondeau Lalande)</a>
</div>
</div>
<!-- /Panier Panier Panier Panier Panier Panier Panier Panier -->        

<br><br>
<form action="order.php" method="POST" id="order_process_form">
            <div class="container">
            <div class="row">
            
                <div class=" col-md-12 col-sm-12" style="solid #ddd;">
                <h3 style="text-align:left;">Détails de Client</h3>
                <hr>
                <div class="form-group">
                  <label><b>Titulaire de la carte bleue<span class="text-danger">*</span></b></label>
                  <input type='text' name='customer_name' id='customer_name' class='form-control' placeholder="NOM Prénom" style='width:50% !important;' value='' required=''>
                  </input>
                </div>
                
                <div class="form-group">
                  <!--<label"><b>Email Address<span class="text-danger">*</span></b></label> -->
                  
                  <?php
                        //Si le Client est en login, Partie Email est remplie automaituqement
                        //Validation Session 'userlogin' par login.php
                        //if(isset($_SESSION['userlogin']))
                        //{
                        //$email=$_SESSION['userlogin'];
                        // $query=$dbh->prepare("SELECT nom,prenom,email FROM users WHERE (email=:email)");
                        // $query->execute(array('email'=>$email)); 
                        // $result=$query->fetchAll(PDO::FETCH_OBJ);
    
                        // echo "<input type='email' name='email_address' id='email_address' class='form-control' style='width:50% !important;' value='$email' pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$' required=''>";
                        
                        //} else 
                        //{
                        //   echo "<input type='email' placeholder='client@email.com' name='email_address' id='email_address' class='form-control' style='width:50% !important;' value='' pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$' required=''>";
                        //}
                    ?>

                </div>

                <div class="form-group">
                  <label><b>Address<span class="text-danger">*</span></b></label>
                  <textarea name="customer_address" id="customer_address" class="form-control" style="width:70%;" required></textarea>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><b>Ville<span class="text-danger">*</span></b></label>
                                <input type="text" name="customer_city" id="customer_city" class="form-control" value="" required='' oninvalid="this.setCustomValidity('Veuillez remplir')" oninput="setCustomValidity('')">
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><b>Département</b></label>
                                <input type="text" name="customer_state" id="customer_state" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><b>Pays</b></label>
                                <input type="text" name="customer_country" id="customer_country" class="form-control" value="FRANCE">
                                <span id="error_customer_country" class="text-danger"></span>
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
 
                            </div>
                        </div>
                </div>
                <hr>
                <div class="form-group">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <input type="checkbox" required>
                <label>J’ai lu et j’accepte <a href="conditions_generales.php">les conditions générales*</a></label>

                <br>
                <div style="text-align:center;">

                    <input type="hidden" name="total_amount" value="<?php echo $total_price;?>">
                    <input type="hidden" name="currency_code" value="EUR">
                    <input type="hidden" name="item_details" value="<?php echo $item_details;?>">
                    <div style="margin-left:30%; margin-right:30%;">
                    <br>
                    <input type="submit" name="button_action" class="btn btn-block" value="Acheter" style="color: #ffaf00; background-color:#820000; margin-top:5px;">
                    </div>

        </form>



        <br><br><br>

    <div class="container">

    </body>
</html>