<?php
try {
    session_start();
    require('conexao.php');
    //Alteração da senha
    echo ($_POST['pw']);

    $stmt = $conn->prepare('UPDATE senha SET usua_nm_senha = :usua_nm_senha WHERE usua_nm_senha = 
    "' . $_POST['pw'] . '"');
    $stmt->execute(array(
        ':usua_nm_senha' => $_POST['pw'],
    ));
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if (isset($stmt)) {
    $_SESSION['Senha Alterada!'] = 1;
    header('Location: ../mod_senha.php');
}
