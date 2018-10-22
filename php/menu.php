
   <div id="menu-topo">
      <ul>
        <li id="menu_pagina"> <a href="index.php"><b>Página Inicial</b></a> </li>
        <li id="menu_cadastro"> <a href="cadastro.php"><b>Cadastro</b></a> </li>
        <li id="menu_login"> <a href="login.php"><b>Login</b></a> </li>
        <li id="menu_descricao"> <a href="descricao.php"><b>Descrição do Jogo</b></a> </li>
        <li id="menu_como"> <a href="comoJogar.php"><b>Como Jogar</b></a> </li>
        <li id="menu_sobre"> <a href="sobre.php"><b>Sobre Nós</b></a> </li>


      </ul>
    </div>

<!-- <a href="/index.php/o-campus/como-chegar-no-campus"><span><img src="/templates/campi/images/gifs/1.1.0.0.gif" border="0" /> </span> -->

<div class="" id="gifs_interprete" style="width: 200px; height: 200px; position: absolute; margin: 150px 50px; display: none;">
  <img src="https://www.thisiscolossal.com/wp-content/uploads/2014/03/120430.gif" alt="" width="200px" height="200px">
</div>

<script type="text/javascript">
  $(document).ready(function() {

    $("#menu-topo li").mouseenter(function(event) {
      /* Act on the event */
      $("#gifs_interprete").show();
    });

    $("#menu-topo li").mouseleave(function(event) {
      /* Act on the event */
      $("#gifs_interprete").fadeOut();
    });


  });
</script>
