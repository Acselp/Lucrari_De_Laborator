<?php
    include("./functions.php");
    include("./DbHandler.php");

    session_start();
    $logged = true;
    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $logged = true;
    }
    else {
        $logged = false;
    }
?>

<html lang="en">

<?php
    include("./head.php");
?>

<body>

    <?php
        $activePage = "";
        include("./nav.php");
    ?>
    <section class="main_section heigth-100vh" id="loginPage">

    <?php
        if(!$logged) {
           echo "
                <form class='login_form' name='loginForm'>
                    <ul class='ul_login_form'>
                        <li class='form_header'>Log in</li>
                        <li class='form_elem'><input name='unameLog' type='text' placeholder='Username'></li>
                        <li class='form_elem'><input name='pwdLog' type='password' placeholder='Password'></li>
                        <li class='form_elem'><button id='loginBtn'>Submit</button></li>
                        <li class='form_links'><a href='#'>Create account</a></li>
                        <li class='form_links'><a href='#'>Forgot password?</a></li>
                    </ul>
                </form>";
       }
        else {
            $res = $db->connect()->query("SELECT * FROM users WHERE username = '$_SESSION[username]'");
            $user = $res->fetch_assoc();

            echo "
                <div class='container regSuccess'>
                    <div class='serverData'>
                        <div>Hello <span style='font-weight: 100; font-style: italic;'>$_SESSION[username]</span>, now you are logged in.
                            <img src='./img/ok.png' alt='Logged' width='52px' height='52px'>
                            <br>
                            Last time logged: <span style='font-size: 16pt;color: blue;'>$user[last_logged]</span>
                            <br>
                            <a href='./logoutAction.php'>Log out</a>
                        </div>
                    </div>
                </div>
            ";
        }?>
        

        
    </section>

</body>

</html>