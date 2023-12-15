<?php
#$servidor = '172.31.10.129';
$servidor = 'rds.unc.br';
$usuario = 'site_leitura';
$senha = 'A7$9aopbBA+J2';
$banco = 'site_novo';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno())
	trigger_error(mysqli_connect_error());
?>
