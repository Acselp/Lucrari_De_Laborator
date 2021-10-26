<!Doctype html>
<html lang="ro">

<?php
include("./head.php");
?>

<body>

    <?php
    include('nav.php');
    ?>

    <section class="main_section">
        <div class="container">
            <div id="content">
                <div id="header">
                    <h1>
                        Prostia omeneacsa
                    </h1>
                    <p>
                        &emsp;&emsp;&emsp;&emsp;Rezumat
                    </p>
                </div>

                <br>
                <br>
                <br>
                <img id="main_img" class="float_right img_mrgn_r0" src="./img/homeImg.jpg" alt="Prostia omeneasca">

                <div id="tale">
                    <span>
                        <?php
                        include("summary.php");
                        ?>
                    </span>
                </div>

                <br>
                <br>
                <br>
                <h4>Sursa: </h4>
                <a href="https://brainly.ro/tema/2715307">https://brainly.ro/tema/2715307 token_get_all</a>
            </div>
        </div>
    </section>

</body>

</html>