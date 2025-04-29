<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Dados do Cliente</title>
    <style>

        body{
            font-family: Arial, sans-serif;
            background-image: url(https://img.freepik.com/premium-photo/light-nature-blue-rough-abstract-background-design_851755-193299.jpg);
            background-size: cover; /*Garante que a imagem de fundo preencha a tela toda*/ 
            background-attachment: fixed; /*Especifica que uma imagem de plano de fundo é fixa e não rola junto com a página*/
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 80%;
            max-width: 400px; /*O contêiner não poderá passar de 400px de largura, mesmo que a janela do navegador seja maior.*/
        }

        h1 {
            color: #333;
        }

        p {
            color: #333;
            font-size: 18px;
        }

        .redirect {
            margin-top: 20px;
            font-size: 15px;
            color: #555;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>E-mail e senha válidos, seja bem vindo(a)!</h1>
    <p class="redirect">Para voltar ao formulário de login, <a href="login.php">clique aqui</a>.</p>
</div>

</body>
</html>