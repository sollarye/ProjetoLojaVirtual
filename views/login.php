<style>

body {
    font-family:'Open Sans', sans-serif;
    background-color:#793e9f;
    margin: 0;
    padding: 0;
}

h1 {
    color:#e8c283;
    text-align: center;
    font-weight: bold;
    margin-top: 70px;
}

form{
    clear:both;
    background-color: #fff;
    border-radius: 28px;
    width: 60%;
    max-width: 500px; /*O formulário não pode passar de 500px de largura, mesmo que o contêiner ou a janela do navegador seja maior.*/
    padding: 20px;
    margin: 30px auto;
    height:400px;
    justify-content: center;
    text-align: center;

}

#logo{
    background:#793e9f;
    width:100px;
    height:100px;
    border: 1px solid red;
    border-radius: 100%;
    float:left;
    position: relative;
    bottom:60px;
    left:40%;
   
}

.campo{
    justify-content:left;
    align-items:left;
}

label{
    clear:both;
    font-size: 16;
    font-family:'Open Sans', sans-serif;
    margin-bottom: 10px;
    display: block; /*Garante que cada label ocupe uma linha e empurre o input para baixo.*/
    justify-content: left;
    text-align: left;
    margin-left: 45px;
   
}

input[type="text"],
input[type="password"] {
    clear:both;
    align-items:center;
    width: 400px;
    height:30px;
    padding: 8px;
    border-radius: 15px;
}

input[type="submit"]{
    clear:both;
    background-color:  #fcbf5b;
    color: #793e9f;
    padding: 10px 15px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    width: 250px;
    height:30px;
    font-weight: bold;
    font-size: 14px;
    display: block; /* Garante que o botão seja tratado como um bloco */
    margin: 40px auto 0; /* Centraliza o botão com margem superior de 30px */
}

input[type="submit"]:hover {
    background-color: #e8c283;
    font-weight: bold;
    color: #793e9f;
}


.footer{
    font-size:12;
    color:#e8c283;
    text-align:center;
}

a{
    color: #793e9f;
}

.value{
    text-align: center;
    margin-bottom:10px;
}

.alert{
    background:#fff;
    border-radius:28px;
    width:400px;
    padding:18px;
    line-height:3em;
    text-align:center;
    margin:100px auto;
}

#container{
    margin-top: 75px;
}

img{
    width: 10%;
    position:relative;
    right:20px;
    top:12px;
  
}
</style>

<h1>Faça login aqui!</h1>

<div id="container">
    <form method="post" action="../process/processo_login.php">
        <div id="logo"></div>
        <label>E-mail:</label><br>
        <input type="text" name="email_cliente" placeholder="Digite seu e-mail" required>
        <br><br>
        <label>Senha:</label><br>
        <input type="password" name="senha_cliente" placeholder="Digite sua senha" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>
</div>

<br>

<div class="footer">© By Hemilly e Larissa</div>

<?php if (isset($_GET['erro'])){ ?>
    <div class="alert" role="alert">
        <img src="https://cdn-icons-png.flaticon.com/512/564/564619.png">Endereço de e-mail e/ou senha inválido(s).
    </div>
<?php } ?>