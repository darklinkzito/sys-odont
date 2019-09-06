<?php 
try {
    session_start();
    //conexão com o banco de dados
    $conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //inserção de dados no banco de dados
    $stmt = $conn->prepare('INSERT INTO usuario (
    usua_nm_usuario,
    usua_dt_usuario,
    usua_in_sexo,
    usua_ds_cpf,
    usua_ds_rg,
    usua_ds_telefone,
    usua_ds_email) VALUES(/*:id do elemento,outro id do elemento*/

    )');
    $stmt->execute(array());
    echo $stmt->rowCount(); 
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
//condicional para ir para a proxima página
if($stmt == 1){

};
?>
