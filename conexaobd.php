<?php
        // LOCALIZAÇÃO DO BANCO DE DADOS
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "church";
        
        //PASSO 1 CONECTAR AO SERVIDOR DE BANCO DE DADOS
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        //PASSO 2 VERIFICAR CONEXÃO COM BD
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        echo "Connected successfully <br>";
        
?>
