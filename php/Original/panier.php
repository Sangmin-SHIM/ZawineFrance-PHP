<?php
    session_start();
    include ('includes/connection.php');
        





$product_ids = array();
//session_destroy(); 
//check if Add to Cart button has been submitted
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
            'quantity' => filter_input(INPUT_POST, 'quantity')
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
            'quantity' => filter_input(INPUT_POST, 'quantity')
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
    
    
                          if (session_status() == PHP_SESSION_ACTIVE) {
                          echo 'You are logged in !<br>';}
    
                          echo "$nom", "   :-)";
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
<br>
<div class="table-responsive">
<table class="table">
    <tr><th colspan="5"><h3>Order Details</h3></th></tr>
    <tr>
        <th width="40%">Product Name</th>
        <th width="10%">Quantity</th>
        <th width="20%">Price</th>
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
        <td><?php echo $product['name'];?></td>
        <td><?php echo $product['quantity'];?></td>
        <td><?php echo $product['price'];?></td>
        <td><?php echo number_format($product['quantity']*$product['price'],2);?></td>
        <td>
            <a href="panier.php?action=delete&id=<?php echo $product['id'];?>">
                <div class="btn-danger">Remove</div>
            </a>
        </td>
    </tr>
    <?php
        
        $total = $total + ($product['quantity']*$product['price']);
        
    }
    }
    ?>
    

    <tr>    
    <td colspan="3" style="text-align:right">Total</td>
    <?php
    if(empty($_SESSION['shopping_cart'])) {
        echo "<td style='text-align:right'>$ 0</td>";
        echo "<td></td>";
    }
    else{
        echo "<td style='text-align:right'>";
        echo htmlspecialchars("$ $total");
        echo "</td>";
    }
    ?>
        
    </tr>

    <tr>
        <td colspan="5">
        <?php
            if (isset($_SESSION['shopping_cart'])){
                if(count($_SESSION['shopping_cart'])>0){
             
        ?>
        <a href="#" class="button">Checkout</a>
        
        <?php
        }
        }
        ?>
        </td>

    </tr>
</table>
</div>
</div>

<br><br><br>
<div class="container">
    <a href="moins40.php">Moins40.php</a>
    <br><br><br><br><br>

<!-- /Panier Panier Panier Panier Panier Panier Panier Panier -->        
    </body>
</html>