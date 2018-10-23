<?php

 ?><!DOCTYPE html>
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
       <iframe width="300" height="250" src="https://www.youtube.com/embed/eXnBVSwVNzw"
       frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     </div>

     <div class="conteudo">

     <h1> Tema </h1>
     <br>
     <p class="texto"> Conteudo </p>

     <div class="limparfloat"></div>
     </div>

     <div class="confirmacao">
       <input id="btnLb1" type="button" value="Entendido!" class="botao">
     </div>

   </body>
 </html>
