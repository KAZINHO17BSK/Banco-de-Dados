<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ./Login/login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
      <h1>Bem-vindo</h1> 
      <h2><?php echo $_SESSION['user_nome']; ?></h2>
    </div>
    <div class="imagem-container" id="imagemContainer">
        <div class="img"><img src="img.png" alt="Imagem" id="imagem" ondblclick="mostrarCoração()"></div>
        <button class="botao-coracao" id="botaoCurtir">❤️</button>
        <button class="botao-curtir" id="botaoCurtir" onclick="curtir()">❤️</button>
        <button class="botao-comentar" onclick="comentar()"><img src="https://images.emojiterra.com/google/noto-emoji/unicode-15.1/color/512px/1f4ac.png" alt=""></button>
    </div>
  <div class="P1">
    <p id="contadorCurtidas">0 curtidas</p>
  </div>
  </body>
  <script src="script.js"></script>
</html>