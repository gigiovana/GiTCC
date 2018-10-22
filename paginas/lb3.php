<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lembrete</title>

        <link rel="stylesheet" type= "text/css" href="css/style.css"/>

        <style media="screen">
          body{
            background: #ffffff;
          }
        </style>
  </head>
  <body>

    <div id="menu-topo">

      <?php
      include("php/menu.php");
             ?>

    </div>

    <div class="conteudo">

    <h1> Conjugação de Verbos</h1>
    <br>
    <p class="texto">Os verbos recebem conjunções de acordo com quem realiza a ação. Verbo brincar: </p>

    <br>

      <ul class="listalb">
        <li>Ana brinca com a bola.</li>
        <li>Paulo e seu irmão brincam com a bola.</li>
        <li>Eu brinco com a bola.</li>
        <li>Eu, Paulo e Ana brincamos com a bola.</li>
      </ul>

    <div class="limparfloat"></div>
    </div>

    <div class="confirmacao">
      <input id="btnLb1" type="button" value="Entendido!" class="botao">
    </div>

  </body>
</html>
