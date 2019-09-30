<?php
    
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
    
  $nivel_necessario = 3;
    
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['usuario_id']) OR ($_SESSION['usuario_perfil'] <$nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: login.php");
  }
    
  ?>