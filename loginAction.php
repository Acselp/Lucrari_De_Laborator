
<?php
    $unameLog = trim($_POST["username"]);
    $pwdLog = trim($_POST["password"]);
    
    $errorList = [];

    if($unameLog === "" || $unameLog == null) {
        array_push($errorList, "Username field is empty<br>");
    }

    if($pwdLog === "" || $pwdLog == null) {
        array_push($errorList, "Password field is empty<br>");
    }

    if(!$errorList) {
        echo json_encode(array(
            "errors" => false,
            "username" => $unameLog,
            "password" => $pwdLog
        ));
    }
    else {
        echo json_encode(array(
            "errors" => true,
            "errorList" => json_encode($err)
        ));
    }
?>
          