<<<<<<< HEAD
<?php

$login = $_POST['usuario'];

$senha = $_POST['senha'];

// Conectar no banco

// Verificar se os dados tem lá


echo "Olá {$login}, estamos tentando fazer seu login....";



?>
=======
<?php

$login = $_POST trim(['usuario']);

$senha = $_POST trim(['senha']);

// Conectar no banco

// Verificar se os dados tem lá


$senha = mds5 ($senha . "ifpr");

echo "Olá {$login}, estamos tentando fazer seu login....";

  if ($usuario != "" && $senha != "") {

    $sql = "SELECT * FROM nome_tabela_bd WHERE (nome_coluna_login LIKE '$usuario' AND senha LIKE '$senha';) ";


  }else {
    echo "Preencher dados obrigatórios!";
  }


?>
