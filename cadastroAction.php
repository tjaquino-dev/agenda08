<?php

require_once("verificarAcesso.php");
require_once("conexaoBD.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "
INSERT INTO amigo
(nome,telefone,email)
VALUES
('$nome','$telefone','$email')
";

$conexao->query($sql);

header("location:listar.php");
?>