<html lang="en">

<?php
    include("./head.php");
?>

<body>

    <?php
        $activePage = "";
        include("./nav.php");
    ?>
    <section class="main_section heigth-100vh">
        <form method="POST" action="./loginAction.php" class="login_form" id="loginForm">
            <ul class="ul_login_form">
                <li class="form_header">Log in</li>
                <li class="form_elem"><input name="unameLog" type="text" placeholder="Username"></li>
                <li class="form_elem"><input name="pwdLog" type="password" placeholder="Password"></li>
                <li class="form_elem"><input type="submit" value="Submit"></li>
                <li class="form_links"><a href="#">Create account</a></li>
                <li class="form_links"><a href="#">Forgot password?</a></li>
            </ul>
        </form>
    </section>

</body>

</html>