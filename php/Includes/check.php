<?php
require_once("connection.php");

if(!empty($_POST["email"])) {
    $email= $_POST["email"];
    $sql = "SELECT email FROM users WHERE email=:email";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':email',$email, PDO::PARAM_STR);
    $query->execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount()>0)
    {
    echo "<span style='color:red'>Cet E-mail déjà existe. hahaha</span>";
    } else{
    echo "<span style='color:green'>Vous pouvez vous inscrire avec cet E-mail.</span>";
    }
    }

?>