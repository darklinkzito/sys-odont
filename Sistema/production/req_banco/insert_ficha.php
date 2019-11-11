<?php

session_start();
try {
    require('conexao.php');
    $dados_ficha = 'INSERT INTO ficha_anamnese (fian_in_medicamento, fian_in_problema, fian_in_acompanhamento,
     fian_in_alergia, fian_in_hemorragia, fian_in_fumante, fian_in_habitos, fian_in_higiene, fian_in_dentista,
     fian_in_higiene_crianca, fian_in_alimentacao_crianca, fian_in_chupeta, fian_in_pressao, fian_dt_pressao, 
     fian_in_bpm, fian_dt_bpm)
    VALUES("'.$_POST['medicamento'].'", "'.$_POST['problema'].'", "'.$_POST['acompanhamento'].'", 
    "'.$_POST['alergia'].'", "'.$_POST['hemorragia'].'", "'.$_POST['fumante'].'", "'.$_POST['habitos'].'", "'.$_POST['higiene'].'", "'.$_POST['dentista'].'", 
    "'.$_POST['higiene_crianca'].'", "'.$_POST['alimentacao_crianca'].'", "'.$_POST['chupeta'].'", "'.$_POST['pressao'].'", "'.$_POST['dt_pressao'].'", 
    "'.$_POST['bpm'].'", "'.$_POST['dt_bpm'].'")';
    $stmt = $conn->prepare($dados_ficha);
    $stmt->execute();
    echo $stmt->rowCount();
   
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
try {
    require('conexao.php');
    $stmt = $conn->prepare("SELECT MAX(fian_cod_ficha_anamnese) as fian_cod_ficha_anamnese FROM ficha_anamnese");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
foreach($dados as $value){
    $value['fian_cod_ficha_anamnese'];
}
$_SESSION['id_ficha'] = $value['fian_cod_ficha_anamnese'];
$ficha = $_SESSION['id_ficha'];
try {
    $paci = $_SESSION['paciente_ficha'];
    require('conexao.php');
    //inserção de dados no banco de dados        
    $stmt = $conn->prepare('UPDATE paciente SET fian_cod_ficha_anamnese = :fian_cod_ficha_anamnese WHERE paci_nm_paciente = "'.$paci.'" ');
    $stmt->execute(array(
        ':fian_cod_ficha_anamnese' => $ficha
    ));
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if(isset($dados_ficha)){
    $_SESSION['ficha_cadastrada'] = true;
    header('Location: ../cadastroPaciente.php');
}else{
    $_SESSION['ficha_nao_cadastrada'] = true;
    header('Location: ../cadastroPaciente.php');
}

?>