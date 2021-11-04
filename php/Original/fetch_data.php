<?php
    include ('includes/connection.php');

    session_start();
    
if(isset($_POST["action"]))
{
    $query="SELECT * FROM products  WHERE chateau !=''";

    if(isset($_POST["minimum_price"], $_POST["maximum_price"])&& !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))

    {
        $query .="AND pro_prix BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'";
    }

    if(isset($_POST["chateau"]))
    {
        $chateau_filter = implode("','",$_POST["chateau"]);
        $query .="AND chateau IN('".$chateau_filter."')";
    }

    if(isset($_POST["date"]))
    {
        $date_filter = implode("','",$_POST["date"]);
        $query .="AND date IN('".$date_filter."')";
    }

    if(isset($_POST["nom"]))
    {
        $nom_filter = implode("','",$_POST["nom"]);
        $query .="AND pro_nom IN('".$nom_filter."')";
    }

    $statement = $dbh ->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll();
    $total_row= $statement->rowCount();
    $output='';


    if($total_row > 0)
    {
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

            <form method="POST" action="panier.php?action=add&id='.$row['id'].'; ?>">

                            <div style="text-align: center">
                                <img src="'.$row['img'].'" class="img-responsive">
                            </div>
                                <h5 class="product_title">'.$row['pro_nom'].'</h5>
                                <span class="product_price highlight">'. number_format($row['pro_prix']).'</span><br>
                                Année : '.$row['date'].'<br>
                                <strong> '.$row['chateau'].'</strong><br><br>
                                
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="name" value="'.$row['pro_nom'].'">
                            <input type="hidden" name="price" value="'.$row['pro_prix'].'">
                            <input type="submit" name="add_to_cart" class="btn btn-block" value="Add to Cart" style="color: #ffaf00; background-color:#820000; margin-top:5px;">
            </form>                     
            </div>';
        }
    }
    else
    {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}


?>