<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questão 5</title>

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

      <div class="corpoq5">
        <div class="enunciadoq5">
          <h2>  Questão 5:</h2>
          <p> Jõao é um menino cheio de sonhos, mas para seus planos se realizarem ele depende de algumas condições.
           Ligue as condições aos planos que poderiam ser realizados por "Jõao", como no exemplo: </p>
        </div>


          <div id="containerFrases" ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class= "containerFrases" id="montanteFrases" >
            </div>
          </div>


          <div id="containerRelacao" ondrop="drop(event)" ondragover="allowDrop(event)">
              <div class= "containerRelacao" id="montanteRelacao">

              </div>
            </div>

      </div>

      <div class="limparfloat"></div>

      <div class="confirmacao">
      <input id="botaoEnviar" type="button" value="Enviar" class="botaoq5">
      </div>

    </div>



  </body>
</html>
