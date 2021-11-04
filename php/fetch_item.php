<?php
    include ('includes/connection.php');

    $query = "SELECT * FROM products ORDER BY id DESC";

    $statement= $dbh->prepare($query);

    
    if($statement->execute())
    {
       $result = $statement->fetchAll();
       $output='';

       foreach($result as $row)
       {
           $output .='
           <div class="col-sm-6 col-lg-3 col-md-3" style="position: relative;
           display: inline-block;
           vertical-align: top;
           text-align:center;
           min-width: 16em;
           margin: 0 1em 2.5em;
           padding: 1.5em 1.5em 2em;
           background: linear-gradient(360deg, #fdfbfb, #ebedee);
           border-radius: 5px;">
                           <div style="text-align: center">
                               <img src="'.$row['img'].'" class="img-responsive">
                           </div>
                               <h5 class="product_title">'.$row['pro_nom'].'</h5>
                               <span class="product_price highlight">'. number_format($row['pro_prix']).'</span><br>
                               Année : '.$row['date'].'<br>
                               <strong> '.$row['chateau'].'</strong><br>
                               <input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
                               <input type="hidden" name="hidden_image" id="image'.$row["id"].'" value="'.$row["img"].'" />
                               <input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["pro_nom"].'" />
                               <input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["pro_prix"].'" />
                               <input type="button" name="add_to_cart" id="'.$row["id"].'" style="font-weight : bolder; margin-top:5px; color: #ffaf00; background-color:#820000; border-color:#820000 !important;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
                    
           </div>';
       }
       echo $output;
    }


?>

