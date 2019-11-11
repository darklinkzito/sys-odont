<?php
try {
    session_start();
    require('conexao.php');
    //inserção de dados no banco de dados
    $sql = 'INSERT INTO consulta 
    (stat_cod_status, cons_dt_consulta, cons_hr_consulta, prof_cod_profissional, espe_cod_especialidade, paci_cod_paciente, usua_cod_usuario)
    VALUES(1,"'.$_POST['data'].'","'.$_POST['hora'].'","'.$_POST['dentista'].'",
    "'.$_POST['especialidade'].'", "'.$_POST['paciente'].'", "'.$_SESSION['usuario_id'].'")';
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
//condicional para ir para a proxima página
if ($stmt == 1) {
    $_SESSION["consulta_ok"] = true;
    header('Location: ../cadastroConsulta.php');
} else {
    $_SESSION["consulta_erro"] = true;
    header('Location: ../cadastroConsulta.php');
};
