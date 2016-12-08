<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link href="bingo.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="./js/bingo.js"></script>
        <script type="text/javascript" src="./js/face.js"></script>
        <title>新年会ビンゴゲーム!!</title>
    </head>
    <body>
        <header style="text-align:center;">
            <h1>新年会ビンゴゲーム!!</h1>
        </header>
        <section style="text-align:center;">
            <input type="button" id="start" name="start" value="スタート" onclick="startBingo()">
            <input type="button" id="stop" name="stop" value="ストップ" onclick="stopBingo()" style="display:none;">
            <br>
            <div id="view" style="text-align:center;"></div>
            <hr />
            <div id="out"></div>
            <hr />
        </section>
        <footer>
            <p class="copyright" style="text-align:center;">&copy;
                <script type="text/javascript">document.write(new Date().getFullYear());</script>
                V(ictory)-cube, Inc. All Rights Reserved.
            </p>
        </footer>
    </body>
</html>