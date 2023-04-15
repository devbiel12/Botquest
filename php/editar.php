<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="shortcut icon" href="../img/LogoB.ico" type="image/x-icon">
    <title>Edição de Dados</title>
</head>
<body id="homeCadastro">
    <?php 
    include "conexao.php";

    $id = $_GET["id"];
    $query = mysqli_query($sql,"select * from usuarios where id= $id");

    $linha = mysqli_fetch_array($query);
    ?>
    <aside>
       <img src="../img/LogoW.png" id="logo">
        <nav id="menu">
            
            <ul>
              <li><a href="#Home" onclick="subirHome()">Home</a></li>
              <li>
                <a href="php/cadastro.php">Conteudos</a>
                <ul>
                  <li><a href="php/cadastro.php">HTML5</a></li>
                  <li><a href="php/cadastro.php">CSS3</a></li>
                  <li><a href="php/cadastro.php">PHP</a></li>
                  <li><a href="php/cadastro.php">Javascript</a></li>
                </ul>
              </li>
              <li><a href="php/cadastro.php">Testes</a></li>
              <li><a href="#Footer" onclick="descerFooter()">Contato</a></li>
              <li><a href="php/cadastro.php" id="cadastro">Cadastro</a></li>
              <li><a href="php/login.php">Login</a></li>
            </ul>
          </nav>
    </aside>
          <section id="sectionCad">
    <div>
      <form method="POST" action="../php/alteracaousuario.php">
        <h1 id="titleCad">Altere os Dados Abaixo</h1>
        <p id="nome">Nome</p>
        <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
        <input type="text" id="nomeT" name="nome" value="<?php echo $linha['nome'];?>">
        <p id="usuario">Usuario</p>
        <input type="text" id="usuarioT" name="usuario" value="<?php echo $linha['usuario'];?>">
        <p id="email">Email</p>
        <input type="email" id="emailT" name="email" value="<?php echo $linha['email'];?>">
        <p id="senha">Senha</p>
        <input type="password" id="senhaT" name="senha" value="<?php echo $linha['senha'];?>">
        <input type="submit" value="Alterar" id="butCad" name="butCad"></a>
      </form>
    </div>
   </section>
   <footer id="footerCad">
        <img src="../img/LogoW.png" id="logoFooter">
        <a href="https://www.instagram.com/g4briel_far/"><img src="../img/insta.png" id="instaF"></a>
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMhsLwKPdSgtDpMFBgZQVNcdWQKzGtkPPkcXHCjlrcXljXqwKRQLwpllzZztnTLLqGzsvV"><img src="../img/gmail.png" id="gmailF"></a>
        <a href="https://github.com/devbiel12"><img src="../img/git.png" id="gitF"></a>
        <p id="textFooter">©Gabriel Araújo 2023</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>