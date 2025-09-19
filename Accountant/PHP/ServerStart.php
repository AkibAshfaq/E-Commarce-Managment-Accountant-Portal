<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-commerce-managment-db";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Falied". $conn->connect_error);
}

?>