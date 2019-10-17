<?php
$id = $_SESSION['usuario_id'];
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT * FROM usuario INNER JOIN perfil 
    ON usuario.perf_cod_perfil = perfil.perf_cod_perfil WHERE usuario.usua_cod_usuario = $id");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>