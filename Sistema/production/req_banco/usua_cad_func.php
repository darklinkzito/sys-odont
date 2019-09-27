<?php
try {
    session_start();
    require('conexao.php');
    $data = $_POST['dt_usuario'];
    $data = implode("-",array_reverse(explode("/",$data)));
    $_POST['dt_usuario'] = $data;
    //inserção de dados no banco de dados
    $sql = 'INSERT INTO usuario 
    (usua_nm_usuario, usua_ds_cpf, usua_ds_rg, usua_dt_usuario, usua_in_sexo, usua_ds_cep, 
    usua_ds_endereco, usua_ds_complemento, usua_num_Casa, usua_ds_telefone, usua_ds_email, perf_cod_perfil)
    VALUES("'.$_POST['nm_usuario'].'", "'.$_POST['ds_cpf'].'", "'.$_POST['ds_rg'].'", "'.$_POST['dt_usuario'].'",
    "'.$_POST['in_sexo'].'", "'.$_POST['ds_cep'].'", "'.$_POST['ds_endereco'].'", 
    "'.$_POST['ds_complemento'].'", "'.$_POST['num_casa'].'", "'.$_POST['ds_telefone'].'", "'.$_POST['ds_email'].'", "'.$_POST['perfil'].'")';
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
die();
//condicional para ir para a proxima página
if ($stmt == 1) {
    $_SESSION["msg_ok"] = "Cadastro realizado com sucesso!";
    header('Location: ../index.php');
} else {
    $_SESSION["msg_erro"] = "Cadastro não pode ser realizado, favor entrar em contato com o suporte de TI";
    header('Location: cadastroFuncionario.php');
};
