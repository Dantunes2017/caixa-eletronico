<?php
	$db_name = 'caixa_eletronico';
	$db_host = 'localhost';

	$db_dsn  = "mysql:dbname=".$db_name.";host=".$db_host;
	$db_user = 'root';
	$db_pass = 'dinare23';

	try{
		$pdo = new PDO($db_dsn, $db_user, $db_pass);
	}catch(PDOException $e){
		echo "Falha na Conexão: ".$e->getMessage;
	}
?>