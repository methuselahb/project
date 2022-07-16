<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Matheus Bernardino">
    <link href="loginstyle.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="img/logo.png">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./img/logo.png" class="logo-img" alt="logo">
        </div>
        <h2 class="title">Assembleia de Deus</h2>
    </header>
    <form  method="POST" action="../model/valida.php">
    <div class="main-login">
        <div class="card-login">
            <h1>Login</h1>
            <div class="textfield">                    
                    <label for="usuario"></label>
                    <input type="email" placeholder="E-mail" name="email" required>
            </div>       
            <div class="textfield">    
                    <label for="senha"></label>
                    <input type="password" placeholder="Senha" name="senha" required>
            </div>
            <button class="btn-login" type="submit"><b>Acessar</b></button>
            <div class="redirect">
                <span class="link"><a href="#">Esqueci Senha/E-mail</a></span>
                <span class="link"><a href="logincad.php">Meu Primeiro Acesso</a></span>
            </div>
        </div>
    </div>
    </form>
	    <!--Recuperando o valor da variável global, os erros de login.-->
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
			
		<!--Recuperando o valor da variável global, deslogado com sucesso.-->
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
</body>
</html>