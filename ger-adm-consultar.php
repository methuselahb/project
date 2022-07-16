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
            
            
        // PASSO 3 - SQL PARA BUSCAR EM TABELAS
            
        $sql = "SELECT * FROM secretario WHERE cpf = '$cpf' ";
        
        $result = $conn->query($sql);
       
        
        
        if ($result->num_rows > 0) {
        // num_rows - dados de saída de cada linha
        while ($row = $result->fetch_assoc()) {

            echo "Código do secretário: " . $row ["codsecre_pk"] . " <br> Nome do secretário: " . $row["nm_sc"] . " <br> CPF: " . $row["cpf"] . " <br> RG: " . $row["rg"] . " <br> CEP: " . $row["cep"] . "<br> Telefone" . $row["tel"] . " <br> E-mail: " . $row["email"] . "<br> Cargo: " . $row["cargo"]  . "<br><br>";
            }
        } else {
            echo "0 resultados encontrados";
        }

         $conn->close();           
    ?>
    </body>
</html>
