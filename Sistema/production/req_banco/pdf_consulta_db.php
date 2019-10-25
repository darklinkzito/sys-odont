<?php
if($_POST == null){
    header('Location: ../relatorio_de_consultas.php'); 
}else{
try {
    require('conexao.php');
    $stmt = $conn->prepare("SELECT * FROM paciente INNER JOIN consulta 
    ON paciente.paci_cod_paciente = consulta.paci_cod_paciente");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>