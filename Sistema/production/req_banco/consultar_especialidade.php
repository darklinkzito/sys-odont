<?php
try {
    require('conexao.php');
    $stmt = $conn->prepare("SELECT c.espe_cod_especialidade codigo, c.espe_nm_especialidade nome 
                            FROM profissional_especialidade a 
                            INNER JOIN profissional b ON b.prof_cod_profissional = a.pres_profissional 
                            INNER JOIN especialidade c ON c.espe_cod_especialidade = a.pres_especialidade 
                            WHERE b.prof_cod_profissional = ".$_POST['dentista']);
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>


