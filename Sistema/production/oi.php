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
    <link href="../build/css/customSYS.css" rel="stylesheet">
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
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                        </div>


                    </div>
                    <div class="clearfix"></div>


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Cadastro de Paciente</h2>

                                <div class="clearfix"></div>
                            </div>
                            <form id="regForm" action="">

                                <!-- One "tab" for each step in the form: -->
                                <div class="tab">
                                    <div class="form-group col-md-6">
                                        <p><input class="form-control" placeholder="Nome Completo" required="required" id="NomeCompleto" name="nm_paciente" oninput="this.className = ''"></p>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p><input ctype="text" class="form-control" data-inputmask="'mask' : '999.999.999-99'" id="CPF" name="ds_cpf" required="required" placeholder="CPF" oninput="this.className = ''">
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p><input type="text" class="form-control" required="required" id="DataNascimento" name="dt_paciente" data-inputmask="'mask': '99/99/9999'" placeholder="Data de Nascimento" oninput="this.className = ''">
                                        </p>
                                    </div>


                                    <div class="form-group col-md-9">
                                        <p><input type="text" class="form-control" required="required" id="Endereco" name="ds_endereco" placeholder="Endereço" oninput="this.className = ''">
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p><input type="text" class="form-control" data-inputmask="'mask' : '99.999.999-99'" required="required" id="RG" name="ds_rg" placeholder="RG" oninput="this.className = ''">
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p><input type="text" class="form-control" data-inputmask="'mask' : '99999-999'" id="CEP" name="ds_cep" placeholder="CEP" oninput="this.className = ''">
                                        </p>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <p><input type="text" class="form-control" required="required" name="ds_numero" id="ds_numero" placeholder="Complemento (Andar,Num Casa, Bloco...etc)" oninput="this.className = ''">
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p><input type="text" class="form-control" data-inputmask="'mask' : '(99) 99999-9999'" id="Telefone" name="ds_telefone" placeholder="Telefone" oninput="this.className = ''">
                                        </p>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <p><input type="email" class="form-control" required="required" name="ds_email" id="Email" placeholder="Email" oninput="this.className = ''">
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3">

                                        Sexo:
                                        <select class="form-control" id="sexo" name="in_sexo">
                                            <option value="0" disable>Escolha...</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-2">Possui convênio?</label>
                                        <div class="form-check form-check-inline">
                                            <div class="col-sm-1">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="FunctionConvenio(1)" oninput="this.className = ''">
                                                <label class="form-check-label" for="inlineRadio1">Sim</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="col-sm-1">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="FunctionConvenio(2)">
                                                <label class="form-check-label" for="inlineRadio1">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group hidden convenios">
                                        <label class="control-label col-sm-1" for="convenio">Qual?:<span class="required">*</span></label>
                                        <div class="form-group col-md-3">

                                            <select class="form-control" id="convenio" name="conveio">
                                                <option value="0" disable>Escolha...</option>
                                                <option value="Masculino">Hapvida</option>
                                                <option value="Feminino">Sulamerica</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>


                                <div class="tab">
                                
                                    <div class="form-group">
                                        <label for="">Se faz uso de algum medicamento informe abaixo:</label>
                                        <div class="col-md-6">
                                            <p><input placeholder="Digite aqui..." oninput="this.className = ''" class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Se o paciente tiver algum problema de saúde informe abaixo:</label>
                                        <div class="col-md-6">
                                            <p><input placeholder="Digite aqui..." oninput="this.className = ''" class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Se o paciente estiver em algum tratamento ou acompanhamentoinforme
                                            abaixo:</label>
                                        <div class="col-md-6">
                                            <p><input placeholder="Digite aqui..." oninput="this.className = ''" class="form-control"></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Se o paciente tiver alergia a algum medicamento informe
                                            abaixo:</label>
                                        <div class="col-md-6">
                                            <p><input placeholder="Digite aqui..." oninput="this.className = ''" class="form-control"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Se o paciente já teve hemorragia
                                            alguma vez ou
                                            foi internado alguma vez informe
                                            abaixo o motivo:</label>
                                        <div class="col-md-6">
                                            <p><input placeholder="Digite aqui..." oninput="this.className = ''" class="form-control"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab">
                                    <p><input placeholder="Username..." oninput="this.className = ''"></p>
                                    <p><input placeholder="Password..." oninput="this.className = ''"></p>
                                    
                                </div>

                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Prox</button>
                                    </div>
                                </div>

                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="js/Form/Formwiz.js"></script>

</body>


</html>