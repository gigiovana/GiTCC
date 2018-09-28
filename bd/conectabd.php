<?php

$conecta = mysqli_connect('localhost', 'root', '', 'GiTCC');

$sqlinsert = "INSERT INTO usuario (nome, email, senha) VALUES".
                 "('Rafaela', 'rafaelacosta@gmail.com', '1234')";

$verifica = mysqli_query($conecta, $sqlinsert);

if ($verifica) {
  echo "Funcionou";

} else {
  echo "Não funcionou";
}

 ?>
