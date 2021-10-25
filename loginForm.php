<html lang="en">

<?php
    include("./head.php");
?>

<body>

    <?php
        include("./nav.php");
    ?>
    <section class="main_section heigth-100vh">
        <form method="POST" action="./reg.php" class="login_form">
            <ul class="ul_login_form">
                <li class="form_header">Sign In</li>
                <li class="form_elem"><input name="username" type="text" placeholder="Username"></li>
                <li class="form_elem"><input name="password" type="password" placeholder="Password"></li>
                <li class="form_elem"><input type="submit" value="Log in"></li>
                <li class="form_links"><a href="#">Create account</a></li>
                <li class="form_links"><a href="#">Forgot password?</a></li>
            </ul>
        </form>
    </section>

    <script src="assets/js/index.js"></script>
</body>

</html>