<?php
// session_start();
//pegando os valores da telalogin 

try {
    require('conexao.php');    
    $stmt = $conn->prepare("select * from usuario ");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>
