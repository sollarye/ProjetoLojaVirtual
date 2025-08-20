<?php

include 'db.php';

$email = $_POST['email_cliente']; // Recebe o e-mail enviado pelo formulário
$senha = $_POST['senha_cliente']; // Recebe a senha enviada pelo formulário


// Consulta SQL que verifica se existe um cliente com esse e-mail e senha
$query = "SELECT*FROM CLIENTE WHERE EMAIL_CLIENTE = '$email' and SENHA_CLIENTE = '$senha'";

$consulta = mysqli_query($conexao, $query);

// Condição que define que, se encontrar 1 linha, o login é válido
if (mysqli_num_rows($consulta)==1){
    session_start();
    $_SESSION['login']=true; // Define uma variável de sessão para identificar o login
    $_SESSION['email']=$email; // Salva o e-mail da sessão

    header('location:../views/confirmacao_login.php'); // Redireciona o usuário para a página de confirmação do login
}

// Condição redireciona o usuário à uma página que exibe uma mensagem de erro
else{
    header('location:../views/login.php?erro');
}