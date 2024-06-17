<?php
    if(isset($_POST['submit'])) {

        include_once('config.php');

        $protocolo = date('m', strtotime($_POST['data'])).'-'.mt_rand(10,999);
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
            data_evnt, horario, publico, ing_int, ing_meia, classificacao) VALUES ('$protocolo', '$nome', '$cnpj', '$tel', '$email', '$cep', '$logra', '$num', '$bairro', '$municipio',
            '$uf', '$titulo', '$finalidade', '$cat', '$data', '$hora', '$publico', '$ing_int', '$ing_meia', '$classificacao')");
    }
?>