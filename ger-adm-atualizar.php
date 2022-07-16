<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../controller/conexaobd.php';
        
        //RECEBENDO OS DADOS DO FORMULÁRIO FRONT END
            
        
            $cpf = $_POST ["cpf"];
           
            
            $sql = "UPDATE secretario SET nm_sc = '$nm_sc', cpf ='$cpf' , rg = '$rg' , cep = '$cep' ,  tel = '$tel' , email = '$email' , cargo = '$cargo' WHERE cpf = '$cpf' ";
            
            if ($conn->query($sql) === TRUE) {
            echo "Realizada a atualização do SECRETÁRIO com Sucesso!";
        } else {
            echo "Erro de atulização:" . $conn->error;
        }

        $conn->close();
        ?>
    </body>
</html>
