
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
            "username" => $unameLog,
            "password" => $pwdLog
        ));
    }
    else {
        echo("<div>The server hasn't been comitted your data,<img src='./img/notok.png' alt='Server don't accept wrong data.'><br>because of the following errors:<br><br></div>");
        foreach($errorList as $err) {
            echo "<span style='color: red; font-family: Lato; font-weight: bold; font-size='14pt''>$err</span>";
        }
    }
?>
          