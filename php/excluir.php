<?php
include "conexao.php";

$id = $_GET["id"];

mysqli_query($sql, "delete from usuarios where id = $id");

header("Location: listar.php");
?>