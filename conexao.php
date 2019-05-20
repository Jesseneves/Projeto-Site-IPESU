<?php 

$host = "sql109.epizy.com";
$usuario= "epiz_23890501"
$senha = "nPd3IoPe0NC79Ya";
$bd = "epiz_23890501_ip2";

mysql = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
	echo "Falha na Conexao: (".$mysqli->connect_errno.") ".mysqli->connect_error;
	
?>