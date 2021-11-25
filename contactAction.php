
<?php
    $fname = trim($_POST["contactFname"]);
    $lname = trim($_POST["contactLname"]);
    $email = trim($_POST["contactEmail"]);
    $subject = trim($_POST["contactSubj"]);
    
    $errorList = [];

    if($fname === "" || $fname == null) {
        array_push($errorList, "Firstname field is empty<br>");
    }

    if($lname === "" || $lname == null) {
        array_push($errorList, "Lastname field is empty<br>");
    }

    if($email === "" || $email == null) {
        array_push($errorList, "Email field is empty<br>");
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errorList, "Invalid email format<br>");
    }

    if($subject === "" || $subject == null) {
        array_push($errorList, "Subject field is empty<br>");
    }

    if(!$errorList) {
        echo json_encode(array(
            "errors" => false,
            "fname" => $fname,
            "lname" => $lname,
            "email" => $email,
            "subj" => $subject
        ));
    }
    else {
        echo json_encode(array(
            "errors" => true,
            "errorList" => json_encode($errorList)
        ));
    }
?>

