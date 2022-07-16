<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include_once '../controller/conexaobd.php';
        
        $cpf = $_POST ["cpf"];
       

        //SQL PARA DELETAR EM TABELAS
        $sql = "DELETE FROM membro WHERE cpf = '$cpf';";
        
        if ($conn->query($sql) === TRUE){
            echo "Exclusão de cadastro do MEMBRO realizada com sucesso.";
        } else {
            "Erro de exclusão: " . $conn->error;
        }
        $conn->close();
        ?>
    </body>
</html>
