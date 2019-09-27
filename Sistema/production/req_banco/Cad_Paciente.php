<?php 
try {
    session_start();
    require('conexao.php');
    $data = $_POST['dt_paciente'];
    $data = implode("-",array_reverse(explode("/",$data)));
    $_POST['dt_paciente'] = $data;
    //inserção de dados no banco de dados
    $sql = 'INSERT INTO paciente 
    (paci_nm_paciente, paci_ds_cpf, paci_dt_paciente, paci_ds_sexo, paci_ds_rg, paci_ds_endereco, paci_ds_cep,
    paci_ds_numero, paci_ds_telefone, paci_ds_email, paci_ds_convenio)
    VALUES("'.$_POST['nm_paciente'].'", "'.$_POST['ds_cpf'].'","'.$_POST['dt_paciente'].'", "'.$_POST['in_sexo'].'", 
    "'.$_POST['ds_rg'].'", "'.$_POST['ds_endereco'].'",  "'.$_POST['ds_cep'].'", "'.$_POST['ds_numero'].'", 
    "'.$_POST['ds_telefone'].'", "'.$_POST['ds_email'].'", "'.$_POST['ds_convenio'].'")';

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
die();
//condicional para ir para a proxima página
if($stmt == 1){
    $_SESSION["msg_ok"]="Paciente cadastrado com sucesso!";
    header('Location: ../index.php');
}else{
    $_SESSION["msg_erro"]="Cadastro não pode ser realizado, favor entrar em contato com o suporte de TI";
    header('Location: ../cadastroPaciente.php');
};
?>
