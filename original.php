<!Doctype html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
                user-scalable=no,
                initial-scale=1.0,
                maximum-scale=1.0,
                minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Original</title>
</head>

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
                <a href="https://ro.wikisource.org/wiki/Prostia_omenească">https://ro.wikisource.org/wiki/Prostia_omenească</a>
            </div>
        </div>
    </section>

</body>

</html>