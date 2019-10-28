<?php
session_start();
if($_POST == null){
    header('Location: ../relatorio_de_tratamentos.php'); 
}else{
    $id_paciente = $_POST['paciente'];
    $nm_profissional = $_POST['dentista'];
    $data_consulta = $_POST['data'];
try {
    require('conexao.php');
    $stmt = $conn->prepare("SELECT * FROM paciente INNER JOIN consulta 
    ON paciente.paci_cod_paciente = $id_paciente INNER JOIN profissional 
    ON consulta.prof_cod_profissional = profissional.prof_cod_profissional
    ");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
foreach($dados as $value){
    $nome = $value['paci_nm_paciente'];
    $data = $value['cons_dt_consulta'];
    $profissional = $value['prof_nm_profissional'];
}
if($data != $data_consulta OR $profissional != $nm_profissional){
    $_SESSION['dados_invalidos'] = 1;
    header('Location: ../relatorio_de_tratamentos.php');
}else{
$_SESSION['nome'] = $nome;
$_SESSION['data'] = $data;
$_SESSION['profissional'] = $profissional;
}
?>