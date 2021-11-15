<!Doctype html>
<html lang="ro">

<?php
include("./head.php");
?>

<body>

    <?php
    $activePage = "original";
    include('nav.php');
    ?>

    <section class="main_section">
        <div class="container">
            <div id="content">
                <div id="header">
                    <h1>
                        Prostia omeneacsa
                    </h1>
                    <span>
                        de Ion Creangă
                    </span>
                </div>

                <br>
                <br>
                <br>
                <img id="main_img" class="float_right img_mrgn_r0" src="./img/homeImg.jpg" alt="Prostia omeneasca">

                <div id="tale">
                    <span>
                        <?php
                                include("tale.php");
                            ?>
                    </span>

                </div>

                <br>
                <br>
                <br>

                <h4>Sursa: </h4>
                <a href="https://ro.wikisource.org/wiki/Prostia_omenească" target="_blank">
                    https://ro.wikisource.org/wiki/Prostia_omenească
                </a>
            </div>
        </div>
    </section>

</body>

</html>