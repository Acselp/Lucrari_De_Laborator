<?php
include ("functions.php");
include("./DbHandler.php");
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
    updateLastLogged($db, $_SESSION['username']);
    session_destroy();
}

header("Location: http://localhost/TWEB/loginForm.php");