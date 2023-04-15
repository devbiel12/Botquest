<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="shortcut icon" href="../img/LogoB.ico" type="image/x-icon">
    <title>Seu Perfil</title>
</head>
<body id="homeLogin">
<?php
session_start();
include "conexao.php";
?>
    <aside>
        <img src="../img/LogoW.png" id="logo">
        <nav id="menu">
            
            <ul>
              <li><a href="../index.php">Home</a></li>
              <li>
                <a href="../html/conteudos.html">Conteudos</a>
                <ul>
                  <li><a href="../html/htmlC.html">HTML5</a></li>
                  <li><a href="../html/cssC.html">CSS3</a></li>
                  <li><a href="../html/phpC.html">PHP</a></li>
                  <li><a href="../html/jsC.html">Javascript</a></li>
                </ul>
              </li>
              <li><a href="../html/teste.html">Testes</a></li>
              <li><a href="#Footer" onclick="descerFooter()">Contato</a></li>
              <li><a href="../php/perfil.php" id="cadastro">Perfil</a></li>
              <li><a href="../php/sair.php">Sair</a></li>
            </ul>
          </nav>
    </aside>

   <section id="sectionPerfil">
    <h1 id="perfil">Seu Perfil</h1>
    <img src="../img/Fotoi.png" id="fotoPerfil">
    <input type="button" value="Trocar Foto" id="trocaFoto">
        <div id="dados">
        <p>Nome: <?php 
        if(!empty($_SESSION['id'])){
            echo "".$_SESSION['nome']."";
        }
        ?></p><br>
        <p>Usuario: <?php 
        if(!empty($_SESSION['id'])){
            echo "".$_SESSION['usuario']."";
        }
        ?></p><br>
        <p>Email: <?php 
        if(!empty($_SESSION['id'])){
            echo "".$_SESSION['email']."";
        }
        ?></p><br>
        </div>
   </section>
    <footer id="footerLog">
        <img src="../img/LogoW.png" id="logoFooter">
        <a href="https://www.instagram.com/g4briel_far/"><img src="../img/insta.png" id="instaF"></a>
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMhsLwKPdSgtDpMFBgZQVNcdWQKzGtkPPkcXHCjlrcXljXqwKRQLwpllzZztnTLLqGzsvV"><img src="../img/gmail.png" id="gmailF"></a>
        <a href="https://github.com/devbiel12"><img src="../img/git.png" id="gitF"></a>
        <p id="textFooter">©Gabriel Araújo 2023</p>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>