<?php
try {
    session_start();
    require('conexao.php');
    $data = $_POST['data'];
    $data = implode("-",array_reverse(explode("/",$data)));
    $_POST['data'] = $data;
    //inserção de dados no banco de dados        
    $stmt = $conn->prepare('UPDATE paciente SET paci_nm_paciente = :paci_nm_paciente,
    paci_dt_paciente = :paci_dt_paciente, paci_ds_sexo = :paci_ds_sexo, 
    paci_ds_cpf = :paci_ds_cpf, paci_ds_rg = :paci_ds_rg, paci_ds_telefone = :paci_ds_telefone,
    paci_ds_email = :paci_ds_email, paci_ds_cep = :paci_ds_cep, paci_ds_numero = :paci_ds_numero
    WHERE paci_cod_paciente = "'.$_POST['cod'].'"');
    $stmt->execute(array(
        ':paci_nm_paciente' => $_POST['nome'],
        ':paci_dt_paciente' => $_POST['data'],
        ':paci_ds_sexo' => $_POST['sx'],
        ':paci_ds_cpf' => $_POST['cpf'],
        ':paci_ds_rg' => $_POST['rg'],
        ':paci_ds_telefone' => $_POST['tel'],
        ':paci_ds_email' => $_POST['email'],
        ':paci_ds_cep' => $_POST['CEP'],
        ':paci_ds_numero' => $_POST['num']
    ));
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if(isset($stmt)){
    $_SESSION['paciente_editado'] = true;
    header('Location: ../perfilPaciente.php');
}
