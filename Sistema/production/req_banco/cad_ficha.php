<?php
try {
    require('conexao.php');
    $dados_ficha = 'INSERT INTO ficha_anamnese (fian_in_medicamento, fian_in_problema, fian_in_acompanhamento,
     fian_in_alergia, fian_in_hemorragia, fian_in_fumante, fian_in_habitos)
    VALUES("'.$_POST['in_medicamento'].'", "'.$_POST['in_problema'].'", "'.$_POST['in_acompanhamento'].'",
     "'.$_POST['in_alergia'].'", "'.$_POST['in_hemorragia'].'", "'.$_POST['in_fumante'].'", fian_in_habitos)';
    $stmt = $conn->prepare($dados_ficha);
    $stmt->execute();
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>