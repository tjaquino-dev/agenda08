<?php

require_once("verificarAcesso.php");
require_once("conexaoBD.php");

$id = $_GET['id'];
$nome = $_GET['nome'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];

$sql = "
UPDATE amigo
SET
nome='$nome',
telefone='$telefone',
email='$email'
WHERE id=$id
";

$conexao->query($sql);

header("location:listar.php");
?>
`