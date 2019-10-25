<?php
//pegando os valores da telalogin 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
try {
    require('conexao.php');    
    $stmt = $conn->prepare("select * from usuario where usua_nm_usuario = '$usuario' and usua_nm_senha = '$senha'");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
foreach ($dados as $value) { 
    $id = $value['usua_cod_usuario'];
    $nome = $value['usua_nm_usuario'];
    $perfil = $value['perf_cod_perfil'];
};

session_start();
$_SESSION['usuario_id']= $id;
$_SESSION['usuario_nome']= $nome;
$_SESSION['usuario_perfil']= $perfil;
$_SESSION['editado']= 0;
if (isset($dados[0])){
    header('Location: ../index.php'); 
}else{
    session_destroy();
    header('Location: ../login.php');
}
?>