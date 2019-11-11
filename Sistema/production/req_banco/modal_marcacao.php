<?php
try {
    $id = $_POST['id'];
    require('conexao.php');
    $stmt = $conn->prepare("SELECT * FROM consulta INNER JOIN paciente 
    ON consulta.paci_cod_paciente = paciente.paci_cod_paciente INNER JOIN profissional 
    ON consulta.prof_cod_profissional = profissional.prof_cod_profissional INNER JOIN status_consulta
    ON consulta.stat_cod_status = status_consulta.stat_cod_status
    WHERE consulta.cons_cod_consulta = $id ");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>
