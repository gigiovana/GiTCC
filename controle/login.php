<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <script type="text/javascript" src="js/javascript.js"></script>

    <style media="screen"> </style>
  </head>
  <body>

    <div id="menu-topo">

      <?php
      //  include("php/menu.php"); w
       ?>

    </div>

      <div class="login">

        <form class="" action="controle/verificaLogin.php" method="POST">

          <img src="IMG/login-img.png"  height="150" alt=""> <br>

            <label for=""><b>Usuário ou E-mail:</b></label><br>
            <input type="text" name="usuario" value="" class="campo" placeholder="usuario@email.com"><br>

            <label for=""><b>Senha:</b></label><br>
            <input type="password" name="senha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <input type="checkbox" name="lembrar" value="1" id="lembrar">
            <label for="lembrar"><b>Lembrar minha senha</b></label>
            <br>

            <input id="btnLogin" type="submit" value="Entrar" class="botao"><br> <br>

            <a href="#">Esqueceu a senha?</a> <br>
            <a href="cadastro.html">Cadastre-se</a>


        </form>
      </div>

  </body>
</html>
