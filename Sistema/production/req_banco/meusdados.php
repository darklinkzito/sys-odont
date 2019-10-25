<?php
$id = $_SESSION['usuario_id'];
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT * FROM usuario INNER JOIN funcao 
    ON usuario.func_cod_funcao = funcao.func_cod_funcao WHERE usuario.usua_cod_usuario = $id");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>