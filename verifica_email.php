<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email_cliente"];



    //Verificando se é um email válido

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Por favor, insira um email válido";
        exit;

    }

}


//Lista de extensões permitidas

$extensoesPermitidas = ["gmail.com", "hotmail.com", "yahoo.com", "outlook"];/

//separa as informações, entre antes do @ e depois do @ (que seria extensão)

$partesEmail = explode("@", $email);//A função "explode" divide os termos entre antes do "@" e "$email" que receberá a extensão
$extensao = strtolower ($partesEmail[1]);


//verificação da extensão 

if (in_array($extensao, $extensoesPermitidas)){
    echo "E-mail válido e aceito!";
}
else {
    echo "Domínio (sufixo) não permitido. Aceitamos apenas: " . implode( ", ", $extensoesPermitidas);
}
else {
    echo "Acesso inválido."
}
?>