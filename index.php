<?php
	require 'config.php';
	require 'dao/contasDao.php';
	require 'dao/historicoDao.php';
	require 'actions/indexAction.php';
?>

<link rel="stylesheet" href="assets/css/style.css" type="text/css"> 
<body>
	<div class="container">
		<img src="assets/images/bb.png"><br>
		<h1>BANCO DO BRASIL</h1><br>
		<div>
			<table border="3">
				<tr>
					<td><strong>Títular </strong></td>
					<td><?php echo $conta['titular'];?></td>
				<tr>
				<tr>
					<td><strong>Agência </strong></td>
					<td><?php echo $conta['agencia'];?></td>
				<tr>
				<tr>
					<td><strong>Conta </strong></td>
					<td><?php echo $conta['conta'];?></td>
				<tr>
				<tr>
					<td><strong>Saldo </strong></td>
					<td><?php echo 'R$ '.number_format($conta['saldo'],2,',','.');?></td>
				<tr>
			</table>
			<br>
		</div>
		<div><a href="transacao.php">ADICIONAR TRANSAÇÃO</a><br><br></div>
		<div><a href="sair.php">SAIR</a></div>
	</div>

	<div class="container">
		<h2>Movimentação/Extrato</h2>
		<table border='1' width='400px'>
			<tr>
				<th>DATA</th>
				<th>VALOR</th>
			</tr>
			<?php 
				foreach ($historico as $key => $hist): ?>
					<tr>
						<td><span class="<?php if($hist['tipo'] == 0){echo 'deposito';}else{echo 'retirada';} ?>"><?php echo date('d/m/Y H:i:s', strtotime($hist['data_operacao']));?></span></td>
						<td><span class="<?php if($hist['tipo'] == 0){echo 'deposito';}else{echo 'retirada';} ?>"><?php echo 'R$ '.number_format($hist['valor'],2,',','.');?></span></td>
					</tr>
				<?php endforeach;
			?>
		</table>
	</div>
</body>