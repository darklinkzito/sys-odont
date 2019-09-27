<?php
try {
    require('conexao.php');    
    $stmt = $conn->prepare("select * from paciente WHERE paci_cod_paciente = ".$_POST['id']);
    $stmt->execute();
    $dados = $stmt->fetch();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>