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
    <!-- Select com pesquisa-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


    <style>
        .estilo {
            background-color: #2A3F54;
            color: white;
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
                        <a href="index.php" class="site_title"><i class="fa fa-tooth po"></i> <span>Sys'Odont</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h3>John Doe</h3>
                        </div>
                    </div>

                    <br />
                    <!-- sidebar menu -->
                    <?php include("./View/sidebarMenu.php") ?>
                </div>
            </div>

            <!-- top navigation -->
            <?php include("./View/topNavigation.php") ?>
            <!-- page content -->

            <div class="right_col " role="main">
                <div>


                    <div class="x_panel">
                        <div class="x_title">
                            <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                            <h2>Marcação de consulta</h2>

                            <div class="clearfix"></div>

                        </div>
                        <form action="./req_banco/cad_consulta.php" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nome Paciente:<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <?php include("./req_banco/consultar_paciente.php") ?>
                                    <select class="form-control selectpicker" data-live-search="true" required="required" id="NomePaciente" name="paciente">
                                        <option value="0">Selecione</option>
                                        <?php foreach ($dados as $value) { ?><option value="<?php echo ($value['paci_cod_paciente']) ?>"><?php echo $value['paci_nm_paciente'] ?></option> <?php } ?>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2"> Profissional:<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-9 col-xs-6">
                                    <?php include("./req_banco/consulta_dentista.php") ?>
                                    <select class="form-control selectpicker" data-live-search="true" required="required" id="dentista" name="dentista">
                                        <option value="0">Selecione</option>
                                        <?php foreach ($dados as $value) { ?><option value="<?php echo ($value['prof_cod_profissional']) ?>"><?php echo $value['prof_nm_profissional'] ?></option> <?php } ?>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Consulta Data e Hora:<span class="required">*</span></label>
                                <div class="col-sm-5">
                                    <input type="date" name="data"><input type="time" name="hora">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn estilo" style="margin-top: 30px">AGENDAR CONSULTA </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <?php include("./View/footer.php") ?>
            </div>
            <script>
                $(function() {
                    $('.selectpicker').selectpicker();
                });
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

            <!-- Custom Theme Scripts -->
            <script src="../build/js/custom.min.js"></script>

</body>

</html>