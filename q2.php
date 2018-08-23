<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questão 2</title>

        <link rel="stylesheet" type= "text/css" href="css/style.css"/>

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
            ev.target.appendChild(document.getElementById(data));
        }
    </script>

  </head>
  <body>
    <div id="menu-topo">
      <ul>
        <li> <a href="#"><b>Página Inicial</b></a> </li>
        <li> <a href="cadastro.html"><b>Cadastro</b></a> </li>
        <li> <a href="login.html"><b>Login</b></a> </li>
        <li> <a href="#"><b>Descrição do Jogo</b></a> </li>
        <li> <a href="#"><b>Como Jogar</b></a> </li>
        <li> <a href="#"><b>Sobre Nós</b></a> </li>
      </ul>

      <div class="corpoq2">
        <div class="enunciadoq2">
          <h2>Questão 2:</h2>
          <p>Separe as palavras de acordo com as suas classes gramaticais:</p>
        </div>

        <div class="montante" ondrop="drop(event)" ondragover="allowDrop(event)">
          <div class="linha1">
            <span  draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31"> Sorrir </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag2" width="88" height="31"> Inteligente </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag3" width="88" height="31"> Partir </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag4" width="88" height="31"> Dormir </span>
          </div>


          <div class="linha2">
            <span  draggable="true" ondragstart="drag(event)" id="drag5" width="88" height="31"> Estudar </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag6" width="88" height="31"> Brincar </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag7" width="88" height="31"> Estudioso </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag8" width="88" height="31"> Carismático </span>
          </div>

          <div class="linha3">
            <span  draggable="true" ondragstart="drag(event)" id="drag9" width="88" height="31"> Esforçado </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag10" width="88" height="31"> Engraçado</span>
            <span  draggable="true" ondragstart="drag(event)" id="drag11" width="88" height="31"> Feliz </span>
            <span  draggable="true" ondragstart="drag(event)" id="drag12" width="88" height="31"> Comer </span>
          </div>


        </div>

        <div class="container">

          <div id="containerVerbos" ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class= "containerVerbos" id="montanteVerbos" >
              <div id="nomeVerbos" align="center"><b>Verbos</b></div>
            </div>
          </div>


          <div id="containerAdjetivos" ondrop="drop(event)" ondragover="allowDrop(event)">
              <div class= "containerAdjetivos" id="montanteAdjetivos" >
                <div id="nomeAdjetivos" align="center"><b>Adjetivos</b></div>
              </div>
            </div>

      </div>

      <div class="limparfloat"></div>

      <div class="confirmacao">
      <input id="botaoEnviar" type="button" value="Enviar" class="botaoq2">
      </div>

    </div>



  </body>
</html>
