<?php
	include_once('conexao.php');

    if(isset($_POST['submit'])) {

        $protocolo = date('m', strtotime($_POST['data'])).'-'.mt_rand(100,999);
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $cep = $_POST['cep'];
        $logra = $_POST['logra'];
        $num = $_POST['num'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $uf = $_POST['uf'];
        $titulo = $_POST['titulo'];
        $finalidade = $_POST['finalidade'];
        $cat = $_POST['cat'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $publico = $_POST['publico'];
        $ing_int = $_POST['ing_int'];
        $ing_meia = $_POST['ing_meia'];
        $classificacao = $_POST['classificacao'];

        $result = mysqli_query($conexao, "INSERT INTO solicitacoes(protocolo, nome, cnpj, telefone, email, cep, logradouro, num, bairro, municipio, uf, titulo, finalidade, categoria,
            data_evnt, horario, publico, ing_int, ing_meia, classificacao, situacao) VALUES ('$protocolo', '$nome', '$cnpj', '$tel', '$email', '$cep', '$logra', '$num', '$bairro',
			'$municipio', '$uf', '$titulo', '$finalidade', '$cat', '$data', '$hora', '$publico', '$ing_int', '$ing_meia', '$classificacao', 'PENDENTE')");

		/*$consulta = '<label>Digite o código de protocolo informado após a solicitação de reserva:</label><br/> <input type="text" name="protocolo"
			id="protocolo" value = '.$protocolo.' required><br/>';*/

		$tabela = array($nome, $cnpj, $tel, $email, $cep, $titulo, $cat, $data, $hora, 'PENDENTE');
    }

	else {
		$protocolo = '';
		$tabela = array('', '', '', '', '', '', '', '', '', '');
	}

	if(isset($_POST['protocolo'])) {
		$protocolo = $_POST['protocolo'];
		$result = mysqli_query($conexao, "SELECT nome, cnpj, telefone, email, cep, titulo, categoria, data_evnt, horario, situacao FROM solicitacoes WHERE protocolo = '$protocolo'");
		$tabela = mysqli_fetch_assoc($result);
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Centro Cultural Frei Civitella</title>
		<link rel="icon" href="../assets/images/brasao.png" type="image/png">
		<link href="../assets/styles/styles.css" type="text/css" rel="stylesheet">
	</head>

	<body>
<!--BARRA DE NAVEGAÇÃO-->
		<div class="navbar">
			<ul>
				<li><a href="../index.html">INÍCIO</a></li>
				<li><a href="../src/reservar.html">RESERVAR</a></li>
				<li><a class="active" href="../src/consultar.php">CONSULTAR</a></li>
				<li><a href="../src/informacoes.html">INFORMAÇÕES</a></li>
			</ul>
		</div>
<!--FIM-->

<!--FORMULÁRIO SOLICITAÇÃO DE RESERVA-->
		<h1>Consultar Solicitação de Reserva</h1>

		<form class = "form2" action="../src/consultar.php" method="POST">
			<fieldset>
				<label>Digite o código de protocolo informado após a solicitação de reserva:</label><br/>
				<input type="text" name="protocolo" id="protocolo" value = '<?php echo $protocolo; ?>' required><br/>
				<input type="submit" name="consultar" value="CONSULTAR" id="consultar"><br/>

				<table>
					<tr>
						<th>SOLICITANTE</th>
						<th>CNPJ</th>
						<th>TEL.</th>
						<th>E-MAIL</th>
						<th>CEP</th>
						<th>TÍTULO DO EVENTO</th>
						<th>CATEGORIA</th>
						<th>DATA</th>
						<th>HORÁRIO</th>
						<th>SITUAÇÃO</th>
					</tr>
					<tr>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[0];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[1];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[2];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[3];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[4];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[5];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[6];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[7];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[8];
							?>
						</td>
						<td>
							<?php $tabela = array_values($tabela);
								echo $tabela[9];
							?>
						</td>
					</tr>
				</table>

			</fieldset>
		</form>

		<!--RODAPÉ DA PÁGINA-->
		<footer>
			Desenvolvido por: <a href="https://github.com/kleydsongc" target="_blank">Kleydsongc</a>
		</footer>
		<!--FIM-->
		<script src="../assets/js/script.js"></script>
	</body>
</html>