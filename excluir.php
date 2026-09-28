<?php

require_once("verificarAcesso.php");
require_once("conexaoBD.php");

$id = $_GET['id'];

$sql =
"DELETE FROM amigo
WHERE id=$id";

$conexao->query($sql);

header("location:listar.php");
?>