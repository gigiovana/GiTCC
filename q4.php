<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questão 4</title>
    <link rel="stylesheet" type= "text/css" href="css/style.css"/>
     <script src= "jquery/jquery-3.3.1.min.js"></script>
    <style media="screen">
    body{
      background: #ffffff;
    }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");

            // Verificar se tem algo dentro do "ev.target"
            // if(ev.target.textContent != "")

            ev.target.appendChild(document.getElementById(data));

            document.getElementById(data).style.border = "none";
        }
    </script>
  </head>


  <body>

    <div id="menu-topo">
      <?php
      include("menu.php");
       ?>
    </div>


    <div class="corpoq4">

    <div class="enunciadoq4">
    <h2>Questão 4:</h2>
    <p>Ordene as frases, colocando na ordem: o elemento que realiza a ação, em seguida, o verbo e depois seu complemento.</p>
    </div>

  <div class="perguntasq4" ondrop="drop(event)" ondragover="allowDrop(event)">

<div id="q1">

  <div class="f1">
    <span draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31" >A bola</span>
    <span draggable="true" ondragstart="drag(event)" id="drag2" width="88" height="31" >Jogou</span>
    <span draggable="true" ondragstart="drag(event)" id="drag3" width="88" height="31" >O menino</span>
    <div class="limparfloat"></div>
  </div>

      <div class="resp1">
        <div class="r1" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
        <div class="r1" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
        <div class="r1" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
        <div class="limparfloat"></div>
      </div>

    </div>


  <div class="f2">
    <span draggable="true" ondragstart="drag(event)" id="drag4" width="88" height="31" >Os meninos</span>
    <span draggable="true" ondragstart="drag(event)" id="drag5" width="88" height="31" >Seus tênis</span>
    <span draggable="true" ondragstart="drag(event)" id="drag6" width="88" height="31" >Venderam</span>
  </div>

      <div class="limparfloat"></div>

      <div class="r2" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
      <div class="r2" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
      <div class="r2" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>

      <div class="limparfloat"></div>

    <div class="f3">
      <span draggable="true" ondragstart="drag(event)" id="drag7" width="88" height="31" >Gostamos</span>
      <span draggable="true" ondragstart="drag(event)" id="drag8" width="88" height="31" >Eu e minha família</span>
      <span draggable="true" ondragstart="drag(event)" id="drag9" width="88" height="31" >De lasanha</span>
    </div>

      <div class="limparfloat"></div>

      <div class="r3" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
      <div class="r3" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
      <div class="r3" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>

    </div>


      <div class="limparfloat"></div>

    <div class="confirmacao">
      <input id="btnQ4" type="button" value="Enviar" class="botao">
    </div>

  </div>
</div>
  </body>
</html>
