<?php
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT COUNT(cons_cod_consulta) fechados FROM consulta 
    WHERE cons_dt_consulta = CURDATE() AND stat_cod_status = 2");
    $stmt->execute();
    $dados = $stmt->fetch();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>