<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="shortcut icon" href="img/LogoB.ico" type="image/x-icon">
    <title>Bem vindo a BotQuest</title>
</head>
<body  id="home">
    <aside id="aside">
        <img src="img/LogoW.png" id="logo">
        <nav id="menu">
            
            <ul>
              <li><a href="#Home" onclick="subirHome()">Home</a></li>
              <li>
                <a href="html/conteudos.html">Conteudos</a>
                <ul>
                  <li><a href="html/htmlC.html">HTML5</a></li>
                  <li><a href="html/cssC.html">CSS3</a></li>
                  <li><a href="html/phpC.html">PHP</a></li>
                  <li><a href="html/jsC.html">Javascript</a></li>
                </ul>
              </li>
              <li><a href="html/teste.html">Testes</a></li>
              <li><a href="#Footer" onclick="descerFooter()">Contato</a></li>
              <li><a href="php/perfil.php" id="cadastro">Perfil</a></li>
              <li><a href="php/sair.php">Sair</a></li>
            </ul>
          </nav>
          
        <h1 id="tAside">Entendendo um pouco as linguagens</h1>
        <p id="pAside">Leia as apostilas em Conteudos e comece os estudos</p>
        <a href="html/conteudos.html"><input type="submit"  value="Vamos Começar" id="buttonVC"></a>
    </aside>

    <div id="corpoSite">
        <h1 id="titleHome">Sobre o BOTQUEST</h1>
        <p id="textCorpo">O BOTQUEST é um site com o objetivo de divulgar conhecimento sobre programação, pegando como base 4 linguagens muito utilizadas em areas como front end, back end e full stack. Dentre essas linguagens estão o HTML5 e CSS3(Linguagens de Marcação), Javascript e PHP(Linguagens de programação).<br><br>
        Além do intuito de testar seu conhecimento, o BOTQUEST contá com alguns materias bem basicos sobre cada uma das linguagens que estão sendo abordadas aqui, junto a recomendações de onde fazer cursos que levarão o usuário a aprender mais sobre cada uma dessas linguagens e se tornar um Desenvolvedor. <br><br>
        E você? Vai ficar de fora? Faça seu cadastro no botão do menu principal ou pelo menu de navegação, após ele feito clique em “Conteudos” no Menu e inicie sua jornada no mundo da programação ou teste seu conhecimento em “Testes” no menu</p>
        <img src="img/imgdiv.jpg" id="imgDiv">
    </div>
    <footer>
        <img src="img/LogoW.png" id="logoFooter">
        <a href="https://www.instagram.com/g4briel_far/"><img src="img/insta.png" id="instaF"></a>
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMhsLwKPdSgtDpMFBgZQVNcdWQKzGtkPPkcXHCjlrcXljXqwKRQLwpllzZztnTLLqGzsvV"><img src="img/gmail.png" id="gmailF"></a>
        <a href="https://github.com/devbiel12"><img src="img/git.png" id="gitF"></a>
        <p id="textFooter">©Gabriel Araújo 2023</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>