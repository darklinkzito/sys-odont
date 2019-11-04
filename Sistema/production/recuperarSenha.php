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

  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="">

            <h1> <i class="fa fa-tooth po "></i></h1>
            <p>Insira o seu código de usuário</p>
            <p>um email será enviado para você com a recuperação da senha.</p>
            <div>
              <input type="text" class="form-control" placeholder="Codigo de usuário" name="senha" required="required" />
            </div>
            <div>
              <input type="submit" value="Enviar" class="btn login_btn">
              <input type="button" onclick="window.location='login.php';" value="Voltar" class="btn login_btn">
            </div>
          </form>
        </section>
      </div>
      <br />
    </div>
  </div>
</body>

</html>