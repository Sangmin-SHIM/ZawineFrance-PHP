<?php 

include ('includes/connection.php');
session_start();

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
        
      //DB에 저장할 것들 ... 
      //var_dump("$quantity");
      //var_dump("$item_details");
      //var_dump("$total_price");
    }
  }
?>

<?php
   require_once ('vendor/autoload.php');

 // Set your secret key: remember to change this to your live secret key in production
 // See your keys here: https://dashboard.stripe.com/account/apikeys
 \Stripe\Stripe::setApiKey("sk_test_51GxC3jJWSgDsRORf6c68rAqyxtKnk7FyPAtUpoCsaE76DHC0XToAkOjmhgOnCAa2atdRSDHD7jqn7P6ZgaAbkrgx00q21fJczD");
  
  
 // Token is created using Checkout or Elements!
 // Get the payment token ID submitted by the form:
 if(isset($_POST['stripeToken'])) { 
 

 $token = $_POST['stripeToken'];
  
 try { 
  
             $charge = \Stripe\Charge::create([
             'amount' => $total_price*100,
             'currency' => 'eur',
             'description' => $item_details,
             'card' => $token,
 ]);
 }
  
  
 catch(Stripe_CardError $e) {
     //Do something with the error here
  
  }

unset($_SESSION["shopping_cart"]);

$_SESSION["success_message"] = "Paiement bien effectué. Vous venez d'acheter &nbsp;" .$item_details. "";

 header('Location: moins40.php');
  
 }
     ?>