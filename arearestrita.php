<?php
	if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['id'];

	if(!isset ($_SESSION['id'])) {
    	header('Location: login.php');
	}

	require_once('conexao.php');
	date_default_timezone_set('America/Sao_Paulo');

	$database = new Database();
	$db = $database->conectar();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ACESSOU</h1> <br> 
    <a href="logout.php">SAIR</a>
</body>
</html>