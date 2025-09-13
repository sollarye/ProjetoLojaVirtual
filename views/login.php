<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to left,rgb(85, 45, 185), #0b0124);
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #e8c283;
            text-align: center;
            font-weight: bold;
            margin-top: 70px;
            margin-bottom: 85px;
        }

        form {
            background-color: #fff;
            border-radius: 28px;
            width: 80%;
            max-width: 700px;
            padding: 20px;
            margin: 30px auto;
            height: 465px;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        #logo {
            background: #fff;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: -70px auto 20px;
            border: 3px solid #e8c283;
        }

        label {
            font-size: 16px;
            font-family:'Open Sans', sans-serif;
            margin-bottom: 10px;
            display: block;
            text-align: left;
            margin-left: 135px;
        }

        input[type="text"],
        input[type="password"] {
            width: 400px;
            height:30px;
            padding: 8px;
            border-radius: 15px;
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
            margin: 30px auto 0;
            display: inline-block;
        }

        input[type="submit"]:hover {
            background-color: #f9cc83ec;
            color: #793e9f;
        }

        a {
            color: #793e9f;
        }

        .footer {
            font-size:12;
            color:#e8c283;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .alert {
            background:#fff;
            border-radius:28px;
            width:400px;
            padding:18px;
            line-height:3em;
            text-align:center;
            margin:100px auto;
            margin-top:60px;
        }

        img {
            width: 10%;
            position:relative;
            margin-right: 15px;
        }

        .container{
            margin: 100px auto;
        }

    </style>
</head>
<body>

<h1>Faça seu login aqui:</h1>

<div id="container">
    <form method="post" action="../process/processo_login.php">
        <img id="logo" src="../logo/logo.png" alt="Logo da Loja">
        <label>E-mail:</label>
        <input type="text" name="email_cliente" placeholder="Digite seu e-mail" required>
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha_cliente" placeholder="Digite sua senha" required>
        <br><br>
        <p>Esqueceu sua senha? <a href="#">Clique aqui para alterá-la</a>.</p>
        <p>Ainda não possui uma conta? <a href="cadastro.php">Clique aqui para se cadastrar</a>.</p>
        <input type="submit" value="Entrar">
    </form>
</div>

<br>

<div class="footer">© By Hemilly e Larissa | 2025</div>

<?php if (isset($_GET['erro'])){ // Exibe uma mensagem de erro caso as credenciais inseridas pelo usuário estiverem incorretas. ?>
    <div class="alert" role="alert">
        <img src="https://cdn-icons-png.flaticon.com/512/564/564619.png">Endereço de e-mail e/ou senha inválido(s). Por favor, digite novamente suas credenciais.
    </div>
<?php } ?>

</body>
</html>
