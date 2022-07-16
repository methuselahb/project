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
        
            $nm_sc = $_POST["nm_sc"];
            $cpf = $_POST["cpf"];
            $rg = $_POST["rg"];
            $cep =  $_POST["cep"];
            $tel = $_POST["tel"];
            $email = $_POST["email"];
            $cargo = $_POST["cargo"];
            

        // SQL PARA INSERIR DADOSDO DO FRONT END NA TABELA ESPECÍFICA DO BANCO DE DADOS
           $sql = "INSERT INTO secretario (nm_sc,cpf,rg,cep,tel,email,cargo)
                   VALUE ('$nm_sc','$cpf','$rg','$cep','$tel','$email','$cargo');";
           
           if ($conn->query($sql) === TRUE){
               echo "Registro de SECRETARIO realizado com sucesso.";
           } else {
               "Error: " . $sql . "<br>" . $conn->error;
           }
           echo "<br>";
           $conn->close();
        ?>
    </body>
</html>
