<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lembrete</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>


      <script src="js/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

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

    <h1>     <p><a href="#modalVerbos" rel="modal:open">Definição de Verbos</a></p></h1>
    <!-- <p><a href="#ex1" rel="modal:open">Open Modal</a></p> -->
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

    <div id="modalVerbos" class="modal">
    <p>Thanks for clicking. That felt good.</p>
    <a href="#" rel="modal:close">Close</a>
    </div>


  </body>
</html>
