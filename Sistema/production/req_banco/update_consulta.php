<?php
try {
    session_start();
    require('conexao.php');
    //inserção de dados no banco de dados        
    $stmt = $conn->prepare('UPDATE consulta SET stat_cod_status = :stat_cod_status
    WHERE cons_cod_consulta = "'.$_POST['cod'].'"');
    $stmt->execute(array(
        ':stat_cod_status' => 2
    ));
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if(isset($stmt)){
    $_SESSION['consulta_fechada'] = true;
    header('Location: ../tabelaConsultas.php');
}
