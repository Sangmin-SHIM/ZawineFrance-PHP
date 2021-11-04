<?php

session_start();
include ('includes/connection.php');


$total_price =0;

$item_details ='';

$order_details = '
<div class="table-responsive" id="order_table">
    <table class="table table-bordered table-striped">
        <tr>
            <th>Nom de Produits</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>Total</th>
        </tr>
</div>
';

if(!empty($_SESSION['shopping_cart']))
{   
    foreach($_SESSION['shopping_cart'] as $keys => $values)
    {
        $order_details .='
        <tr>
            <td>'.$values["name"].'</td>
            <td>'.$values["quantity"].'</td>
            <td>$ '.$values["price"].'</td>
            <td>$ '.number_format($values["quantity"]*$values["price"], 2).'</td>
        </tr>
        ';
        $total_price = $total_price + ($values["quantity"]*$values["price"]);
        $item_details .= $values["name"] . ', ';
    }
    $item_details = substr($item_details, 0, -2);
    $order_details .='
    <tr>
        <td colspan="3" style="text-align:right;">Total</td>
        <td>$ '.number_format($total_price, 2).'</td>
    </tr>
    ';
}else{
        $order_details="Il n'y a aucuns produits";
}

?>

<?php 

// BDD pour Carte
if(isset($_POST["button_action"]))

{
  
  $customer_name=$_POST['customer_name'];
  $customer_address=$_POST['customer_address'];
  $customer_city=$_POST['customer_city'];
  $customer_state=$_POST['customer_state'];
  $customer_country=$_POST['customer_country'];

$sql = $dbh->prepare("INSERT INTO order_table(customer_name, customer_address, customer_city, customer_state, customer_country)
VALUES(:customer_name,:customer_address,:customer_city,:customer_state,:customer_country)");

$sql->execute(array(
  ':customer_name'=>$customer_name,
  ':customer_address'=>$customer_address,
  ':customer_city'=>$customer_city,
  ':customer_state'=>$customer_state,
  ':customer_country'=>$customer_country,
));
}
?>


<?php 

  $total_price =0;
  $quantity ='';
  $item_details ='';


  // BDD pour Article Acheté
  if(isset($_SESSION["shopping_cart"]))
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
      { $total_price = $total_price + ($values["quantity"]*$values["price"]);
        $item_details .= $values["name"] . ', ';
        

        $quantity .= $values["quantity"] . ', ';
        

      }

  if(isset($_POST["button_action"]))
  {
  $customer_name=$_POST['customer_name'];
        
  $sql = $dbh-> prepare("INSERT INTO order_item(customer_name, total_item_name, total_item_quantity, total_item_price) VALUES (:customer_name,:total_item_name,:total_item_quantity,:total_item_price)");

  $sql->execute(array(
    ':customer_name'=>$customer_name,
    ':total_item_name'=>$item_details,
    ':total_item_quantity'=>$quantity,
    ':total_item_price'=>$total_price,
  ));
      //DB에 저장할 것들 ... 
      //var_dump("$quantity");
      //var_dump("$item_details");
      //var_dump("$total_price");
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Order</title>

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

<!-- Stripe JS-->
<script src="https://js.stripe.com/v2/"></script>
<script src="../js/jquery.creditCardValidator.js"></script>
<!-- Stripe JS-->

    </head>
    <body>
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
    
    
                          //if (session_status() == PHP_SESSION_ACTIVE) {
                          //echo 'You are logged in !<br>';}
    
                          //echo "$email", "   :-)";
                          //echo "<br><a href='logout.php'>Logout</a><br><br>";
                        } else  
                        { 
                          //echo "<a>Vous pouvez payer sans compte ! </a>";
                        }
                    ?>
                      </p>
                </div>
        </div>
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
                        echo "<a>NOM : </a>";
                        echo $result[0]['nom'];
                        echo '<br>';
                        echo "<a>PRENOM : </a>";
                        echo $result[0]['prenom'];
                        }                        
?>  

<div class="container">
            <form action="payment.php" method="POST" id="order_process_form">

                <h1 style="text-align:center; margin-bottom: 0px !important;">Facture</h1>
                <?php
                 echo $order_details;
                ?> 
                
  
            <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            name="stripe_button"
            data-key="pk_test_51GxC3jJWSgDsRORfFCGh4yGEUrE8KY3kc9mflIKhQK347KLn0Lmju5fteqnnVcm3Gnpm0qOUOYlhutDHgov8C8PG00eXJ1hsag"
            data-amount="<?php echo json_encode($total_price*100)?>"
            data-name="Paiement"
            data-currency="eur"
            data-description="<?php echo json_encode($item_details)?>"
            data-image="Images\GKM.jpg"
            data-locale="auto"
            data-zip-code="true">   
             </script>
             
        </form>
                   
</div>

<hr>
    <br><br><br>
    
    </body>
</html>
