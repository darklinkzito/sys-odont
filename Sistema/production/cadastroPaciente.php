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
    <link href="../build/css/ficha.css" rel="stylesheet">
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
                        <a href="index.php" class="site_title"><i class="fa fa-tooth"></i> <span>Sys'Odont</span></a>
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
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                        </div>


                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Cadastro de Paciente</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                        <ul class="wizard_steps">
                                            <li>
                                                <a href="#step-1">
                                                    <span class="step_no">1</span>
                                                    <span class="step_descr">
                                                        Passo 1<br />
                                                        <small>Cadastro </small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-2">
                                                    <span class="step_no">2</span>
                                                    <span class="step_descr">
                                                        Passo 2<br />
                                                        <small>Ficha</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-3">
                                                    <span class="step_no">3</span>
                                                    <span class="step_descr">
                                                        Step 3<br />
                                                        <small>Step 3 description</small>
                                                    </span>
                                                </a>
                                            </li>

                                        </ul>
                                        <div id="step-1">
                                            <form class="form-horizontal" method="POST"
                                                action="./req_banco/Cad_paciente.php">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="NomeCompleto">Nome
                                                        Completo:<span class="required">*</span></label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" required="required"
                                                            id="NomeCompleto" name="nm_paciente">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">CPF:<span
                                                            class="required">*</span></label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control"
                                                            data-inputmask="'mask' : '999.999.999-99'" id="CPF"
                                                            name="ds_cpf" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="DataNascimento">Data
                                                            de nascimento:<span class="required">*</span></label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" required="required"
                                                                id="DataNascimento" name="dt_paciente"
                                                                data-inputmask="'mask': '99/99/9999'">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="sexo">Sexo <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-2">
                                                            <select class="form-control" id="sexo" name="in_sexo">
                                                                <option value="0" disable></option>
                                                                <option value="Masculino">Masculino</option>
                                                                <option value="Feminino">Feminino</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="RG">RG:<span
                                                            class="required">*</span></label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control"
                                                            data-inputmask="'mask' : '99.999.999-99'"
                                                            required="required" id="RG" name="ds_rg">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Endereco">Endereço:<span
                                                            class="required">*</span></label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" required="required"
                                                            id="Endereco" name="ds_endereco">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">CEP:<span
                                                            class="required">*</span></label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control"
                                                            data-inputmask="'mask' : '99999-999'" id="CEP"
                                                            name="ds_cep">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="NumCasa">Número:<span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-1">
                                                            <input type="text" class="form-control" required="required"
                                                                name="ds_numero" id="ds_numero">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Telefone">Telefone:<span
                                                            class="required">*</span></label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control"
                                                            data-inputmask="'mask' : '(99) 99999-9999'" id="Telefone"
                                                            name="ds_telefone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Email:<span
                                                            class="required">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="email" class="form-control" required="required"
                                                            name="ds_email" id="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Possui
                                                        convênio?:<span class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1" onclick="FunctionConvenio(1)">
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1" onclick="FunctionConvenio(2)">
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group hidden convenios">
                                                    <label class="control-label col-sm-2" for="Email">Qual?:<span
                                                            class="required">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" required="required"
                                                            name="ds_convenio" id="convenio">
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div id="step-2">
                                            <div class="ficha">
                                                <div class="md-form">
                                                    <label for="Queixa">Queixa Principal</label>
                                                    <i class="fas fa-pencil-alt prefix"></i>
                                                    <textarea id="queixa" class="md-textarea form-control"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="md-form">
                                                    <label for="Queixa">História(Desde quando, Como, Onde e
                                                        porque)</label>
                                                    <i class="fas fa-pencil-alt prefix"></i>
                                                    <textarea id="historia" class="md-textarea form-control"
                                                        rows="3"></textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Algum problema de
                                                        saúde?:<span class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio"
                                                                id="RadioSaude">
                                                            <label class="form-check-label">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio"
                                                                id="RadioSaude">
                                                            <label class="form-check-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-2" for="Email">Qual?</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Faz uso de algum
                                                        medicamento?:<span class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-2"
                                                        for="Email">Especifique?</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Esta sendo
                                                        acompanhado por algum
                                                        médico  ou está em tratamento?:<span
                                                            class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-2" for="Email">Especifique
                                                        (Brevemente):</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">É alérgico a algum
                                                        medicamento??:<span class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-2"
                                                        for="Email">Especifique:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-3">
                                            <div class="ficha">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Já teve hemorragia
                                                        alguma vez ou já
                                                        foi internado?:<span class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="md-form">
                                                    <label for="Queixa">Quando? Por que?</label>
                                                    <i class="fas fa-pencil-alt prefix"></i>
                                                    <textarea id="historico" class="md-textarea form-control"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Está
                                                        grávida?:<span class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2>Histórico Bucal</h2>
                                                <div class="md-form">
                                                    <label for="Queixa">Como faz a higiene oral? Quantas vezes ao dia?
                                                        Usa fio dental ou
                                                        algum bochecho com flúor?</label>
                                                    <i class="fas fa-pencil-alt prefix"></i>
                                                    <textarea id="uso" class="md-textarea form-control"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Email">Já foi ao dentista
                                                        antes?:<span class="required">*</span></label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Sim</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="col-sm-1">
                                                            <input class="form-check-input" type="radio" id="RadioMed">
                                                            <label class="form-check-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-2" for="Email">Quando foi seu
                                                        último
                                                        tratamento?</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <h2>Crianças</h2>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-2" for="Email">Quem faz a
                                                        higiene?</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="md-form">
                                                    <label>Especifique brevemente a alimentação da criança:</label>
                                                    <i class="fas fa-pencil-alt prefix"></i>
                                                    <textarea id="uso" class="md-textarea form-control"
                                                        rows="3"></textarea>
                                                </div>
                                                <h2>Hábitos</h2>
                                                <label for="">Apertamento</label>
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox"
                                                        id="blankCheckbox" value="option1" aria-label="...">
                                                </div>
                                                <label for="">Bruxismo</label>
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox"
                                                        id="blankCheckbox" value="option1" aria-label="...">
                                                </div>
                                                <label for="">Morde Objetos</label>
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox"
                                                        id="blankCheckbox" value="option1" aria-label="...">
                                                </div>
                                                <label for="">Faz uso de mamadeira ou chupeta</label>
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox"
                                                        id="blankCheckbox" value="option1" aria-label="...">
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

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
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>
<script>
    function FunctionConvenio(item) {
        if (item == 1)
            $('.convenios').removeClass('hidden');
        else
            $('.convenios').addClass('hidden')
    }
</script>

</html>