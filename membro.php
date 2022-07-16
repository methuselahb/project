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
            
            $nm = $_POST["nm"];
            $cpf = $_POST["cpf"];
            $rg = $_POST["rg"];
            $cep =  $_POST["cep"];
            $uf = $_POST["uf"];
            $email = $_POST["email"];
            //$ft = $_POST["ft"];
            $conjg = $_POST["conjg"];
            $nacio = $_POST["nacio"];
            $natur = $_POST["natur"];
            $sx = $_POST["sx"];
            $cargo = $_POST["cargo"];
            $cel = $_POST["cel"];
            $ddd = $_POST["ddd"];
            $tel = $_POST["tel"];
            $dtnasc = $_POST["dtnasc"];
            $dtbat = $_POST["dtbat"];
            //$senha = $_POST["senha"];
            //$cosenha = $_POST["cosenha"];
            
        
        // SQL PARA INSERIR DADOS NA TABELA ESPECÍFICA
           $sql = "INSERT INTO membro (nm,cpf,rg,cep,uf,email,conjg,nacio,natur,sx,cargo,cel,ddd,tel,dtnasc,dtbat)
                   VALUE ('$nm','$cpf','$rg','$cep','$uf','$email','$conjg','$nacio','$natur','$sx','$cargo','$cel','$ddd','$tel','$dtnasc','$dtbat');";
           if ($conn->query($sql) === TRUE){
               echo "Registro de MEMBRO realizado com sucesso.";
           } else {
               "Erro: " . $sql . "<br>" . $conn->error;           
           }
           echo "<br>";
           $conn->close();
        ?>
    </body>
</html>
