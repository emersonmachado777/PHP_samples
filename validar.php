<?php

require_once('conexao.php');

$usuario = $_POST['usuario'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$bancoDados = new db();

$link = $bancoDados->conecta_mysql();


$sql = "insert into usuarios(usuario, email, senha) values('$usuario', '$email', '$senha',)";

mysqli_query($link, $sql);

?>