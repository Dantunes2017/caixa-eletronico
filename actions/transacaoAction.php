<?php 
	session_start();

	$historicoDao = new historicoDao($pdo);
	$contasDao = new contasDao($pdo);

	if(isset($_POST['tipo'])) {
		$idConta = $_SESSION['conta'];

		$tipo = addslashes($_POST['tipo']);
		$valor = addslashes($_POST['valor']);
		$valor = str_replace(",", ".", $valor);
		$valor = floatval($valor);

		$h = new historico();
		$h->setIdConta($idConta);
		$h->setTipo($tipo);
		$h->setValor($valor);

		$c = new contas();
		$c->setValor($valor);
		$c->setId($idConta);


		$historico = $historicoDao->setHistorico($h);

		if($tipo == '0') {
			$contasDao->deposito($c);
		} else {
			$contasDao->retirada($c);
		}

		header("Location: index.php");
		exit;
	}
?>