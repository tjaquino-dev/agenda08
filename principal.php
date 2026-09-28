<?php
require_once("verificarAcesso.php");
?>

<!DOCTYPE html>
<html>
<body>

<h1>Projeto Lista de Amigos</h1>

<p>Bem-vindo <?php echo $_SESSION['logado']; ?></p>

<hr>

<a href="cadastro.php">
Cadastrar Amigo
</a>

<br><br>

<a href="listar.php">
Listar Amigos
</a>

<br><br>

<a href="logoutAction.php">
Logout
</a>

</body>
</html>
