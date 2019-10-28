<?php
try {
    require('conexao.php');
    $data_validade = $_POST['dt_validade'];
    $data_validade = implode("-",array_reverse(explode("/",$data)));
    $_POST['dt_validade'] = $data_validade;
    $dados_convenio = 'INSERT INTO convenio (conv_nm_convenio, conv_ds_carteira, conv_ds_tipo, conv_dt_validade)
    VALUES("'.$_POST['nm_convenio'].'", "'.$_POST['ds_carteira'].'", "'.$_POST['ds_tipo'].'", "'.$_POST['dt_validade'].'")';
    $stmt = $conn->prepare($dados_convenio);
    $stmt->execute();
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>