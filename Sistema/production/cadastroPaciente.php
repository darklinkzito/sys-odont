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

        .convenios {
            align-content: center;
            justify-content: center;
        }
        }
    </style>
    <script src="https://kit.fontawesome.com/37b548cb8d.js"></script>

</head>
<?php include("./View/verificar_Login.php");
if (@$_SESSION['msg_erro'] == true) {
    echo '<script language="javascript">';
    echo 'alert("Paciente não pode ser cadastrado favor entrar em contato com o setor de TI!")';
    echo '</script>';
    $_SESSION['msg_erro'] = false;
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
                        <h2>Cadastro de Paciente</h2>
                        <div class="clearfix"></div>
                    </div>

                    <form class="form-horizontal" method="POST" action="./req_banco/cad_paciente.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="NomeCompleto">Nome Completo:<span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required="required" id="NomeCompleto" name="nm_paciente">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">CPF:<span class="required">*</span></label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" data-inputmask="'mask' : '999.999.999-99'" id="CPF" name="ds_cpf" required="required">
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="RG">RG:<span class="required">*</span></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" data-inputmask="'mask' : '99.999.999-99'" required="required" id="RG" name="ds_rg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="DataNascimento">Data de nascimento:<span class="required">*</span></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" required="required" id="DataNascimento" name="dt_paciente" data-inputmask="'mask': '99/99/9999'">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sexo">Sexo <span class="required">*</span></label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="sexo" name="in_sexo" required>
                                        <option value="">Selecione</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cep">CEP:<span class="required">*</span></label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" data-inputmask="'mask' : '99999-999'" id="CEP" required name="ds_cep">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Endereco">Endereço:<span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required="required" id="Endereco" name="ds_endereco">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="NumCasa">Número:<span class="required">*</span></label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" data-inputmask="'mask' : '9999'" required="required" maxlength="4" id="num_casa" name="num_casa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Telefone">Telefone:<span class="required">*</span></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" data-inputmask="'mask' : '(99) 99999-9999'" id="Telefone" name="ds_telefone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Email">Email:<span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" required="required" id="Email" name="ds_email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label col-md-2">Possui convênio?</label>
                            <div class="form-check form-check-inline">
                                <div class="col-sm-1">
                                    <input class="form-check-input" type="radio" name="convenio" id="inlineRadio1" value="true" onclick="FunctionConvenio(1)" oninput="this.className = ''">
                                    <label class="form-check-label" for="inlineRadio1">Sim</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="col-sm-1">
                                    <input class="form-check-input" type="radio" name="convenio" id="inlineRadio1" value="false" onclick="FunctionConvenio(2)">
                                    <label class="form-check-label" for="inlineRadio1">Não</label>
                                </div>
                            </div>
                            <div class=" hidden convenios col-md-6 pull-right">
                                <label class="control-label" for="convenio">Qual?:<span class="required">*</span></label>
                                <select class="form-control" id="convenio" name="nm_convenio" required="required">
                                    <option value="">Escolha...</option>
                                    <?php include("./req_banco/consulta_convenio.php");
                                    foreach ($dados as $value) {
                                        ?>
                                        <option value="<?php echo ($value['conv_cod_convenio']) ?>"><?php echo ($value['conv_nm_convenio']) ?></option>
                                    <?php } ?>
                                </select>
                                <div class="form-group">
                                    <label class="control-label" for="convenio">Número da Carteira:<span class="required">*</span></label>
                                    <input type="text" class="form-control col-md-3" required="required" id="carteira" name="ds_carteira" placeholder="Número">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="convenio">Tipo de Convênio:<span class="required">*</span></label>
                                    <input type="text" class="form-control col-md-3" required="required" id="carteira" name="ds_tipo" placeholder="Tipo">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="convenio">Data de Validade:<span class="required">*</span></label>
                                    <input type="text" class="form-control col-md-3" required="required" id="DataValidade" name="dt_validade" data-inputmask="'mask': '99/9999'" placeholder="Data de Validade">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn estilo" id="cadastrar" style="margin-top:30px">Cadastrar</button>
                            </div>
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
    <script>
        function FunctionConvenio(item) {
            if (item == 1)
                $('.convenios').removeClass('hidden');
            else
                $('.convenios').addClass('hidden')
        }
    </script>
</body>

</html>