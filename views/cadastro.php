<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body {
            font-family:'Open Sans', sans-serif;
            background:linear-gradient(to left,rgb(85, 45, 185), #0b0124);
            margin: 0;
            padding: 0;
        }
       
        h1 {
            color:#e8c283;
            text-align: center;
            font-weight: bold;
            margin-top: 70px;
            margin-bottom: 30px;
        }
 
        form{
            background-color: #fff;
            border-radius: 28px;
            width: 50%;
            max-width: 700px; /*O formulário não pode passar de 500px de largura, mesmo que o contêiner ou a janela do navegador seja maior.*/
            padding: 20px;
            margin: 30px auto;
            height:600px;
            justify-content: center;
            text-align: center;
 
        }
 
        .campo{
            justify-content:left;
            align-items:left;
        }
 
        label{
            font-size: 16;
            font-family:'Open Sans', sans-serif;
            margin-bottom: 10px;
            display: block; /*Garante que cada label ocupe uma linha e empurre o input para baixo.*/
            justify-content: left;
            text-align: left;
            margin-left: 110px;
        }
        
        input[type="date"],
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            align-items:center;
            width: 400px;
            height:30px;
            padding: 8px;
            border-radius: 15px;
        }

        input[type="submit"] {
            background-color: #f3c780ff;
            color: #793e9f;
            padding: 12px 30px; /* Aumentei o padding para dar mais espaço ao botão */
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px; /* Ajustei o tamanho da fonte */
            width: auto; /* Deixei o botão ajustar o tamanho automaticamente com base no conteúdo */
            display: inline-block; /* Melhor controle sobre o tamanho do botão */
            margin: 30px auto 0; /* Mantive a centralização */
            text-align: center; /* Garante que o texto fique centralizado */
        }

        input[type="submit"]:hover {
            background-color: #f9cc83ec;
            font-weight: bold;
            color: #793e9f;
        }
 
        .footer{
            font-size:12;
            color:#e8c283;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        a{
            color: #793e9f;
        }
        
        .nome{
            
        }

        .value{
            text-align: center;
            margin-bottom:10px;
        }

        #logo {
            background: #fff;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: -70px auto 20px;
            border: 3px solid #e8c283;
        }

        .alert {
            background: #fff;
            border-radius: 12px;
            width: 500px;
            padding: 15px;
            text-align: center;
            margin: 20px auto;
            color: black;
            
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alert img {
            width: 40px;
            height: 40px;
            margin-right: 20px;
            margin-left: 5px;
        }


    </style>    
</head>
 
<body>
<h1>Cadastre-se aqui:</h1><br>
<div class="container">
    <form method="post" action="processo_cadastro.php">
        <img id="logo" src="../logo/logo.png" alt="Logo da Loja">
        <label class="nome" >Nome Completo:</label>
        <input type="text" name="nome_cliente" placeholder="Digite o seu nome" required>
        <br><br>
        <label>Data de nascimento:</label>
        <input type="date" name="data_nasc" placeholder="Digite a data" required>
        <br><br>
        <label>E-mail:</label>
        <input type="email" name="email_cliente" placeholder="Digite o seu e-mail" required>
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha_cliente" placeholder="Crie sua senha" required>
        <br><br>
        <p>Já tem uma conta? <a href= "login.php">Clique aqui para entrar.</a></p>
        <input type="submit" value="Cadastrar">
    </form>
</div>
 
<br>
 
<div class="footer">© By Hemilly e Larissa | 2025</div>


<?php if (isset($_GET['erro'])){ // Exibe uma mensagem de erro caso o e-mail inserido pelo usuário for inválido. ?> 
    <div class="alert" role="alert">
        <img src="https://cdn-icons-png.flaticon.com/512/564/564619.png" m>E-mail inválido. Por favor, insira um e-mail válido <br>(gmail.com, outlook.com, hotmail.com, ou yahoo.com).
    </div>
<?php } ?>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>