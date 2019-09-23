<?php 
try {
    session_start();
    require('conexao.php');
    //inserção de dados no banco de dados
    $stmt = $conn->prepare('INSERT INTO usuario (
    usua_nm_usuario,
    usua_ds_cpf,
    usua_ds_rg,
    usua_dt_nascimento,
    usua_in_sexo,
    usua_ds_cep,
    usua_ds_endereco,
    usua_ds_complemento,
    usua_ds_numcasa,
    usua_ds_email,
    usua_ds_telefone
) VALUES(:nm_usuario, 
        :ds_cpf, 
        :ds_rg, 
        :dt_nascimento,
        :in_sexo,
        :ds_cep, 
        :ds_endereco, 
        :ds_complemento, 
        :ds_numcasa, 
        :ds_email, 
        :ds_telefone  )');
    $stmt->execute(array());
    echo $stmt->rowCount(); 
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
//condicional para ir para a proxima página
if($stmt == 1){
    $_SESSION["msg_ok"]="Cadastro realizado com sucesso!";
    header('Location: ../index.php');
}else{
    $_SESSION["msg_erro"]="Cadastro não pode ser realizado, favor entrar em contato com o suporte de TI";
    header('Location: cadastroFuncionario.php');
};
?>
