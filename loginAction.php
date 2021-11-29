
<?php
    session_start();
    include_once("DbHandler.php");
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
        $db = new DbHandler("localhost", "lab6web", "root", "");
        $query = "
            SELECT * FROM users
            WHERE username = '$unameLog' and password = '$pwdLog'; 
        ";
        $result = $db->connect()->query($query);
        
        if(mysqli_num_rows($result) === 1) {
            $_SESSION['username'] = $unameLog;
            echo json_encode(array(
                "status" => true,
                "message" => "Logged successfully"
            ));
        }
        else {
            echo json_encode(array(
                "status" => false,
                "message" => "User not found"
            ));
        }
    }
    else {
        echo json_encode(array(
            "errors" => true,
            "errorList" => json_encode($err)
        ));
    }
?>
          