<?php
    //conexão com o banco de dados
    $conn = new PDO('mysql:host=localhost;dbname=controle_de_acesso', 'root', 'root123');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>