<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validando Cadastro jogador</title>
  </head>
  <body>

    <h1>Os Jogadores Cadastrados são:</h1>

<?php
// Mostrar mensagem
session_start();

// inclui o arquivo da conexao
include_once('../bd/conexao.php');

// Recebendo dados dos campos do formulário e armazendando em uma váriavel
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmaSenha = $_POST["confirmaSenha"];


// Validar campos
$validarCampos = true;
if($nome == ""){
  echo "Preencha o nome!";
  $validarCampos = false;
}

if($email == ""){
  echo "Preencha o e-mail!";
  $validarCampos = false;
}

if($senha != $confirmaSenha){
  echo "Senhas não coincidem!";
  $validarCampos = false;
}



// Criando tabela dos Jogadores cadastrados
if($validarCampos){
  $conex = $conex = new PDO('sqlite:bd/tcc.db'); 

  $dados = $conex->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)" );

  $dados->bindParam(1, $nome);
  $dados->bindParam(2, $email);
  $dados->bindParam(3, $senha);

  $dados->execute();

  // include_once("bancoDados/conexao.php");
  // $resultado = mysqli_query($conexaoBanco, $sqlinsert);

  // $sqlinsert = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome','$email','$senha')";
  //
  // $conexaoBanco->exec('BEGIN');
  // $conexaoBanco->query($sqlinsert);
  // $conexaoBanco->exec('COMMIT');

//   echo "<table border = '0' cellpadding='3'>";
// echo "<TR><TD> NOME:</TD><TD><B> $nome </B></TD></TR>";
// echo "<TR><TD> E-MAIL:</TD><TD><B> $email </B></TD></TR>";
// echo "<TR><TD> SENHA:</TD><TD><B> $senha </B></TD></TR>";
} else {
  echo "Preencha os campos obrigatórios.";
}
// if($conexaoBanco->lastInsertRowid()){
// // if(mysqli_insert_id($conexaoBanco)){
//   $_SESSION['msg'] = "<p style='color:green;'>Jogador cadastrado com sucesso!</p>";
//   //header("Location: login.php"); // ABRE O ARQUIVO INDEX.PHP QUANDO CLICAR NO BOTÃO
// }else{
//   $_SESSION['msg'] = "<p style='color:red;'>Atenção: Cadastro do jogador não foi realizado com sucesso!</p>";
//   //header("Location: login.php");
// }
 ?>

</body>
</html>
