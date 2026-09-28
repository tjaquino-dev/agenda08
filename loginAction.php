<?php
session_start();

require_once("conexaoBD.php");

$nome = $_POST["txtNome"];
$senha = $_POST["txtSenha"];

$sql = "SELECT * FROM usuario
WHERE nome='$nome'";

$resultado = $conexao->query($sql);

$linha = mysqli_fetch_array($resultado);

if($linha != null && $linha['senha'] == $senha)
{
 $_SESSION['logado'] = $nome;
 header("location:principal.php");
}
else
{
 echo "Login inválido";
}
?>