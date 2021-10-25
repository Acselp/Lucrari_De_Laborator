<?php
include_once('./db_conn.php');

$uname = $_POST["username"];
$passw = $_POST["password"];

$query = "insert into users (`username`, `password`) values ('$uname', '$passw');";


$response = mysqli_query($conn, $query);

if($response){
    die('<br>Regitration succesfully!!!');
}
else {
    die('<br>Something went wrong.');
}