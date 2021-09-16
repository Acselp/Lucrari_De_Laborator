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
    <title>Rezumat</title>
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
                    <p>
                        &emsp;&emsp;&emsp;&emsp;Rezumat
                    </p>
                </div>

                <br>
                <br>
                <br>
                <img id="main_img" src="./img/homeImg.jpg" alt="Prostia omeneasca" align="right">

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
                <a href="https://brainly.ro/tema/2715307">https://brainly.ro/tema/2715307</a>
            </div>
        </div>
    </section>

</body>

</html>