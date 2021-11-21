<html lang="en">

<?php
    include("./head.php");
?>

<body>

    <?php
        $activePage = "";
        include("./nav.php");
    ?>
    <section class="main_section heigth-100vh" id="regPage">
        <form class="login_form reg_form" name="regForm">
            <ul class="ul_login_form">
                <li class="form_header">Sign Up</li>
                <li class="form_elem"><input name="unameReg" type="text" placeholder="Username"></li>
                <li class="form_elem"><input name="emailReg" type="email" placeholder="Email"></li>
                <li class="form_elem"><input name="pwdReg" type="password" placeholder="Password"></li>
                <li class="form_elem"><input name="rpwdReg" type="password" placeholder="Repeat password"></li>
                <li class="form_elem"><button id="regBtn">Submit</button></li>
                <li class="form_links"><a href="#">Create account</a></li>
                <li class="form_links"><a href="#">Forgot password?</a></li>
            </ul>
        </form>
    </section>

    <script src="assets/js/index.js"></script>
</body>

</html>