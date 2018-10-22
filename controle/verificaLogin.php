<?php

$usuario = $_POST (['usuario']);

$senha = $_POST (['senha']);

// Conectar no banco
$con = mysql_connect("localhost", "root", "digite a senha do banco aqui") or die
 ("Sem conexão com o servidor");

$select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em
contato com o Administrador");

// Verificar se os dados tem lá
//Pegando as variaveis usuario e senha e pesquisando na tabela de usuários
$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");

/*if e else para verificando se a variável $result encontrou algum registro idêntico o seu valor.
Se encontrar será redirecioanado para a tela d primeira questão lb1.php
Caso contrario retornara  para a página do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:lb1.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:login.php');

  }
?>


// $senha = mds5 ($senha . "ifpr");
//
// echo "Olá {$login}, estamos tentando fazer seu login....";
//
//   if ($usuario != "" && $senha != "") {
//
//     $sql = "SELECT * FROM nome_tabela_bd WHERE (nome_coluna_login LIKE '$usuario' AND senha LIKE '$senha';) ";
//
//
//   }else {
//     echo "Preencher dados obrigatórios!";
//   }


?>
