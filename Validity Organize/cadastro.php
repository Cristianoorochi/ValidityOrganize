<?php
	include_once('conexao.php');

	$codigo = $_POST['codigo'];
	$produtoo = $_POST['produto'];
	$lote = $_POST['lote'];
	$dataEntrada = $_POST['dataentrada'];
	$dataVencimento = $_POST['diaVenc'];
	
	
	$sql = "INSERT INTO produtos ( codigo, produto, lote, dataEntrada, dataVencimento)
	VALUES ('$codigo', '$produtoo', '$lote', '$dataEntrada', '$dataVencimento')";

	if ($conn->query($sql) === TRUE) {
	    echo "Novo produto cadastro com sucesso! ";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
$conn->close();