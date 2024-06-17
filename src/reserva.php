<?php
	if(isset($_POST['submit'])) {

        //include_once('../assets/php/config.php');

        //$nome = $_POST['nome'];
        //$cnpj = $_POST['cnpj'];
        //$tel = $_POST['tel'];
        //$email = $_POST['email'];
        //$cep = $_POST['cep'];
        //$logra = $_POST['logra'];
        //$num = $_POST['num'];

        //$result = mysqli_query($conexao, "INSERT INTO(nome, cnpj, telefone, email, cep, logradouro, num) VALUES ('$nome', '$cnpj', '$tel', '$email', '$cep', '$logra', '$num'");
		print_r('<br/>');
		print_r('<br/>');
		print_r('<br/>');
		print_r('<br/>');
		$mes = date('m', strtotime($_POST['data'])).'-'.mt_rand(10,999);
		print_r($mes);
	
	}


?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'/>
		<title>Centro Cultural Frei Civitella</title>
		<link rel="icon" href="assets/images/icon.jpg" type="image/png">
		<link href="../assets/styles/styles.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<!--BARRA DE NAVEGAÇÃO-->
		<div class="navbar">
			<ul>
				<li><a href="../index.html">INÍCIO</a></li>
				<li><a href="../src/agenda.html">AGENDA</a></li>
				<li><a class="active" href="../src/reserva.html">RESERVA</a></li>
				<li><a href="../src/informacoes.html">INFORMAÇÕES</a></li>
			</ul>
		</div>
		<!--FIM-->
		<!--FORMULÁRIO SOLICITAÇÃO DE RESERVA ../assets/php/formulario.php-->
		<h1>Solicitação de Resreva do Teatro Frei Civitella Del Tronto</h1>
		<form action="reserva.php" method="POST">
			<fieldset>
				<legend><b>DADOS DO SOLICITANTE</b></legend>
				<label>Nome:</label> <input type="text" name="nome" id="nome" required/> <br/>
				<!--<input id="pju" type="radio" name="pfpj" value="pj"/>
				<label for="pju">Pessoa Juridica</label>
				<input id="pfi" type="radio" name="pfpj" value="pf"/>
				<label for="pfi">Pessoa Fisica</label> <br/>
				<label>CPF:</label>
				<input type="text" name="cpf" maxlength="11" required/> <br/>-->
				<label>CNPJ:</label> <input type="text" name="cnpj" id="cnpj" required /> <br/>
				<label>Telefone:</label> <input type="tel" name="tel" id="tel" required /> <br/>
				<label>E-mail:</label> <input type="email" name="email" id="email" required /> <br/>
				<label>CEP:</label> <input type="text" name="cep" id="cep" required/> <br/>
				<label>Logradouro:</label> <input type="text" name="logra" id="logra" required/> <br/>
				<label>Data do Evento:</label> <input type="date" name="data" id="data" required/> <br/>
			</fieldset>
			<input type="submit" name="submit" value="Enviar" id="submit">
		</form>
		<!--FIM-->

		<!--RODAPÉ DA PÁGINA-->
		<footer>
			Desenvolvido por: <a href="https://github.com/kleydsongc" target="_blank">Kleydsongc</a>
		</footer>
		<!--FIM-->
		<script src="../assets/js/script.js"></script>
	</body>
</html>