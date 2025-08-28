<?php

$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "demo";


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn){
    echo "";
}else{
    echo "not";
}

?>