<?php
try {
    require('conexao.php');
    $stmt = $conn->prepare("SELECT * FROM especialidade");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>