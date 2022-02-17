<?php
	require 'config.php';
	require 'dao/contasDao.php';
	require 'dao/historicoDao.php';
	require 'actions/transacaoAction.php';
?>

<link rel="stylesheet" href="assets/css/style.css" type="text/css"> 
<body>
	<img src="assets/images/bb.png"><br>
	<h1>BANCO DO BRASIL</h1><br>
	<form method="POST">
		Tipo de Transação:<br>
		<select class="btn" name="tipo">
			<option value="0">Depósito</option>
			<option value="1">Retirada</option>
		</select><br><br>

		Valor:<br>
		<input class="input" type="text" name="valor"><br><br>

		<input class="btn" type="submit" value="Adicionar">

	</form>
</body>