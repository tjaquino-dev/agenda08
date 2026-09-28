<?php

require_once("verificarAcesso.php");
require_once("conexaoBD.php");

$id = $_GET['id'];

$sql =
"SELECT * FROM amigo WHERE id=$id";

$resultado =
$conexao->query($sql);

$linha =
mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>
<body>

<h1>Editar Amigo</h1>

editarAction.php

<input type="hidden"
name="id"
value="<?php echo $linha['id']; ?>">

Nome

<input type="text"
name="nome"
value="<?php echo $linha['nome']; ?>">

<br><br>

Telefone

<input type="text"
name="telefone"
value="<?php echo $linha['telefone']; ?>">

<br><br>

Email

<input type="text"
name="email"
value="<?php echo $linha['email']; ?>">

<br><br>

<button>Atualizar</button>

</form>

</body>
</html>