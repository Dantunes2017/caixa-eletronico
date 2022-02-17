<?php
	session_start();

	$contasDao = new contasDao($pdo);

	if(isset($_POST['agencia']) && !empty($_POST['agencia'])){
		$agencia = addslashes($_POST['agencia']);
		$conta = addslashes($_POST['conta']);
		$senha = md5($_POST['senha']);

		$c = new contas();
	    $c->setAgencia($agencia);
	    $c->setConta($conta);
	    $c->setSenha($senha);

	    $contasDao->logar($c);
	}
?>