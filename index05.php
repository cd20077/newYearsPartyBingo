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
        <link rel="stylesheet" href="./css/test05.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="stage">
            <div class="cube">
                <div class="front"></div>
                <div class="ffl"></div>
                <div class="ffr"></div>
                <div class="back"></div>
                <div class="bbl"></div>
                <div class="bbr"></div>
                <div class="back-left"></div>
                <div class="fll"></div>
                <div class="left"></div>
                <div class="bll"></div>
                <div class="front-left"></div>
                <div class="back-right"></div>
                <div class="frr"></div>
                <div class="right"></div>
                <div class="brr"></div>
                <div class="front-right"></div>
                <!--
                <div class="top"></div>
                <div class="bottom"></div>
                -->
            </div>
<!--            <div class="cube-clone">
                <div class="front"></div>
            </div>-->
        </div>

        <div id="modal-container">
            <div class="modal-background">
                <div class="modal">
                    <ul id="DETE">
                        <li id="P">Play</li>
                        <li id="S">Pause</li>
                    </ul>

                    <video id="video" class="vd" width="" height="" poster="">
                        <source src="./movie/01.mp4">
                    </video>
                    <!--
                    <h2>I'm a Modal</h2>
                    <p>Hear me roar.</p>
                    <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                        <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                    </svg>
                    -->
                </div>
            </div>
        </div>
        <div class="content">
            <div class="buttons">
                <div id="one" class="button">動画ぼーん</div>
            </div>
        </div>

        <script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="./js/bingo5.js"></script>
    </body>

</html>
