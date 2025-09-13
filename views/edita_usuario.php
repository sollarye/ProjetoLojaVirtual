<?php
include '../process/db.php';

$id = $_GET['id'];

// Consulta cliente pelo ID
$query = "SELECT * FROM CLIENTE WHERE id_cliente = $id";
$resultado = mysqli_query($conexao, $query);
$linha = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to left, rgb(85, 45, 185), #0b0124);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            color: #e8c283;
            text-align: center;
            font-weight: bold;
            margin-top: 50px;
        }

        .form-container {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            width: 400px;
            margin: 50px;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 15px;
            border: 1px solid #323131ff;
            font-size: 16px; 
        }

        input[type="submit"] {
            background-color: #f3c780ff;
            color: #793e9f;
            padding: 12px 30px; 
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px; 
            display: block;
            margin: -10px auto 0 auto; /* centraliza horizontalmente */
        }

        input[type="submit"]:hover {
            background-color: #f9cc83ec;
            font-weight: bold;
            color: #793e9f;
        }

        .linkRedirecionamento {
            margin-top: 20px;
            text-align: center;
        }

        .linkRedirecionamento a {
            color: #793e9f;
            font-weight: bold;
        }

    </style>
</head>
<body>

<?php if ($linha) { ?>
    <h1>Editar Dados do Cliente</h1>
    <div class="form-container">
        <form method="post" action="../process/processa_edita_usuario.php">
            <input type="hidden" name="id_cliente" value="<?php echo $linha['id_cliente']; ?>">

            <label>Nome:</label>
            <input type="text" name="nome_cliente" value="<?php echo $linha['nome_cliente']; ?>">

            <label>Data de Nascimento:</label>
            <input type="text" name="data_nasc" value="<?php echo $linha['data_nasc']; ?>">

            <label>E-mail:</label>
            <input type="text" name="email_cliente" value="<?php echo $linha['email_cliente']; ?>">

            <label>Senha:</label><br> <input type="text" name="senha_cliente" value="<?php echo $linha['senha_cliente'] ?>">
            <br><br>

            <input type="submit" value="Editar Dados">
        </form>
<?php } ?>

        <div class="linkRedirecionamento">
            <p><a href="visualizar_dados.php">Voltar à visualização de dados</a></p>
        </div>
    </div>

</body>
</html>
