<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Questão 6</title>

  <link rel="stylesheet" type= "text/css" href="css/style.css"/>

      <script src="js/jquery-3.3.1.min.js"></script>

  <style media="screen">
  body{
    background: #ffffff;
  }
  </style>
 <!-- <script>
  function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }

  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
  </script> -->

</head>

<body>

  <div id="menu-topo">
    <?php
      include("php/menu.php");
    ?>
  </div>

<br>

  <div class="corpoq6">


    <div class="enunciadoq6">
      <h2>Questão 6:</h2>
      <p>Posicione as palavras de modo que formem frases:</p>
    </div>

    <div class="altq6">


      <label for="">A)</label>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="2">comeu</option>
        <option value="1">o gato</option>
        <option value="3">a ração</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="2">comeu</option>
        <option value="1">o gato</option>
        <option value="3">a ração</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="2">comeu</option>
        <option value="1">o gato</option>
        <option value="3">a ração</option>
      </select>

    <br>

<br>
      <label for="">B)</label>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">a bola</option>
        <option value="">os meninos</option>
        <option value="">chutaram</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">a bola</option>
        <option value="">os meninos</option>
        <option value="">chutaram</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">a bola</option>
        <option value="">os meninos</option>
        <option value="">chutaram</option>
      </select>

    <br>

<br>
      <label for="">C)</label>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">viram</option>
        <option value="">eles</option>
        <option value="">o ladrão</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">viram</option>
        <option value="">eles</option>
        <option value="">o ladrão</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">viram</option>
        <option value="">eles</option>
        <option value="">o ladrão</option>
      </select>

    <br>

<br>
      <label for="">D)</label>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">atirou</option>
        <option value="">a pedra</option>
        <option value="">a menina</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">a pedra</option>
        <option value="">atirou</option>
        <option value="">a menina</option>
      </select>

      <select class="combobox" name="">
        <option value="">Selecione</option>
        <option value="">a pedra</option>
        <option value="">atirou</option>
        <option value="">a menina</option>
      </select>

 <br>

  </div>
    <!-- <div class="montante" ondrop="drop(event)" ondragover="allowDrop(event)">
      <div class="linha1">
        <span  draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31"> Comeu </span>
        <span  draggable="true" ondragstart="drag(event)" id="drag2" width="88" height="31"> O gato </span>
        <span  draggable="true" ondragstart="drag(event)" id="drag3" width="88" height="31"> Chutaram </span>
      </div>


      <div class="linha2">
        <span  draggable="true" ondragstart="drag(event)" id="drag5" width="88" height="31"> a ração </span>
        <span  draggable="true" ondragstart="drag(event)" id="drag6" width="88" height="31"> a bola </span>
        <span  draggable="true" ondragstart="drag(event)" id="drag7" width="88" height="31"> os meninos </span>

      </div>

      <div class="linha3">
        <span  draggable="true" ondragstart="drag(event)" id="drag9" width="88" height="31"> a pedra </span>
        <span  draggable="true" ondragstart="drag(event)" id="drag10" width="88" height="31"> a menina</span>
        <span  draggable="true" ondragstart="drag(event)" id="drag11" width="88" height="31"> viram </span>
      </div>

      <div class="linha4">
        <span  draggable="true" ondragstart="drag(event)" id="drag9" width="88" height="31"> atirou </span>
        <span  draggable="true" ondragstart="drag(event)" id="drag10" width="88" height="31"> eles</span>
        <span  draggable="true" ondragstart="drag(event)" id="drag11" width="88" height="31"> o ladrão </span>
      </div>

      <div class="altq6">

        <div class="frase1">
          <label> a)<div id="fse1" class="campog1" class="campog2" class"campog3" ondrop="drop(event)" ondragover="allowDrop(event)"></label>
          </div>
          <div class="frase2">
            <label> b)<div id="fse2" class="campod1" class="campod2" class"campod3" ondrop="drop(event)" ondragover="allowDrop(event)"></label>
            </div>
            <div class="frase3">
              <label> c)<div id="fse3" class="campov1" class="campov2" class"campov3" ondrop="drop(event)" ondragover="allowDrop(event)"></label>
              </div>
              <div class="frase4">
                <label> d)<div id="fse4" class="campox1" class="campox2" class"campox3" ondrop="drop(event)" ondragover="allowDrop(event)"></label>
                </div>

              </div>
            </div>





            <div class="limparfloat"></div>

          </div>
        </div>
      </div>
    </div> -->

    <div class="confirmacao">
      <input id="btnQ6" type="button" value="Enviar" class="botao">
    </div>


</body>
</html>
