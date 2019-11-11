<?php 
try {
    session_start();
    require('conexao.php');
    $data = $_POST['dt_paciente'];
    $data = implode("-",array_reverse(explode("/",$data)));
    $_POST['dt_paciente'] = $data;

    $dados_paciente = 'INSERT INTO paciente 
    (paci_nm_paciente, paci_ds_cpf, paci_dt_paciente, paci_ds_sexo, paci_ds_rg, paci_ds_endereco, paci_ds_cep,
    paci_ds_numero, paci_ds_telefone, paci_ds_email, conv_ds_carteira, conv_ds_tipo, conv_dt_validade, conv_cod_convenio)
    VALUES("'.$_POST['nm_paciente'].'", "'.$_POST['ds_cpf'].'","'.$_POST['dt_paciente'].'", "'.$_POST['in_sexo'].'", 
    "'.$_POST['ds_rg'].'", "'.$_POST['ds_endereco'].'",  "'.$_POST['ds_cep'].'", "'.$_POST['num_casa'].'", 
    "'.$_POST['ds_telefone'].'", "'.$_POST['ds_email'].'", "'.$_POST['ds_carteira'].'", "'.$_POST['ds_tipo'].'", "'.$_POST['dt_validade'].'", "'.$_POST['nm_convenio'].'")';
    $stmt = $conn->prepare($dados_paciente);
    $stmt->execute();
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
$_SESSION['paciente_ficha'] = $_POST['nm_paciente'];
if($stmt != 1){
    $_SESSION["msg_erro"]= true;
    header('Location: ../cadastroPaciente.php');
}else{
    $_SESSION['cadastrou_paciente'] = true;
    header('Location: ../ficha_anamnese.php');
}
?>
