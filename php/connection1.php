<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siritha";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) 
{
    die("Connection failed: " . $connect->connect_error);
}

?>