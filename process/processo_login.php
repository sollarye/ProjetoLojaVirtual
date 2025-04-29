<?php

include 'db.php';

$email = $_POST['email_cliente'];
$senha = $_POST['senha_cliente'];

$query = "SELECT*FROM CLIENTE WHERE EMAIL_CLIENTE = '$email' and SENHA_CLIENTE = '$senha'";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta)==1){
    /*echo 'login feito com sucesso';*/

    session_start();
    $_SESSION['login']=true;
    $_SESSION['email']=$email;

    header('location:../views/teste.php');
}

else{
    /* echo 'usuário e /ou senha inválido(s).;*/
    header('location:../views/login.php?erro');
}