<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://kit.fontawesome.com/eb083c3e86.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="atualizarstyle.css" type="text/css">
        <title>Atualização de Registro</title>
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
        <form class="form_atual" method="post" action="../controller/svatualizar.php">
            <div class="main-update">
                <div class="card-update">
                <h1>Atualização de Cadastro de Membro</h1>
                <div class="textfield">
                    <label for="nm">Nome</label>
                    <input type="text" name="nm" placeholder="Nome completo">
                </div>
                <div class="textfield">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" placeholder="Seu CPF">
                </div>
                <div class="textfield">
                    <label for="rg">RG</label>
                    <input type="text" name="rg" placeholder="Seu RG">
                </div>
                <div class="textfield">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" placeholder="Seu CEP">
                </div>
                <div class="textfield">
                    <label for="uf">Unidade Federativa</label>
                    <input type="text" name="uf" placeholder="UF">
                </div>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail">
                </div>
                <div class="textfield">
                    <label for="conjg">Cônjuge</label>
                    <input type="text" name="conjg" placeholder="Nome do cônjuge">
                </div>
                <div class="textfield">
                    <label for="nacio">Nacionalidade</label>
                    <input type="text" name="nacio" placeholder="Nacionalidade">
                </div>
                <div class="textfield">
                    <label for="natur">Naturalidade</label>
                    <input type="text" name="natur" placeholder="Naturalidade">
                </div>
                <div class="option">
                    <label>Gênero</label><br>
                    <input type="radio" name="sx" value="Masculino">
                    <label for="Masculino">Masculino</label><br>
                    <input type="radio" name="sx" value="Feminino">
                    <label for="Feminino">Feminino</label>
                </div>
                <div class="textfield">
                    <label for="cargo">Cargo</label>
                    <input type="text" name="cargo" placeholder="Cargo">
                </div>
                <div class="textfield">
                    <label for="cel">Celular</label>
                    <input type="tel" name="cel" placeholder="Celular">
                </div>
                <div class="textfield">
                    <label for="ddd">DDD</label>
                    <input type="number" name="ddd" min="0" max="99">
                </div>
                <div class="textfield">
                    <label for="tel">Telefone</label>
                    <input type="tel" name="tel" placeholder="Telefone">
                </div>
                <div class="textfield">
                    <label for="dtnasc">Data Nascimento</label>
                    <input type="date" name="dtnasc">
                </div>
                <div class="textfield">
                    <label for="dtbat">Data Batismo</label>
                    <input type="date" name="dtbat">
                </div>
                    <div class="button">
                        <button name="atualizar" type="submit"<?php $atualizar ?>>Atualizar</button> 
                        <button name="limpar" type="reset">Limpar Campos Preenchidos</button>
                    </div>
                </div>
            </div>
        </form>



        <!--
                <script type="text/javascript">
                    function validaCampo()
                    {
                        if (document.cadastrocliente.nomecli.value == "")
                        {
                            alert("O Campo NOME é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.cpf.value == "")
                        {
                            alert("O Campo CPF é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.tel.value == "")
                        {
                            alert("O Campo TELEFONE  é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.dtnasc.value == "")
                        {
                            alert("O Campo Data de Nascimento é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.email.value == "")
                        {
                            alert("O Campo E-mail é obrigatório!");
                            return false;
                            console.log('Executando');
                        } else
        
                        if (document.cadastrocliente.ender.value == "")
                        {
                            alert("O Campo Endereço é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.bairro.value == "")
                        {
                            alert("O Campo Bairro é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.cidade.value == "")
                        {
                            alert("O Campo Cidade é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.cep.value == "")
                        {
                            alert("O Campo CEP é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.pais.value == "")
                        {
                            alert("O Campo PAÍS é obrigatório!");
                            return false;
                        } else
                            return true;
                    }
        <!-- Fim do JavaScript que validará os campos obrigatórios -->
    </body>
</html>
