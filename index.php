<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Perty Bingo!</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="./css/facebox.css">
        <link rel="stylesheet" href="./css/partybingo.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <p>
            <span id="pingo-number" style="display: none">00</span>
            <div class="loopSlider">
            <ul>
                <?php foreach (range(1, 16) as $value) : ?>
                <li id="slide<?php echo $value ?>">
                    <a rel="images/no_flame/<?php echo $value ?>.png"><img src="images/no_flame/<?php echo $value ?>.png" class="img-box" /></a>
                </li>
                <?php endforeach; ?>
            </ul>
            </div>
        </p>
        <div id="buttons">
            <button id="start-button" class="btn btn-lg btn-default">Start</button>
            <button id="reset-button" class="btn btn-lg btn-default">Reset</button>
        </div>
        <h3>Histories</h3>
        <div id="histories" class="row histories"></div>

        <footer>
            <div class="footer-copyright">Copyright © 2016 V-Cube, Inc. All rights reserved.</div>
        </footer>

        <audio id="drum" preload="auto">
            <source src="asset/nc79078.mp3" type="audio/mp3">
        </audio>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="./js/jquery-1.11.2.min.js "></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./js/bootstrap.min.js "></script>
        <script src="./js/facebox.js "></script>
        <script src="./js/partybingo.js "></script>
    </body>

</html>
