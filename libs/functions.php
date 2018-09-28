<?php
function corpo($pagina)
{
    switch ($pagina) {
        case 'cadastro':
            require 'paginas/cadastro.php';
            break;
        case 'login':
            require 'paginas/login.php';
            break;
    }
}

function conecta()
{
  return mysqli_connect(HOST, USER, PASS, BANCO);
}

?>
