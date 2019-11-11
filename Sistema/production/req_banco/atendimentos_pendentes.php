<?php
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT COUNT(cons_cod_consulta) pendentes FROM consulta 
    WHERE stat_cod_status = 3");
    $stmt->execute();
    $dados = $stmt->fetch();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>