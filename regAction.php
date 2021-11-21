
        <div class="container">
            <div class="serverData">
                <?php
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
                        echo "<div>Your data has been successfully sent.<img src='./img/ok.png' alt='Successfuly sent'><br>Now you can pretend you are signed in ;)</div><br>";
                        echo "Your data:<br>Username: $unameReg<br> Email: $emailReg<br> Password: $pwdReg<br>";
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