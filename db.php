<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "library_crud";
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
    die("Error connecting to". $conn->connect_error);
}
?>