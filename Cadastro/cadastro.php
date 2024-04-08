<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "taskmaster";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "INSERT INTO task (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
  } else {
    echo "Erro ao cadastrar usuário: " . $conn->error;
  }
}

$conn->close();
?>