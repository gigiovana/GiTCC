<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questão 1</title>
    <link rel="stylesheet" type= "text/css" href="css/style.css"/>
    <style media="screen">
    body{
      background: #ffffff;
    }
    </style>
  </head>


  <body>

    <div id="menu-topo">
      <ul>
        <li> <a href="index.php"><b>Página Inicial</b></a> </li>
        <li> <a href="cadastro.php"><b>Cadastro</b></a> </li>
        <li> <a href="login.php"><b>Login</b></a> </li>
        <li> <a href="#"><b>Descrição do Jogo</b></a> </li>
        <li> <a href="#"><b>Como Jogar</b></a> </li>
        <li> <a href="#"><b>Sobre Nós</b></a> </li>
      </ul>

    <div class="corpo">

    <div class="enunciado">
    <h2>Questão 1:</h2>
    <p>Selecione a imagem que corresponde a um <span style="background-color: #ffff00">verbo:</span></p>
    </div>

  <div class="img">

  <div class="fileira1">
    <img id="img1"  src="IMG/garota.png" alt="" style="width:100%">
    <input type="radio" name="questao1" id="q1a" value="a">
    <label for="q1a">A)Menina</label><br>
  </div>



  <div class="fileira2">
    <img id="img2" src="IMG/sol.png" alt="" style="width:100%">
    <input type="radio" name="questao1" id="q1b" value="b">
    <label for="q1b">B)Sol</label><br>
  </div>


    <div class="limparfloat"></div>

    <div class="fileira3">
      <img id="img3" src="IMG/andar.png" alt="" style="width:100%">
      <input type="radio" name="questao1" id="q1c" value="c">
      <label for="q1c">C)Andar</label><br>
    </div>

    <div class="fileira4">
      <img id="img4" src="IMG/lapis.png" alt="" style="width:100%">
      <input type="radio" name="questao1" id="q1d" value="d">
      <label for="q1d">D)Lápis</label><br>
    </div>
    </div>

      <div class="limparfloat"></div>

    <div class="confirmacao">
      <input id="botaoEnviar" type="button" value="Enviar" class="botao">
    </div>

  </div>
  </body>
</html>
