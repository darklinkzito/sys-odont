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
    </style>
    <script src="https://kit.fontawesome.com/37b548cb8d.js"></script>

</head>

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
                    <?php include ("./View/sidebarMenu.php")?>
                </div>
            </div>

            <!-- top navigation -->
            <?php include ("./View/topNavigation.php")?>
            <!-- page content -->

            <div class="right_col " role="main">
                <div>


                    <div class="x_panel">
                        <div class="x_title">
                            <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                            <h2>Marcação de consulta</h2>

                            <div class="clearfix"></div>

                        </div>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nome Paciente:<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required="required" id="NomePaciente" name="">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 ">Date Nascimento</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                                    <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2"> Dentista:<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-9 col-xs-6">
                                    <select class="form-control">
                                        <option value="Selecione">Selecione</option>
                                        <option value="Dentista-1"> Dentista-1</option>
                                        <option value="Dentista-2"> Dentista-2</option>
                                        <option value="Dentista-3"> Dentista-3</option>
                                        <option value="Dentista-4"> Dentista-4</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Consulta Data e Hora:<span class="required">*</span></label>
                                <div class="col-sm-5">
                                    <input type="date" name="bday"><input type="time" name="usr_time">
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
                <footer>
                    <div class="pull-right">
                        Sys-Odont
                    </div>
                    <div class="clearfix"></div>
                </footer>
            </div>

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