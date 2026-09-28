<?php

$host = "localhost";
$user = "root";
$pass = "@dmin";
$db = "agenda8";

$conexao = new mysqli($host,$user,$pass,$db);

if($conexao->connect_error)
{
 die("Erro na conexão.");
}
?>