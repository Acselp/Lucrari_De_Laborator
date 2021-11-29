
<?php

    include_once("DbHandler.php");

    $unameReg = trim($_POST["username"]);
    $pwdReg = trim($_POST["password"]);
    $emailReg = trim($_POST["email"]);
    
    $errorList = [];

    if($unameReg === "" || $unameReg == null) {
        array_push($errorList, "Username field is empty<br>");
    }
    else if(strlen($unameReg) < 3) {
        array_push($errorList, "Username must have at least 3 characters<br>");
    }
    else if(strlen($unameReg) > 20) {
        array_push($errorList, "Username must have less than 20 characters<br>");
    }

    if($pwdReg === "" || $pwdReg == null) {
        array_push($errorList, "Password field is empty<br>");
    }
    else if(strlen($pwdReg) < 8) {
        array_push($errorList, "Password must have at least 8 characters<br>");
    }
    else if(strlen($pwdReg) > 20) {
        array_push($errorList, "Password must have less than 20 characters<br>");
    }

    if($emailReg === "" || $emailReg == null) {
        array_push($errorList, "Email field is empty<br>");
    }
    else if(!filter_var($emailReg, FILTER_VALIDATE_EMAIL)) {
        array_push($errorList, "This email does not exist<br>");
    }

    if(!$errorList) {
        $db = new DbHandler("localhost", "lab6web", "root", "");

        $sql = "INSERT INTO users (`username`, `email`, `password`)
                VALUES ('$unameReg', '$emailReg', '$pwdReg')";

        $res = $db->connect()->query($sql);

        echo json_encode(array(
            "errors" => false,
            "result" => $res
        ));
    }
    else {
        echo json_encode(array(
            "errors" => true,
            "errorList" => json_encode($errorList)
        ));
    }
?>
