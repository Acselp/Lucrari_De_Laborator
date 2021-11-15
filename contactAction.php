
<!Doctype html>
<html lang="ro">

    <?php
        include("./head.php");
    ?>

<body>

    <?php
        $activePage = "";
        include('nav.php');
    ?>

    <section class="main_section heigth-100vh">
        <div class="container">
            <div class="serverData">
                <?php
                    $fname = trim($_GET["contactFname"]);
                    $lname = trim($_GET["contactLname"]);
                    $email = trim($_GET["contactEmail"]);
                    $subject = trim($_GET["contactSubject"]);
                    
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
                        echo "<div>Your message has been successfully sent. :) <img src='./img/ok.png' alt='Successfuly sent'></div>";
                        echo "Your data:<br>First name: $fname<br> Last name: $lname<br> Email: $email<br> Subject: $subject<br>";
                    }
                    else {
                        echo("<div>The server hasn't been comitted your data,<img src='./img/notok.png' alt='Server don't accept wrong data.'><br>because of the following errors:<br></div>");
                        foreach($errorList as $err) {
                            echo "<span style='color: red; font-family: Lato; font-weight: bold; font-size='14pt''>$err</span>";
                        }
                    }
                ?>
                
            </div>
        </div>
    </section>
</body>

</html>