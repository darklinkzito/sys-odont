<?php
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT * FROM usuario INNER JOIN perfil ON usuario.perf_cod_perfil = perfil.perf_cod_perfil WHERE usua_cod_usuario = ".$_POST['id']);
    $stmt->execute();
    $dados = $stmt->fetch();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>