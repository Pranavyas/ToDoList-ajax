<?php

$a= $_POST['a'];
$b= $_POST['b'];


$con =new mysqli("localhost","root","Pranav.vyas@1297","signup");

if($con->connect_error) {
    die("Error:" .$con->connect_error);
}

$sql= "SELECT name from details where name ='$a'";

if( $con->query($sql) == TRUE){
    echo "wrong";
}else{
    echo "wrong user name and password";
}

//echo $a."<br>";
//echo $b;



?>