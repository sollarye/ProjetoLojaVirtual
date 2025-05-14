
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    nav{
        clear:both;
        height:120px;
        width:100%;
        background:rgb(59, 5, 95);
        padding:5px;
    }

    #logo{
        clear:both;
        height:90px;
        width:90px;
    }

    #menu{
        display:flex;
        align-items:center;
        justify-content:center;
        border:1.2px solid white;
        width:600px;
        height:25px;
        margin-left: 60%;
        

        
        
    }

    li{
        list-style:none;
        display:inline;
        padding:15px;
        text-decoration:none;
    }

    ul{
       
       
    }

    a{
        color:white; 
        font-size:16px;

    }


 </style>
<body>


    <nav>
        <div id="logo">
            <img id="logo" src="../logo/logo.png" alt="Logo da Loja">
         </div>

        <div id="menu">
            <ul>
                <li><a href=#>Perfil</a></li>
                <li><a href=#>Categorias</a></li>
                <li><a href=#>teste</a></li>
            </ul>
        </div>
<!--Caixa de Pesquisa-->
        <div id="caixapesqusia">
             <input type="search" name="pesqusa" id="pesquisa">
        </div>
    </nav>
    
</body>
</html>