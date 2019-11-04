<?php
session_start();
$id = $_SESSION['usuario_id'];
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE usua_cod_usuario =  $id");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
foreach($dados as $value){
    $senha_antiga = $value['usua_nm_senha'];
}
if($senha_antiga == $_POST['senha_antiga']){
        try {
            require('conexao.php');
            $stmt = $conn->prepare('UPDATE usuario SET usua_nm_senha = :usua_nm_senha 
            WHERE usua_cod_usuario = "'.$_SESSION['usuario_id'].'" ');
            $stmt->execute(array(
                ':usua_nm_senha' => $_POST['senha_nova'],
            ));
            echo $stmt->rowCount();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        if (isset($stmt)) {
            echo("senha alterada");
            die();
            $_SESSION['Senha Alterada!'] = 1;
            header('Location: ../mod_senha.php');
        }
}else{
    $_SESSION['Nao_alterada'] = 1;
    header('Location: ../mod_senha.php');
}
?>
