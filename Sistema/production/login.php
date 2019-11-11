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
              <input type="text" class="form-control" data-inputmask="'mask' : '999.999.999-99'" placeholder="CPF" name="cpf" required="required" />
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
</script>
        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-datetimepicker -->
        <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <!-- Ion.RangeSlider -->
        <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
        <!-- Bootstrap Colorpicker -->
        <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <!-- jQuery Knob -->
        <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- Cropper -->
        <script src="../vendors/cropper/dist/cropper.min.js"></script>
        <!-- validator -->
        <script src="../vendors/validator/validator.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
</html>