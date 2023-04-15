<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="shortcut icon" href="../img/LogoB.ico" type="image/x-icon">
    <title>Listagem de Dados</title>
</head>
<body  id="homeLogin">
    <aside>
        <img src="../img/LogoW.png" id="logo"></a>
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
          <?php
    include "conexao.php";
    $query = mysqli_query($sql,"select * from usuarios")
    
    ?>

    <table id = "tableUsuario" border ="1">
        <tr>
            <td align = "center">Id</td>
            <td align = "center">Nome</td>
            <td align = "center">Usuario</td>
            <td align = "center">Email</td>
            <td align = "center">Senha</td>
            <td align = "center" colspan = "2">Ação</td>
            
        </tr>

    <?php 
        while($linha = mysqli_fetch_array($query)){
            //array significa vetor

            $id = $linha['id'];
            $nome = $linha['nome'];//$ cria variaveis
            $usuario = $linha['usuario'];
            $email = $linha['email'];
            $senha = $linha['senha'];

            echo "
                <tr> 
                    <td> $id</td>
                    <td> $nome</td>
                    <td> $usuario</td>
                    <td> $email</td>
                    <td> $senha</td>
                    
                  
                    <td><a href=\"editar.php?id=$id\" id =\"editar\">[Editar]</td>
                    <td><a href=\"excluir.php?id=$id\" id =\"excluir\"> [Excluir]</td>
                </tr>
            ";
        
        }

    ?>
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
