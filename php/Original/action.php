<?php
    require 'includes/connection.php';

    if(isset($_POST['action'])) {
        $sql = "SELECT * FROM products WHERE chateau !=''";


        if(isset($_POST['chateau'])) {
            $chateau = implode("','", $_POST['chateau']);
            $sql .="AND chateau IN('".$chateau."')";
        }
        if(isset($_POST['nom'])){
            $nom = implode("','", $_POST['nom']);
            $sql .="AND pro_nom IN('".$nom."')";
        }
        if(isset($_POST['date'])){
            $date = implode("','", $_POST['date']);
            $sql .="AND date IN('".$date."')";
        }

        $result= $dbh->query($sql);
        $output='';

        if($result->rowCount()>0){
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $output .='<div class="col-md-3 mb-2">
                <div class="card-deck">
                  <div class="card border-secondary">
                    <img src="'.$row['img'].'" class="card-img-top">
                    <div class="card-img-overlay">
                    <br><br>
                      <h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1">'.$row['pro_nom'].'</h6>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text-danger">Prix : '. number_format($row['pro_prix']).'/-</h4>
                      <p>
                        DATE : '.$row['date'].'<br>
                        Château : '.$row['chateau'].'<br>
                      </p>
                     <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>';
            }
        }
        else{
            $output="<h3>No Prodcuts Found</h3>";
        }
        echo $output;
    }
?>

