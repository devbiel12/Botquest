<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="shortcut icon" href="../img/LogoB.ico" type="image/x-icon">
    <title>Resultados CSS3</title>
</head>
<body  id="home">
    <aside id="aside">
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
          
        <h1 id="tAConteudo">Vamos aos Resultados!</h1>
        <p id="pAConteudo">Parabens por ter concluido seu teste de CSS3 no Botquest, porém você ainda está no começo da jornada de programação, continue estudando os outros topicos para ter uma melhor noção de como fazer seu primeiro site</p>
    </aside>

    <h1 id="titleResultados">Resultado Css</h1>
    <section id="corpoTeste">
        <div id="ResultadoTeste">
           <p><?php
           include "conexao.php";
           session_start();
           $hoje = date('Y/m/d');
           $data = date('d/m/Y');
           $nome = $_SESSION['nome'];
           $nota = 0;


           echo "<h1>Nome: ".$nome."</h1><br>";
           echo "<h1>Data: ".$data."</h1><br>";
           
           $p1 = $_POST['p1'];
           $p2 = $_POST['p2'];
           $p3 = $_POST['p3'];
           $p4 = $_POST['p4'];
           $p5 = $_POST['p5'];
           $p6 = $_POST['p6'];
           $p7 = $_POST['p7'];
           $p8 = $_POST['p8'];
           $p9 = $_POST['p9'];
           $p10 = $_POST['p10'];

           if($p1 == "b"){
            echo "1 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "1 - Resposta Errada! Correta: 2º Alternativa<br><br>";
           }

           if($p2 == "b"){
            echo "2 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "2 - Resposta Errada! Correta: 2º Alternativa<br><br>";
           }

           if($p3 == "c"){
            echo "3 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "3 - Resposta Errada! Correta: 3º Alternativa<br><br>";
           }

           if($p4 == "c"){
            echo "4 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "4- Resposta Errada! Correta: 3º Alternativa<br><br>";
           }

           if($p5 == "a"){
            echo "5 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "5 - Resposta Errada! Correta: 1º Alternativa<br><br>";
           }

           if($p6 == "c"){
            echo "6 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "6 - Resposta Errada! Correta: 3º Alternativa<br><br>";
           }

           if($p7 == "b"){
            echo "7 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "7 - Resposta Errada! Correta: 2º Alternativa<br><br>";
           }

           if($p8 == "c"){
            echo "8 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "8 - Resposta Errada! Correta: 3º Alternativa<br><br>";
           }

           if($p9 == "b"){
            echo "9 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "9 - Resposta Errada! Correta: 2º Alternativa<br><br>";
           }

           if($p10 == "c"){
            echo "10 - Resposta Correta!<br><br>";
            $nota = $nota + 1;
           }else{
            echo "10 - Resposta Errada! Correta: 3º Alternativa<br><br>";
           }

           echo "<h1>Nota: ".$nota."</h1><br>";
           $sql -> query("insert into prova(nome, data, nota, materia)value('$nome', '$hoje','$nota', 'css')");
           ?></p>
    </div>
    </section>

    <footer id="footerResultados">
        <img src="../img/LogoW.png" id="logoFooter">
        <a href="https://www.instagram.com/g4briel_far/"><img src="../img/insta.png" id="instaF"></a>
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMhsLwKPdSgtDpMFBgZQVNcdWQKzGtkPPkcXHCjlrcXljXqwKRQLwpllzZztnTLLqGzsvV"><img src="../img/gmail.png" id="gmailF"></a>
        <a href="https://github.com/devbiel12"><img src="../img/git.png" id="gitF"></a>
        <p id="textFooter">©Gabriel Araújo 2023</p>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>