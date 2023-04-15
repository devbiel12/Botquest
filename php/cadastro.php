<?php
$btnCadUsuario = filter_input(INPUT_POST, 'butCad', FILTER_DEFAULT);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	}elseif(stristr($dados['senha'], "&")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( & ) utilizado na senha é inválido";
		
	}else{
		$result_usuario = "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}
		
		$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
						'" .$dados['usuario']. "',
						'" .$dados['senha']. "'
						)";
		$resultado_usario = mysqli_query($sql, $result_usuario);
		if(mysqli_insert_id($sql)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: ../php/login.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
	
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="shortcut icon" href="../img/LogoB.ico" type="image/x-icon">
    <title>Se cadastre no site</title>
</head>
<body id="homeCadastro">
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
    <?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
		?>
   <section id="sectionCad">
    <div>
      <form method="POST" action="">
        <h1 id="titleCad">Cadastre o seus dados abaixo</h1>
        <p id="nome">Nome</p>
        <input type="text" id="nomeT" name="nome" required>
        <p id="usuario">Usuario</p>
        <input type="text" id="usuarioT" name="usuario" required>
        <p id="email">Email</p>
        <input type="email" id="emailT" name="email" required>
        <p id="senha">Senha</p>
        <input type="password" id="senhaT" name="senha" required>
        <input type="submit" value="Cadastrar" id="butCad" name="butCad"></a>
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
    <script src="../js/script.js"></script>
</body>
</html>