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
            
        $sql = "SELECT * FROM membro WHERE cpf = '$cpf' ";
        
        $result = $conn->query($sql);
       
        
        
        if ($result->num_rows > 0) {
        // num_rows - dados de saída de cada linha
        while ($row = $result->fetch_assoc()) {

            echo "Código do membro: " . $row ["codmem_pk"] . " <br> Nome do membro: " . $row["nm"] . " <br> CPF: " . $row["cpf"] . " <br> RG: " . $row["rg"] . " <br> CEP: " . $row["cep"] . " <br> UF: " . $row["uf"] . " <br> E-mail: " . $row["email"] . " <br> Cônjuge: " . $row["conjg"] . " <br> Nacionalidade: " . $row["nacio"] . " <br> Naturalidade: " . $row["natur"] . "<br> Sexo: " . $row["sx"] . "<br> Cargo: " . $row["cargo"] . "<br> Celular: " . $row["cel"] . "<br> DDD: " . $row["ddd"] . "<br> Telefone" . $row["tel"] . "<br> Data Nascimento: " . $row["dtnasc"] . "<br> Data Batismo: " . $row["dtbat"] . "<br><br>";
            }
        } else {
            echo "0 resultados encontrados";
        }

         $conn->close();           
        ?>
    </body>
</html>




            <!--
                 $result = mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $nm=$row["nm"];
                    $cpf=$row["cpf"];
                    $rg=$row["rg"];
                    $cep=$row["cep"];
                    $uf=$row["uf"];
                    $email=$row["email"];
                    $conjg=$row["conjg"];
                    $nacio=$row["nacio"];
                    $natur=$row["natur"];
                    $sx=$row["sx"];
                    $cargo=$row["cargo"];
                    $cel=$row["cel"];
                    $ddd=$row["ddd"];
                    $tel=$row["tel"];
                    $dtnasc=$row["dtnasc"];
                    $dtbat=$row["dtbat"];
                    echo '<tr>
                        <th scope="row">'.$codmem_pk.'</th>
                        <td>'.$nm.'</td>
                        <td>'.$cpf.'</td>
                        <td>'.$rg.'</td>
                        <td>'.$cep.'</td>
                        <td>'.$uf.'</td>
                        <td>'.$email.'</td>
                        <td>'.$conjg.'</td>
                        <td>'.$nacio.'</td>
                        <td>'.$natur.'</td>
                        <td>'.$sx.'</td>
                        <td>'.$cargo.'</td>
                        <td>'.$cel.'</td>
                        <td>'.$ddd.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$dtnasc.'</td>
                        <td>'.$dtbat.'</td>
                    </tr>';
                }
               
            }

        -->