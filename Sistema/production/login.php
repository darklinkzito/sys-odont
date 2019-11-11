<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sys'Odont</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/37b548cb8d.js"></script>
  <style>
    .po {
      font-size: 100px;
    }

    .as {
      font-size: 75px
    }
  </style>
</head>

<body class="login">
  <?php
  session_start();
  if (@$_SESSION['login_invalido'] == true) { ?>
  <?php
    echo '<script language="javascript">';
    echo 'alert("Os dados informados não conferem")';
    echo '</script>';

    unset($_SESSION["login_invalido"]);
  } ?>
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="req_banco/valida_login.php">

            <h1> <i class="fa fa-tooth po "></i></h1>
            <h1>Bem-vindo a Sys'Odont</h1>
            <div>
              <input type="text" class="form-control" placeholder="Código de Usuário" name="usuario" required="required" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Senha" name="senha" required="required" />
            </div>
            <div>
              <input type="submit" value="Acessar" class="btn float-right login_btn">
              <input type="button" onclick="window.location='recuperarSenha.php';" value="Esqueci Minha Senha!" class="btn float-right login_btn">
            </div>
          </form>
        </section>
      </div>
      <br />
    </div>
  </div>
</body>

</html>