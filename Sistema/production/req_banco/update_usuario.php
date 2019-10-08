<?php
try {
    session_start();
    require('conexao.php');
    //inserção de dados no banco de dados
    echo($_POST['cod']);
        
    $stmt = $conn->prepare('UPDATE usuario SET usua_nm_usuario = :usua_nm_usuario,
    usua_dt_usuario = :usua_dt_usuario, usua_in_sexo = :usua_in_sexo, usua_ds_cpf = :usua_ds_cpf, usua_ds_rg = :usua_ds_rg,
    usua_ds_telefone = :usua_ds_telefone, usua_ds_email = :usua_ds_email, usua_ds_cep = :usua_ds_cep, 
    usua_ds_complemento = :usua_ds_complemento, usua_num_Casa = :usua_num_Casa WHERE usua_cod_usuario = "'.$_POST['cod'].'"');
    $stmt->execute(array(
        ':usua_nm_usuario' => $_POST['nome'],
        ':usua_dt_usuario' => $_POST['data'],
        ':usua_in_sexo' => $_POST['sx'],
        ':usua_ds_cpf' => $_POST['cpf'],
        ':usua_ds_rg' => $_POST['rg'],
        ':usua_ds_telefone' => $_POST['tel'],
        ':usua_ds_email' => $_POST['email'],
        ':usua_ds_cep' => $_POST['CEP'],
        ':usua_ds_complemento' => $_POST['comp'],
        ':usua_num_Casa' => $_POST['num']
    ));
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if(isset($stmt)){
    $_SESSION['editado'] = 1;
    header('Location: ../perfilUsuario.php');
}
