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
        <div class="login_form" id="loginForm">
            <ul class="ul_login_form">
                <li class="form_header">Log in</li>
                <li class="form_elem"><input id="unameLog" type="text" placeholder="Username"></li>
                <li class="form_elem"><input id="pwdLog" type="password" placeholder="Password"></li>
                <li class="form_elem"><button id="submitBtn">Submit</button></li>
                <li class="form_links"><a href="#">Create account</a></li>
                <li class="form_links"><a href="#">Forgot password?</a></li>
            </ul>
        </div>
    </section>

</body>

</html>