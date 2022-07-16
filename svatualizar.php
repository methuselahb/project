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
           
            
            $sql = "UPDATE membro SET nm = '$nm', cpf ='$cpf' , rg = '$rg' , cep = '$cep' , uf = '$uf', email = '$email' , conjg = '$conjg' , nacio = '$nacio' , natur = '$natur' , sx = '$sx' , cargo = '$cargo' , cel = '$cel' , ddd = '$ddd' , tel = '$tel' , dtnasc = '$dtnasc' , dtbat = '$dtbat' WHERE cpf = '$cpf';";
            
            if ($conn->query($sql) === TRUE) {
            echo "Realizada a atualização do MEMBRO com Sucesso!";
        } else {
            echo "Erro de atulização:" . $conn->error;
        }

        $conn->close();
        ?>
    </body>
</html>
