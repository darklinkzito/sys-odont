<?php
// session_start();
//pegando os valores da telalogin 

try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT * FROM usuario INNER JOIN perfil WHERE usuario.perf_cod_perfil = perfil.perf_cod_perfil ");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>
