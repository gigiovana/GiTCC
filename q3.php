<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questão 3</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

        <script src="js/jquery-3.3.1.min.js"></script>

    <style media="screen">
      body{
        background-color: #ffffff;
      }
    </style>
  </head>
  <body>

    <div id="menu-topo">
      <?php
      include("php/menu.php");
       ?>
    </div>


    <div class="video">
      <iframe width="480" height="340" src="https://www.youtube.com/embed/eXnBVSwVNzw"
      frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <div class="corpoq3">

    <div class="enunciadoq3">
    <h2>Questão 3:</h2>
    <p>Conjugue o verbo <span style="background-color: #ffff00">jogar no presente:</span> <img src="IMG/jogar.png" alt=""> </p>
    </div>

      <div class="altq3">

        <form class="f1" font-size="20px">
            <label> A) João <input id="fse1" class="campof1" placeholder="sua reposta"> volei de areia. (JOGAR)</label>
        </form>

        <form class="f2">
            <label> B) Maria e João <input id="fse2" class="campof2" placeholder="sua reposta"> volei de areia. (JOGAR) </label>
        </form>

        <form class="f3" >
            <label> C) Eu <input id="fse3" class="campof3" placeholder="sua reposta"> volei de areia. (JOGAR) </label>
        </form>

        <form class="f4">
            <label> D) Eu, Maria e João <input id="fse4" class="campof4" placeholder="sua reposta"> volei de areia. (JOGAR)</label>
        </form>

      </div>

      <div class="btn">
        <input id="btnQ3" type="button" value="Enviar" class="botao">
      </div>
      <div class="limparfloat"></div>
  </body>
</html>
