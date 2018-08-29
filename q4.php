<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Questão 4</title>
  <link rel="stylesheet" type= "text/css" href="css/style.css"/>
  <script src= "js/jquery-3.3.1.min.js"></script>
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
    // var data = ev.dataTransfer.getData("text");

    // Pega a referência da palavra como Javascript
    var palavra = ev.dataTransfer.getData("text");

    // Pega a referência como jQuqry. concatena para virar o ID certinho no jQuery
    // Cria um seletor para o jQuery
    var palavraId = "#" + ev.dataTransfer.getData("text");

    // Busca as classes da palavra (jquery = $)
    var palavraClasse = $(palavraId).attr("class");

    // Busca as classes da div que vai a resposta (javascript)
    var destinoClasse = ev.target.className;

    // Se a div tem a mesma classe que a palavra
    if(destinoClasse.includes(palavraClasse)){

      // Se o destino for uma div, tudo bem
      if(ev.target.tagName == "DIV"){
        ev.target.appendChild(document.getElementById(palavra));
        document.getElementById(palavra).style.border = "none";
      }


    } else {
      alert("Este não é o local adequado para esta palavra.")
    }

    // Verificar se tem algo dentro do "ev.target"
    // if(ev.target.textContent != "")

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

        <!-- Colocar a mesma classe na palavra (span) e na div que ela vai (resposta) -->

        <div class="f1">
          <br>
          <br>
          <span id="letra">A)</span>
          <span class="q1a" draggable="true" ondragstart="drag(event)" id="caixa1" width="88" height="31" >A bola</span>
          <span class="q1a" draggable="true" ondragstart="drag(event)" id="caixa2" width="88" height="31" >Jogou</span>
          <span class="q1a" draggable="true" ondragstart="drag(event)" id="caixa3" width="88" height="31" >O menino</span>
          <div class="limparfloat"></div>
        </div>

        <div class="resp1">
          <div class="r1 q1a" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r1 q1a" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r1 q1a" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="limparfloat"></div>
        </div>

      </div>


      <div id="q2">

        <div class="f2">
          <span id="letra">B)</span>
          <span class="q1b" draggable="true" ondragstart="drag(event)" id="caixa4" width="88" height="31" >Os meninos</span>
          <span class="q1b" draggable="true" ondragstart="drag(event)" id="caixa5" width="88" height="31" >Seus tênis</span>
          <span class="q1b" draggable="true" ondragstart="drag(event)" id="caixa6" width="88" height="31" >Venderam</span>
          <div class="limparfloat"></div>
        </div>

        <div class="resp2">
          <div class="r2 q1b" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r2 q1b" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r2 q1b" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="limparfloat"></div>
        </div>
      </div>


      <div id="q3">

        <div class="f3">
          <span id="letra">C)</span>
          <span class="q1c" draggable="true" ondragstart="drag(event)" id="caixa7" width="88" height="31" >Gostamos</span>
          <span class="q1c" draggable="true" ondragstart="drag(event)" id="caixa8" width="88" height="31" >Eu e minha família</span>
          <span class="q1c" draggable="true" ondragstart="drag(event)" id="caixa9" width="88" height="31" >De lasanha</span>
          <div class="limparfloat"></div>
        </div>

        <div class="resp3">
          <div class="r3 q1c" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r3 q1c" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="r3 q1c" ondrop="drop(event)" ondragover="allowDrop(event)">  </div>
          <div class="limparfloat"></div>
        </div>
      </div>

    </div>


    <div class="confirmacao">
      <input id="btnQ4" type="button" value="Enviar" class="botao">
    </div>

  </div>

</body>
</html>
