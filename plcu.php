<?php

        error_reporting(0);

$DB_HOST = "localhost";
$DB_USER = "adminplcu";
$DB_PASSWORD ="Admin";
$DB_NAME= "plcultima";


$name= $_POST['name'];
$number= $_POST['number'];
$email= $_POST['email'];
$message= $_POST['message'];

 
    $connection = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
    
    if(!$connection){
        die("Connection failure". mysqli_connect_error());
    }
    
    echo "connected successfully";
//if (isset($_POST['submit'])) {
 $query = "INSERT INTO prospects VALUES('$name','$email','$number','$message')";
    
 $run_query= mysqli_query($connection,$query);
 
 if($run_query){
 echo "New recorder inserted";
 }else{
 echo "Failure in insert";
 }
//}
?>
