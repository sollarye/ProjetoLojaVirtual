<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "controle";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$query = "SELECT *FROM CLIENTE";
$consulta_dados = mysqli_query($conexao, $query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th> ID do Cliente:</th>
                <th> Nome:</th>
                <th> Data de Nascimento:</th>
                <th> E-mail:</th>
                <th> Senha:</th>
        </tr>
    </thead>
</body>

<?php

    while($linha = mysqli_fetch_array($consulta_dados)){
        echo'<tr>';
            echo'<td>'.$linha['id_cliente'].'</td>';
            echo'<td>'.$linha['nome_cliente'].'</td>';
            echo'<td>'.$linha['data_nasc'].'</td>';
            echo'<td>'.$linha['email_cliente'].'</td>';
            echo'<td>'.$linha['senha_cliente'].'</td>';
        echo'</tr>';
    }
?>
</body>
</html>