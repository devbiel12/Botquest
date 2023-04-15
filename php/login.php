<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="shortcut icon" href="../img/LogoB.ico" type="image/x-icon">
    <title>Faça o Login</title>
</head>
<body id="homeLogin">
    <aside>
        <img src="../img/LogoW.png" id="logo">
        <nav id="menu">
            
        <ul>
              <li><a href="../index.html" onclick="subirHome()">Home</a></li>
              <li>
                <a href="../php/cadastro.php">Conteudos</a>
                <ul>
                  <li><a href="../php/cadastro.php">HTML5</a></li>
                  <li><a href="../php/cadastro.php">CSS3</a></li>
                  <li><a href="../php/cadastro.php">PHP</a></li>
                  <li><a href="../php/cadastro.php">Javascript</a></li>
                </ul>
              </li>
              <li><a href="../php/cadastro.php">Testes</a></li>
              <li><a href="#Footer" onclick="descerFooter()">Contato</a></li>
              <li><a href="../php/cadastro.php" id="cadastro">Cadastro</a></li>
              <li><a href="../php/login.php">Login</a></li>
            </ul>
          </nav>
    </aside>

   <section id="sectionLog">
    <div>
      <form method="POST" action="validalogin.php">
        <h1 id="titleLog">Insira os dados para logar</h1>
        <p id="nomeUsuario">Nome de Usuario</p>
        <input type="text" id="nomeTL" name="usuario" required>
        <p id="senhaLog">Senha</p>
        <input type="password" id="senhaTL" name="senha" required>
        <input type="submit" value="Logar" id="butLog" name="logar"></a>
      </form>
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