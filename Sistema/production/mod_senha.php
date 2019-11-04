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
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <style>
        .estilo {
            background-color: #2A3F54;
            color: white;
        }

        .panel>.panel-heading {
            color: white;
            background-color: #2A3F54;
            border-color: #2A3F54;

        }

        ::placeholder {
            color: black;
        }
    </style>
    <script src="https://kit.fontawesome.com/37b548cb8d.js"></script>

</head>
<?php include("./View/verificar_Login.php") ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-tooth"></i> <span>Sys'Odont</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <?php include("./View/profile.php") ?>

                    <br />
                    <!-- sidebar menu -->
                    <?php include("./View/sidebarMenu.php") ?>
                </div>
            </div>
            <!-- top navigation -->
            <div>
                <?php include("./View/topNavigation.php") ?>
            </div>
            <!-- page content -->
            <form id="FormSenha" method="POST" action="./req_banco/update_senha.php">
                <div class="right_col" role="main">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Modificar senha</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-2">
                                    <div class="panel panel-dark">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <span class="glyphicon glyphicon-wrench"></span>
                                                Mofifique sua senha
                                            </h3>
                                        </div>

                                        <div class="panel-body">
                                            <div class="col-xs-6 col-sm-6 col-md-6 login-box">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                                        <input class="form-control" type="password" placeholder='Senha Atual' />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></div>
                                                        <input class="form-control" id="NovaSenha" type="password" placeholder='Nova Senha' />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></div>
                                                        <input class="form-control" id="CNovaSenha" type="password" placeholder='Confirmar Nova Senha' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 pull-right">
                                                <button onclick="validarSenha()" class="btn icon-btn-save estilo pull-right" type="submit">
                                                    <span class="btn-save-label">
                                                        <i class="glyphicon glyphicon-floppy-disk">
                                                        </i>
                                                    </span>
                                                    Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- footer content -->
            <?php include("./View/footer.php") ?>
        </div>
    </div>
    <?php 
    if ($_SESSION['Senha Alterada!'] == 1 ){
        echo "<script>alert(Senha alterada com sucesso!);</script>";
        $_SESSION['Senha Alterada!'] = 0;
    }
    ?>
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

    <!-- Initialize datetimepicker -->
    <script>
        function validarSenha() {
            NovaSenha = document.getElementById('NovaSenha').value;
            CNovaSenha = document.getElementById('CNovaSenha').value;
            if (NovaSenha != CNovaSenha) {
                alert("Senhas não conferem!");
            } else {
                document.FormSenha.submit();
            }
        }
    </script>
</body>

</html>