<?php
session_start();
//BDD
include('connection.php');
error_reporting(0);
$pwd='123123';
$hash= password_hash($pwd, PASSWORD_DEFAULT);

$sql= "SELECT nom, prenom, email, pwd FROM users WHERE pwd=:pwd";
$query=$dbh-> prepare($sql);

$query->bindParam(':pwd',$pwd,PDO::PARAM_STR);

$query->execute();
$result=$query->fetchAll(PDO::FETCH_OBJ);

var_dump($result);


if($query-> rowCount() > 0) 
{
 if (password_verify($pwd,$hash))
 {    
    echo 'OK';
 } 

} else {
    echo 'No';
}

?>