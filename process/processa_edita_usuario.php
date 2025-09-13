<?php

include 'db.php';

$id = $_POST['id_cliente'];
$nome = $_POST['nome_cliente'];
$data_nasc = $_POST['data_nasc'];
$email = $_POST['email_cliente'];
$senha = $_POST['senha_cliente'];

$query = "UPDATE CLIENTE SET nome_cliente = '$nome', data_nasc = '$data_nasc', email_cliente = '$email', senha_cliente = '$senha' WHERE id_cliente = $id";

mysqli_query($conexao, $query);

header("location: ../views/visualizar_dados.php?editado=1");
