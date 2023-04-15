<?php
include "conexao.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql-> query("update usuarios set nome='$nome',email='$email',usuario='$usuario', senha='$senha' where id=$id");
    header("Location: listar.php");
?>