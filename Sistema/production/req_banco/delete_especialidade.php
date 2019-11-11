<?php 
session_start();
   
$especialidade = $_POST['especialidade'];

try {
  require("conexao.php");

  $stmt = $pdo->prepare('DELETE FROM especialidade WHERE espe_cod_especialidade = $especialidade');
  $stmt->execute();
     
  echo $stmt->rowCount(); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>