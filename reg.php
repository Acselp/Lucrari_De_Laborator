<?php
include "./DbHandler.php";

$conn = new DbHandler("localhost", "mydb", "root", "");

$uname = $_POST["username"];
$passw = $_POST["password"];

$query = `insert into users ('username', 'password') values ($uname, $passw);`;

$response = mysqli_query($conn, $query, true);

if($response){
    die('<br>Regitration succesfully!!!');
}
else {
    die('<br>Something went wrong.');
}