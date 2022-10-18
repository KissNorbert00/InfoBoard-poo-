<?php

$servername = "localhost";
$username = "manager";
$password = "mngr";
$dbname = utf8_decode("info_board");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Conect faild:" .$conn->connect_error);
}else{
    $conn->set_charset("utf8");
}


?>