<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <link href="./css/partybingo.css" rel="stylesheet" type="text/css" />
    <title>XX・YY 初夏の大ビンゴ祭!!</title>
  </head>
  <body>
    <header style="text-align:center;">
      <h1>初夏の大ビンゴ祭!!!!</h1>
    </header>
    <section style="text-align:center;">
      <input type="button" id="start" name="start" value="スタート" onclick="startBingo()">
      <input type="button" id="stop" name="stop" value="ストップ" onclick="stopBingo()" style="display:none;">
      <br>

      <div id="view" style="text-align:center;">
         <img src = "img/top.jpg" width='920' height='720'>
      </div>
      <hr />
      <div id="out"></div>
      <hr />
      </section>
      <footer>
        <p style="text-align:center;">Copyright &copy; 
	   <script type="text/javascript">  
              document.write(new Date().getFullYear());
           </script>
           XX・YY結婚式2次会実行委員会 All Rights Reserved.</p>
      </footer>
    <script type="text/javascript" src="bingo2.js"></script>
  </body>
</html>