<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

    <title>Tela de Cadastro</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <script src="js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="js/javascript.js"></script>

  </head>

  <body>

    <div id="menu-topo">

      <?php
      include("php/menu.php");
       ?>

    </div>

    <div class="cadastro">

    <form id="formCadastro" class="" action="controle/verificaCadastro.php" method="POST">

      <div class="img-topo">
        <img src="IMG/user.png" id="imgUser">
      </div>

        <div class="limparfloat"></div>

      <label id="cad"><b>Nome:</b></label><br>
      <input type= "text" name="nome" value="" required placeholder="Digite seu nome" class="campo"> <br>


      <label id="cad"><b>E-mail:</b></label><br>
      <input type="email" name="email" value="" required class="campo" required placeholder="usuario@gmail.com"><br>

      <!-- <label for=""><b>Cidade:</b></label><br>
      <select name="cidade" class="campo">
        <option value="">Selecione uma cidade</option>

        <option value="1">Alto Paraná</option>
        <option value="2">Guairaçá</option>
        <option value="3">Paranavaí</option>
        <option value="4">São João do Caiuá</option>
      </select>
      <br> -->

      <label id="cad"> <b>Senha:</b></label><br>
      <input type="password" name="senha" value="" class="campo" required placeholder="Digite sua senha"><br>



      <label id="cad"><b>Confirmar senha:</b></label><br>
      <input type="password" name="confirmaSenha" value="" class="campo" required placeholder="Confirmar senha"><br>

      <br>
      <input type="submit" value="Enviar" id="btnCadastro" class="botao">
      <input type="reset"  value="Limpar" class="botao">

    </form>
    </div>

  </body>
</html>
