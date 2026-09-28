<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body{
font-family:Arial;
background:#f0f0f0;
}

.login{
width:300px;
margin:120px auto;
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px gray;
}
</style>
</head>

<body>

<div class="login">

<h2>Login</h2>

<form action="loginAction.php" method="post">

<input type="text"
name="txtNome"
placeholder="Usuário"
required><br><br>

<input type="password"
name="txtSenha"
placeholder="Senha"
required><br><br>

<button>Entrar</button>

</form>

</div>

</body>
</html>