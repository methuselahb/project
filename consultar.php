<!DOCTYPE html>
<html>
    <head>
        <title>Consulta de Registros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/eb083c3e86.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="consultarstyle.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="./img/logo.png" class="logo-img" alt="logo">
            </div>
            <h2>Assembleia de Deus</h2>
            <nav>
                <ul>
                    <li>
                    <a href="cadservico.html">
                    <i class="fa-solid fa-house"></i>
                    Página Inicial
                    </a>
                    </li>
                </ul>
            </nav>
        </header>
            <form class="form_consultar" method="post" action="../controller/svconsultar.php">
                <div class="card">
                <h1>Pesquisa de Membro por CPF</h1>
                    <div class="textfield">
                        <input name="cpf" type="text" id="cpf" size="14" maxlength="60" placeholder="Escreva o CPF"/>
                    </div>
                    <div class="button">
                        <button name="buscar" type="submit"<?php $buscar ?>>Buscar</button> 
                        <button name="limpar" type="reset">Limpar Campos Preenchidos</button>
                    </div>
                </div>  
            </form>
    </body>
</html>
