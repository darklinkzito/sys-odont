<?php
try {
    require('conexao.php');
    $stmt = $conn->prepare("SELECT * FROM convenio");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>