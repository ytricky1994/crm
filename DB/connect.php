<?php

$dbServername = "localhost";
$dbUsername ="root";
$dbPassword = "";
$dbName = "dr_efstathiou"


//database connection
$conn = new mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error){
    die('Connection Failed: '.$conn-connect_error);
}else{
    stmt = $conn->prepare()
}
?>