<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include_once 'conexaobd.php';
        
        //RECEBENDO OS DADOS DO FORMULÁRIO FRONT END
            
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $senha = md5($senha);
            //$cosenha = $_POST["cosenha"];
            
        
        // SQL PARA INSERIR DADOS NA TABELA ESPECÍFICA
           $sql = "INSERT INTO usuario (nome,email,senha)
                   VALUE ('$nome','$email','$senha');";
           if ($conn->query($sql) === TRUE){
               echo "Registro de USUÁRIO realizado com sucesso.";
           } else {
               "Erro: " . $sql . "<br>" . $conn->error;           
           }
           echo "<br>";
           $conn->close();
        ?>
    </body>
</html>
