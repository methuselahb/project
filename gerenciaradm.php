<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://kit.fontawesome.com/eb083c3e86.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="gerenciaradmstyle.css" type="text/css">
        <title>Gerenciador de Administradores</title>
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
        <form class="form_consultar" method="post" action="../controller/ger-adm-consultar.php">
                <div class="card">
                <h1 class="title">Pesquisa de Secretário por CPF</h1>
                    <div class="textfield">
                        <input name="cpf" type="text" id="cpf" size="14" maxlength="60" placeholder="Escreva o CPF"/>
                    </div>
                    <div class="button">
                        <button name="buscar" type="submit"<?php $buscar ?>>Buscar</button> 
                        <button name="limpar" type="reset">Limpar Campos Preenchidos</button>
                    </div>
                </div>  
            </form>
            <form class="form_exc" method="post" action="../controller/ger-adm-exc.php">
                <div class="card">
                <h1 class="title">Exclusão de Cadastro de Secretário por CPF</h1>
                    <div class="textfield">
                        <input name="cpf" type="text" id="cpf" size="14" maxlength="60" placeholder="Escreva o CPF"/>
                    </div>
                    <div class="button">
                        <button name="excluir" type="submit"<?php $buscar ?>>Excluir</button> 
                        <button name="limpar" type="reset">Limpar Campos Preenchidos</button>
                    </div>
                </div>  
            </form>
        <form class="form_atual" method="post" action="../controller/gr-adm-atualizar.php">
                <div class="card">
                <h1 class="title">Atualização de Cadastro de Secretário</h1>
                <div class="textfield">
                    <label for="nm_sc"></label>
                    <input type="text" name="nm_sc" placeholder="Nome completo">
                </div>
                <div class="textfield">
                    <label for="cpf"></label>
                    <input type="text" name="cpf" placeholder="Seu CPF">
                </div>
                <div class="textfield">
                    <label for="rg"></label>
                    <input type="text" name="rg" placeholder="Seu RG">
                </div>
                <div class="textfield">
                    <label for="cep"></label>
                    <input type="text" name="cep" placeholder="Seu CEP">
                </div>
                <div class="textfield">
                    <label for="tel"></label>
                    <input type="tel" name="tel" placeholder="Telefone">
                </div>
                <div class="textfield">
                    <label for="email"></label>
                    <input type="email" name="email" placeholder="E-mail">
                </div>
                <div class="textfield">
                    <label for="cargo"></label>
                    <input type="text" name="cargo" placeholder="Cargo">
                </div>
                <div class="button">
                    <button name="atualizar" type="submit"<?php $atualizar ?>>Atualizar</button> 
                    <button name="limpar" type="reset">Limpar Campos Preenchidos</button>
                </div>
                </div>
        </form>
    </body>
</html>
