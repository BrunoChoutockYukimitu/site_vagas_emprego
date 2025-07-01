<?php
/* inicio da conexão com o BD*/
$servidor = 'localhost';
$bd = 'vagas_de_emprego';
$usuario = 'root';
$senha = '';
$id = $_GET['id'] ?? 0;
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("deu ruim" . mysqli_connect_error());
}

/* fim da conexao */
?>