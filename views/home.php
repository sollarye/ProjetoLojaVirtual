<h1>Bem-Vindo</h1>

<form method="post" action="login.php">
    <label>Digite o e-mail</label><br>
    <input type="text" name="email_cliente" placeholder="E-mail">
    <br><br>
    <label>Digite a senha</label><br>
    <input type="password" name="senha_cliente" placeholder="Senha">
    <br><br>
    <input type="submit" value="Entrar">
</form>
<br>

<?php if (isset($_GET['erro'])){ ?>
    <div class="alert" role="alert">
        Endereço de e-mail e/ou senha inválido(s).
    </div>
<?php } ?>