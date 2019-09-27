<?php
try {
    require('conexao.php');
    $stmt = $conn->prepare("select * from paciente");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>


