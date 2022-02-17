<?php 
	session_start();

	$contasDao = new contasDao($pdo);
	
	if(isset($_SESSION['conta']) && !empty($_SESSION['conta'])){
		$id = $_SESSION['conta'];
		
		$c = new contas();
		$c->setId($id);

		$conta = $contasDao->getInfo($c);

	}else{
		header("Location: login.php");
		exit;
	}

	$historicoDao = new historicoDao($pdo);

	if(isset($_SESSION['conta']) && !empty($_SESSION['conta'])){
		$idConta = $_SESSION['conta'];

		$h = new historico();
		$h->setIdConta($idConta);

		$historico = $historicoDao->getHistorico($h);
	
	}else{
		header("Location: login.php");
		exit;
	}

?>