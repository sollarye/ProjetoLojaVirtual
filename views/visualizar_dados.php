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

    <style>

        body {
            font-family: 'Open Sans', sans-serif;
            background:linear-gradient(to left,rgb(85, 45, 185), #0b0124);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            flex-direction: column;
            height:100vh

        }

        .linkCad{
            font-size: 16px;
            display:flex;
            justify-content:center;
            color: white;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        a{
            color: #e8c283;
            
        }

        #container .tabela{
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .tabela{
            width:95%;
            background:#ffff;
            background:#ffff;
            border-radius:20px;
            padding-left:20px;
            padding-right:20px;
            padding-bottom:20px;
            padding-top:10px;
        }


        thead{
            height:4px;
        }

        th,td{
            padding-left:10px;
            padding-right:5px;
            border-bottom:2px solid rgba(50,0,131,1);
            height:50px;
            width:150px;
            margin-left:20px;
            border-right:2px solid rgba(184, 172, 169, 0.61);
        }

        th{
            width:250px
        }

        h2{
            margin-top:100px;
            width:50%
        }

       
        #nomeTd tr td{
            width:300px;
        }

        #nome{
            width:300px;
        }

        #idCliente{
            width:100px
        }

        .senha{
            border-right:#ffff
        }

        h1 {
            color:#e8c283;
            text-align: center;
            font-weight: bold;
            margin-top: 70px;
        }
        
        .footer{
            font-size:12;
            color:#e8c283;
            text-align: center;
            margin-top: 40px;
        }
        
    </style>

</head>
<body>
   
    <div id="container">  
        <h1>Visualização de Dados Cadastrados</h1>
        <div class='linkCad'>
            <p>Para retornar à página de cadastro, <a href="cadastro.php">clique aqui</a>.</p>
        </div>
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th id="idCliente"> ID do Cliente:</th>
                        <th id="nome"> Nome:</th>
                        <th> Data de Nascimento:</th>
                        <th> E-mail:</th>
                        <th class="senha"> Senha:</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                // Loop que percorre todas as linhas retornadas da consulta
                while($linha = mysqli_fetch_array($consulta_dados)){
                    echo'<tr>';
                        echo'<td id="ClienteID">'.$linha['id_cliente'].'</td>';
                        echo'<td id="nomeTD">'.$linha['nome_cliente'].'</td>';
                        echo'<td>'.$linha['data_nasc'].'</td>';
                        echo'<td>'.$linha['email_cliente'].'</td>';
                        echo'<td class="senha">'.$linha['senha_cliente'].'</td>';
                    echo'</tr>';
                }
                    ?>
                </tbody>
            </TABLE>
        </div>
         
    </div>

    <div class="footer">© By Hemilly e Larissa | 2025</div>

    
</body>
</html>