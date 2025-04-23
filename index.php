<?php

#iniciar seção
session_start();

#base de dados
include 'db.php';

#cabeçalho
include 'header.php';

#conteúdo da página

if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }

    else{
        $pagina = 'teste';
    }
}

else{
        $pagina = 'home';
}

switch($pagina) {
    case 'teste': include 'views/teste.php'; break;
    case 'teste2': include 'views/teste2;php'; break;
    default: include 'views/home.php';
    break;
}

#rodapé
include 'footer.php';