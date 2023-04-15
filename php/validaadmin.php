<?php
    session_start();
    include_once("conexao.php");
    $acessar = filter_input(INPUT_POST, 'logar', FILTER_DEFAULT);

    if($acessar){
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_DEFAULT);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

        if((!empty($usuario)) and (!empty($senha))){
            $result_usuario = "select nome, senha from admin where usuario= '$usuario' LIMIT 1";
            $resultado_usuario = mysqli_query($sql, $result_usuario);
            if($resultado_usuario){
                $row_usuario = mysqli_fetch_assoc($resultado_usuario);
                if(password_verify($senha, $row_usuario['senha'])){
                    $_SESSION['nome'] = $row_usuario['nome'];
                    header("Location: ../php/listar.php");
                }else{
                    $_SESSION['msg'] = "<texto>Senha incorreta</texto>";
                    header("Location: ../php/loginadmin.php");
                }
            }
        }else{
            $_SESSION['msg'] = "<texto>Usuário incorreto</texto>";
            header("Location: ../php/loginadmin.php");
        }
    }else{
        $_SESSION['msg'] = "<texto>Página não encontrada</texto>";
        header("Location: ../php/loginadmin.php");
    }
?>