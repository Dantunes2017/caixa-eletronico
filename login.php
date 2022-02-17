<?php
	require 'config.php';
	require 'dao/contasDao.php';
	require 'actions/loginAction.php';
?>

<link rel="stylesheet" href="assets/css/style.css" type="text/css"> 
<body>
<img src="assets/images/bb.png"><br>
<h1>BANCO DO BRASIL</h1><br>
<form method="POST">
	Agência:<br>
	<input class="input" type="text" name="agencia" required/><br><br>
	Conta:<br>
	<input class="input" type="text" name="conta" required/><br><br>
	Senha:<br>
	<input class="input" type="password" name="senha" required/><br><br>

	<input class="btn" type="submit" value="Entrar">
</form>
</body>