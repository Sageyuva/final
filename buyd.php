<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "buy";

$conn = new mysqli($servername,$username,$password,$db);
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['address'])&& !empty($_POST['product'])&& !empty($_POST['prize']))
     $name=$_POST['name'];
     $email=$_POST['email'];
     $address=$_POST['address'];
     $product=$_POST['product'];
     $prize=$_POST['prize'];
     $query = "INSERT INTO buy1 (name,email,address,product,prize) VALUE ('$name' , '$email' , '$address' , '$product' , '$prize')";
     $insert = mysqli_query($conn,$query);
     if(!$insert){
         echo"SUBMITTED";
     }
    
    else{
        echo"SUBMITTED";
    }
}

?>