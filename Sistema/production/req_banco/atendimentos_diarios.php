<?php
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT COUNT(cons_cod_consulta) contagem FROM consulta WHERE cons_dt_consulta = CURDATE()");
    $stmt->execute();
    $dados = $stmt->fetch();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>