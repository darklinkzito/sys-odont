<?php
session_start();
//pegando os valores da telalogin 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
try {
    require('conexao.php');    
    $stmt = $conn->prepare("select * from usuario where usua_nm_usuario = '$usuario' and usua_nm_senha = '$senha'");
    $stmt->execute();
    $linha = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($linha[0])){
    $_SESSION["msg_ok"]=2;
    header('Location: ../index.php');
}else{
    $_SESSION["msg_erro"]= 1;
    header('Location: ../login.php');
}
?>