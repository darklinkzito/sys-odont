<?php
//pegando os valores da telalogin 
$usuario = $_POST['cpf'];
$senha = $_POST['senha'];
try {
    require('conexao.php');    
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE usua_ds_cpf = '$usuario' AND usua_nm_senha = '$senha'");
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
$_SESSION['dados_invalidos'] = 0;
$_SESSION['Senha Alterada!'] = 0;
$_SESSION['Nao_alterada'] = 0;
$_SESSION['ficha_cadastrada'] = false;
$_SESSION['ficha_nao_cadastrada'] = false;
$_SESSION['cadastrou_paciente'] = false;
$_SESSION["especialidade"]= false;
if (isset($dados[0])){
    header('Location: ../index.php'); 
}else{

    $_SESSION['login_invalido']= true;
    header('Location: ../login.php');
}
?>