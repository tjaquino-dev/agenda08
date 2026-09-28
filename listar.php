<?php

require_once("verificarAcesso.php");
require_once("conexaoBD.php");

$sql = "SELECT * FROM amigo";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html>
<body>

<h1>Lista de Amigos</h1>

<table border="1">

<tr>
<th>ID</th>
<th>Nome</th>
<th>Telefone</th>
<th>Email</th>
<th>Ações</th>
</tr>

<?php
while($linha =
mysqli_fetch_assoc($resultado))
{
?>

<tr>

<td><?php echo $linha['id']; ?></td>
<td><?php echo $linha['nome']; ?></td>
<td><?php echo $linha['telefone']; ?></td>
<td><?php echo $linha['email']; ?></td>

<td>

editar.php?id=<?php echo $linha['id']; ?>
Editar
</a>

|

<a href.php?id=<?php echo $linha['id']; ?>
Excluir
</a>

</td>

</tr>

<?php
}
?>

</table>

<br>

<a href="principal.php">
Voltar
</a>

</body>
</html>