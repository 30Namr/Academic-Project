<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sainathmotors_library";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>