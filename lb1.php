<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lembrete</title>

        <link rel="stylesheet" type= "text/css" href="css/style.css"/>

        <style media="screen">
          body{
            background: #ffffff;
          }
        </style>
  </head>
  <body>

    <div id="menu-topo">

      <?php
      include("php/menu.php");
       ?>

    </div>

        <div class="video">
          <iframe width="520" height="380" src="https://www.youtube.com/embed/eXnBVSwVNzw"
          frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>


    <div class="conteudo">

    <h1> Definição de Verbos</h1>
    <br>
    <p class="texto">Verbo é a palavra que, por si só, exprime um fato(em geral, uma ação,
      um estado ou um fenômeno, variando sua forma para situar esse fato no tempo).</p>


    <br>
    <br>
    <h2><span style="background-color: #ffff00">Verbo Estudar</span></h2>
    <br>

    <table border="1">

        <thead>
            <!-- Criando uma linha -->
            <tr>
                <!-- Criando colunas de título -->
                <th>Passado <br> <img src="IMG/passado.png" alt=""> </th>
                <th> Presente <br> <img src="IMG/presente.png" alt=""> </th>
                <th>Futuro <br> <img src="IMG/futuro.png" alt=""> </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <!-- Colunas de conteúdo -->
                <td>Estudei</td>
                <td>Estudo</td>
                <td>Estudarei</td>
            </tr>
        </tbody>

    </table>

    <div class="limparfloat"></div>
    </div>

    <div class="confirmacao">
      <a href="q1.php" id="btnLb1" class="botao">ENTENDIDO!</a>
    </div>




  </body>
</html>
