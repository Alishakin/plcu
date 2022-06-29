
<?php

if (isset($_POST['submit'])) {
$DB_HOST = "localhost";
$DB_USER = "admin";
$DB_PASSWORD ="admin";
$DB_NAME= "empresa";


$name= $_POST['name'];
$number= $_POST['number'];
$email= $_POST['email'];
$Date= $_POST['Date'];
$password= $_POST['password'];
 
    $connection = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
    
    if(!$connection){
        die("Connection failure". mysqli_connect_error());
    }
    
    echo "connected successfully";
 $query = "INSERT INTO empleados VALUES('$name','$email','$number','$Date','$password')";
    
 $run_query= mysqli_query($connection,$query);
 
 if($run_query){
 echo "New recorder inserted";
 }else{
 echo "Failure in insert";
 }
}
?>