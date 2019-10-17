<?php
$id = $_SESSION['usuario_id'];
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE usuario.usua_cod_usuario = $id");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>