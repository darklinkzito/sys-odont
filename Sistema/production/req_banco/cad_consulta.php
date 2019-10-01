<?php
try {
    session_start();
    require('conexao.php');
    //inserção de dados no banco de dados
    $sql = 'INSERT INTO consulta 
    (cons_dt_consulta, cons_hr_consulta, prof_cod_profissional, paci_cod_paciente, usua_cod_usuario)
    VALUES("'.$_POST['data'].'","'.$_POST['hora'].'","'.$_POST['dentista'].'",
    "'.$_POST['paciente'].'", "'.$_SESSION['usuario_id'].'")';
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
//condicional para ir para a proxima página
if ($stmt == 1) {
    $_SESSION["cunsulta_ok"] = "Consulta Marcada!";
    header('Location: ../cadastroConsulta.php');
} else {
    $_SESSION["msg_erro"] = "Consulta não pode ser marcada enrar em contato com a TI";
    header('Location: ../cadastroConsulta.php');
};
