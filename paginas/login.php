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
      include("php/menu.php");
       ?>

    </div>

      <div class="login">

        <form class="" action="controle/verificaLogin.php" method="post">

          <img src="IMG/lg.png"  height="170" alt=""> <br>

            <label id="log"><b>E-mail:</b></label><br>
            <input type="text" name="usuario" value="" class="campo" placeholder="usuario@email.com"><br>

            <label id="log"><b>Senha:</b></label><br>
            <input type="password" name="senha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <input type="checkbox" name="lembrar" value="1" id="lembrar">
            <label for="lembrar">Lembrar minha senha</label>
            <br>

            <input id="btnLogin" type="submit" value="Entrar" class="botao"><br> <br>

            <a id="es" href="#">Esqueceu a senha?</a> <br>
            <a id="cd" href="cadastro.php">Cadastre-se</a>


        </form>
      </div>

  </body>
</html>
