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
<?php include("./View/verificar_Login.php");
if ($_SESSION['cadastrou_paciente'] == false) {
    header('Location: acesso_negado.php');
}
?>


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
            <div class="right_col" role="main">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ficha Anamnese</h2>
                        <div class="clearfix"></div>
                    </div>
                    <form class="form-horizontal" method="POST" action="./req_banco/insert_ficha.php">

                        <div class="form-group">
                            <div>
                                <label for="">Se faz uso de algum medicamento informe abaixo:</label>
                                <p><input name="medicamento" placeholder="Digite aqui..." class="form-control"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Se o paciente tiver algum problema de saúde informe
                                abaixo:</label>
                            <div>
                                <p><input name="problema" placeholder="Digite aqui..." class="form-control"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Se o paciente estiver em algum tratamento ou acompanhamento
                                informe
                                abaixo:</label>
                            <div>
                                <p><input name="acompanhamento" placeholder="Digite aqui..." class="form-control"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Se o paciente tiver alergia a algum medicamento informe
                                abaixo:</label>
                            <div>
                                <p><input name="alergia" placeholder="Digite aqui..." class="form-control"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Se o paciente já teve hemorragia
                                alguma vez ou
                                foi internado alguma vez informe
                                abaixo o motivo:</label>
                            <div>
                                <p><input name="hemorragia" placeholder="Digite aqui..." class="form-control"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Se o paciente fuma ou já fumou
                                alguma vez informe por quanto tempo:</label>
                            <div>
                                <p><input name="fumante" placeholder="Digite aqui..." class="form-control"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">O paciente possui alguns hábitos como
                                apertamento, bruxismo, morder objetos?</label>
                            <div>
                                <p><input name="habitos" placeholder="Digite aqui..." class="form-control"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea3">Como faz a higiene oral? Quantas vezes
                                ao dia? Usa fio dental ou algum bochecho com flúor?(Responda na
                                ordem)</label>
                            <textarea class="form-control" name="higiene" id="exampleFormControlTextarea3" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea3">Já foi ao dentista antes? Quando foi
                                seu último tratamento?(Responda na ordem)</label>
                            <textarea class="form-control" name="dentista" id="exampleFormControlTextarea3" rows="5"></textarea>
                        </div>
                        <h3>Crianças</h3>
                        <div class="form-group">
                            <label for="">Quem faz a higiene bucal da criança?</label>
                            <div>
                                <p><input placeholder="Digite aqui..." name="higiene_crianca" oninput="this.className = ''" class="form-control"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea3">Defina a alimentação básica da
                                criança:</label>
                            <textarea class="form-control" name="alimentacao_crianca" id="exampleFormControlTextarea3" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-2">Faz uso de chupeta ou mamadeira?</label>
                            <div class="form-check form-check-inline">
                                <div class="col-sm-1">
                                    <input class="form-check-input" type="radio" name="chupeta" id="inlineRadio1" value="Sim">
                                    <label class="form-check-label" for="inlineRadio1">Sim</label><br>
                                    <input class="form-check-input" type="radio" name="chupeta" id="inlineRadio1" value="Nao">
                                    <label class="form-check-label" for="inlineRadio1">Não</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <p>Pressão Arterial</p>
                            <p><input class="form-control col-md-2" name="pressao" placeholder="Pressão"></p>
                            <br>
                            <br>
                            <p>
                                <input type="text" class="form-control col-md-2" required="required" id="DataPA" name="dt_pressao" data-inputmask="'mask': '99/99/9999'" placeholder="Data da registro">
                            </p>
                            <br>
                            <br>
                            <p>Batimentos por minuto</p>
                            <p><input id="bpm" class="form-control col-md-2" name="bpm" placeholder="BPM"></p>
                            <br>
                            <br>
                            <p>
                                <input type="text" class="form-control col-md-2" required="required" id="DataBPM" name="dt_bpm" data-inputmask="'mask': '99/99/9999'" placeholder="Data de registro">
                            </p>
                        </div>

                        <br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn estilo" style="margin-top: 30px">Cadastrar</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
        <!-- footer content -->
        <?php include("./View/footer.php") ?>
    </div>
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
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Initialize datetimepicker -->
</body>

</html>