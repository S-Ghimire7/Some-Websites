<?php
$servername="localhost";
$username = "root";
$password = " ";
$connect =  mysqli_connect($servername,$username,$password);
if(!$scan){
    die("Connection Failed: .mysqli_connect_error() ");
}
$sql="CREATE DATABASE webTech";

if(mysqli_query ($connect,$sql));{
    echo"Database created sucessfully.";
}

else{
    echo"Error:.mysqli_error($connect)";
}
mysqli_close($connect)
?>