<?php
try {
    session_start();
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
if(isset($dados_ficha)){
    $_SESSION['ficha_cadastrada'] = true;
    header('Location: ../cadastroPaciente.php');
}else{
    $_SESSION['ficha_nao_cadastrada'] = true;
    header('Location: ../cadastroPaciente.php');
}

?>