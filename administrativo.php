<?php session_start(); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/eb083c3e86.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../view/servicostyle.css" type="text/css">
        <title>Serviços</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="../view/img/logo.png" class="logo-img" alt="logo">
            </div>
            <h2 class="title">Assembleia de Deus</h2>
            <nav class="topnav">
                <ul>
                    <li class="li">
                    <a href="../model/administrativo.php" class="home-link">
                    <i class="fa-solid fa-house"></i>
                    Página Inicial
                    </a>
                    </li>
                    <li class="li">
                    <a href="sair.php" class="home-link">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Sair
                    </a>
                    <?php echo "    Usuario: ". $_SESSION['usuarioNome'];?>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <h1>Serviços</h1>
            <div class="linha">
                <div class="servico">
                    <a href="../view/cadmembro.html" class="fill-div">
                    <i class="fa-solid fa-user"></i>
                    <h2>Cadastrar Membro</h2>
                    <p>Criar registro de novo membro</p>
                    </a>
                </div>
                <div class="servico">
                    <a href="../view/consultar.php" class="fill-div">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <h2>Consultar Cadastro</h2>
                    <p>Ler todos os registros</p>
                    </a>
                </div>
                <div class="servico">
                    <a href="../view/atualizar.php" class="fill-div">
                    <i class="fa-solid fa-arrows-rotate"></i>
                    <h2>Atualizar Cadastro</h2>
                    <p>Alterar dados de um registro</p>
                    </a>
                </div>
                <div class="servico">
                    <a href="../view/excluir.php" class="fill-div">
                    <i class="fa-solid fa-ban"></i>
                    <h2>Excluir Cadastro</h2>
                    <p>Deletar registro de membro</p>
                    </a>
                </div>
                <div class="servico">
                    <a href="../view/cadsecretario.html" class="fill-div">
                    <i class="fa-solid fa-user-lock"></i>
                    <h2>Cadastrar Secretário</h2>
                    <p>Cadastrar administrador do sistema</p>
                    </a>
                </div>
                <div class="servico">
                    <a href="../view/gerenciaradm.php" class="fill-div">
                    <i class="fa-solid fa-users-gear"></i>
                    <h2>Gerenciar Secretaria</h2>
                    <p>Gerir registros de administradores</p>
                    </a>
                </div>
                <div class="servico">
                    <a href="#" class="fill-div">
                    <i class="fa-solid fa-id-card"></i>
                    <h2>Imprimir Identidade</h2>
                    <p>Imprimir credencial institucional</p>
                    </a>
                </div>
            </div>
            
        </div>
    </body>
</html>
