<?php
try {
    session_start();
    require('conexao.php');
    $dados = 'INSERT INTO especialidade (espe_nm_especialidade)
    VALUES("'.$_POST['especialidade'].'")';
    $stmt = $conn->prepare($dados);
    $stmt->execute();
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}if($stmt == 1){
    $_SESSION["especialidade"]= true;
    header('Location: ../especialidade.php');
}
?>