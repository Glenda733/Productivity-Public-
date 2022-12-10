<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");

        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--Bootstrap-->
   <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
   <!--Estilo CSS-->
   <link rel="stylesheet" href="./css/style.css">
   <!--Icone da página-->
   <link rel="shortcut icon" href="image/Favicon.ico" type="image/x-icon">

   <title>Productivity</title>
</head>

<body>

   <div class="wrapper">
      <div class="title-text">
         <div class="title login">
            <img src="./image/Logo-removebg-preview.png" class="image-logo">
         </div>
         <div class="title signup">
            <img src="./image/Logo-removebg-preview.png" class="image-logo">
         </div>
      </div>

      <!--Primeira parte do form-->
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Acesso</label>
            <label for="signup" class="slide signup">Cadastro</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <!--Logar-->
            <form action="./testLogin.php" method="POST" class="login">
               <div class="field">
                  <input type="text" name="email" placeholder="E-mail" required>
               </div>
               <div class="field">
                  <input type="password" name="senha" placeholder="Senha" required>
               </div>
               <div class="pass-link">
                  <a href="#">Esqueceu sua senha?</a>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="submit" value="Entrar">
               </div>
               <div class="signup-link">
                  Não possui cadastro? <a href="">Cadastre-se agora</a>
               </div>
            </form>

            <!--Segunda parte do form-->
            <form action="#" method="POST" class="signup">
               <!--Form de cadastro-->
               <div class="field">
                  <input type="text" name="nome" placeholder="Nome" required>
               </div>
               <div class="field">
                  <input type="email" name="email" placeholder="E-mail" required>
               </div>
               <div class="field">
                  <input type="password" name="senha" placeholder="Senha" required>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="submit" placeholder="Cadastrar" value="Cadastrar">
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
<!--Javascript-->
<script src="./js/script.js"></script>

</html>
