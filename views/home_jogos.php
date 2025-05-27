
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

<!--CSS e BOOTSTRAP-->


</head>
<style>
body{
    margin:0;
    padding:0;
    font-family:'Open Sans', sans-serif;
}

nav{
    background:rgb(85, 45, 185);
    height:150px;
    padding:0 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.nav-item{
    display:flex;
    align-items:center;
}

#arealogo img{
    height:110px;
    width:auto;
}

#menu{
    background: rgba(42, 9, 124, 0.4);
    border:2px solid rgb(32, 10, 87);
    border-radius:30px;
    height:30px;
    width:30%;
    padding:10px 20px;
    margin-left:145px;
    display:flex;
    justify-content:center;
    align-items:center;
}

#menu ul{
    display:flex;
    gap:20px;
    list-style:none;
    padding:0;
    margin:0;
    font-size:22px
}

#menu ul li a{
    color:#ede3a8;
    text-decoration:none;
    font-weight:bold;
}

#pesquisa{
    width:300px;
    height:30px;
    border-radius:30px;
    padding:18px;
    font-size: 14px;
    margin-right: 15px;
}

 </style>
<body>


    <nav>
        <div  class="nav-item" id="arealogo">
            <img src="../logo/logo.png" alt="Logo da Loja">
         </div>

        <div class="nav-item" id="menu">
            <ul>
                <li><a href=#>Perfil</a></li>
                <li><a href=#>Categorias</a></li>
                <li><a href=#>teste</a></li>
            </ul>
        </div>
<!--Caixa de Pesquisa-->
        <div class="nav-item" id="caixapesquisa">
             <input type="search" name="pesqusa" id="pesquisa" placeholder="Pesquise por algum Jogo ou Produto">
        </div>
    </nav>
    
</body>
</html>