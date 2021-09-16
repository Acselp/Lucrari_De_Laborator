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

    <section id="main_sect_original">
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
                <img id="main_img" src="./img/homeImg.jpg" alt="Prostia omeneasca" align="right">

                <div id="tale">
                    <span>
                        <?php
                        include("tale.php");
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </section>

</body>

</html>