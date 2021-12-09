<?php

//Validarea pentru email
function emailValide($email) {

    if($email === "" || $email == null) {
        return false;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}

//Validarea pentru prola
function passwordValide($pwd) {

    if($pwd === "" || $pwd == null) {
        return false;
    }
    else if(strlen($pwd) < 8) {
        return false;
    }
    else if(strlen($pwd) > 20) {
        return false;
    }

    return true;
}

//Validarea pentru username
function usernameValide($uname) {

    if($uname === "" || $uname == null) {
        return false;
    }
    else if(strlen($uname) < 3) {
        return false;
    }
    else if(strlen($uname) > 20) {
        return false;
    }

    return true;
}

//Pentru SQP injections
function preventInjection($string) {
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);

    return $string;
}

//Returns true if user exists and false if user does not exist
function userExists($db, $uname) {
    $sql = "SELECT * FROM users WHERE username = '$uname'";
    $res = $db->connect()->query($sql);
    $numRows = $res->num_rows;

    $db->disconnect();

    if($numRows > 0) {
        return true;
    }
    else {
        return false;
    }
}

//Verifies if a user exists in DB uith a specific uname and pwd
function userCheck($db, $uname, $pwd) {
    $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pwd'";
    
    $res = $db->connect()->query($sql);
    $numRows = $res->num_rows;

    $db->disconnect();

    if($numRows > 0) {
        return true;
    }
    else {
        return false;
    }
}

function updateLastLogged($db, $user) {
    $sql = "UPDATE users SET
    last_logged = now()
    WHERE username = '$user'";
    $db->connect()->query($sql);
}

function emailExists($db, $email) {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = $db->connect()->query($sql);
    $numRows = $res->num_rows;

    $db->disconnect();

    if($numRows > 0) {
        return true;
    }
    else {
        return false;
    }
}

//Functie pentru a adauga utilizatori in BD 
//Returneaza true daca ok, false daca nu
function addUser($db, $uname, $email, $pwd) {
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$uname', '$email', '$pwd');";

    $res = $db->connect()->query($sql);

    if($res) {
        return true;
    }
    else {
        return false;
    }
    $db->disconnect();
}