
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
                    $unameLog = trim($_GET["unameLog"]);
                    $pwdLog = trim($_GET["pwdLog"]);
                   
                    $errorList = [];

                    if($unameLog === "" || $unameLog == null) {
                        array_push($errorList, "Username field is empty<br>");
                    }

                    if($pwdLog === "" || $pwdLog == null) {
                        array_push($errorList, "Password field is empty<br>");
                    }

                    if(!$errorList) {
                        echo "<div>Your data has been successfully sent.<img src='./img/ok.png' alt='Successfuly sent'><br>Now you can pretend you are logged in :)</div><br>";
                        echo "Your data:<br>Username: $unameLog<br> Password: $pwdLog<br>";
                    }
                    else {
                        echo("<div>The server hasn't been comitted your data,<img src='./img/notok.png' alt='Server don't accept wrong data.'><br>because of the following errors:<br><br></div>");
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