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
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Menu</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-edit"></i>Cadastros<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="cadastroFuncionario.php">Cadastro de Funcionários</a></li>
                                        <li><a href="">Cadastro de consulta</a></li>
                                        <li><a href="cadastroPaciente.php">Cadastro de Paciente</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Registros <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="tabelaConsultas.php">Registro de Consultas</a></li>
                                        <li><a href="#">Relatório de Consulta</a></li>
                                    </ul>
                                </li>

                        </div>

                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="#"><i class="fa fa-address-card pull-right"></i>Meus Dados</a></li>
                                    <li><a href="#"><i class="fa fa-wrench pull-right"></i>Suporte</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- page content -->
            <div class="right_col " role="main">
                <div>
                    <h2>Cadastro de Funcionários</h2>

                </div>
                <form class="form-horizontal" method="POST" action="./req_banco/usua_cad_func.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="NomeCompleto">Nome Completo:<span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="required" id="NomeCompleto" name="nm_usuario">
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
                                <input type="text" class="form-control" required="required" id="DataNascimento" name="dt_usuario" data-inputmask="'mask': '99/99/9999'">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="sexo">Sexo <span class="required">*</span></label>
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
                        <label class="control-label col-sm-2" for="cep">CEP:<span class="required">*</span></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" data-inputmask="'mask' : '99999-999'" id="CEP" name="ds_cep">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Endereco">Endereço:<span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="required" id="Endereco" name="ds_endereco">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Endereco">Complemento:<span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="required" id="Endereco" name="ds_complemento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="NumCasa">Número:<span class="required">*</span></label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" required="required" id="num_casa" name="num_casa">
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
                        <label class="control-label col-sm-2">Perfil: <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="perfil" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="perfil" value="gestor"> Gestor
                                </label>
                                <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="perfil" value="dentista"> Dentista
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="perfil" value="atendente"> Atendente
                                </label>
                            </div>
                        </div>
                        <div class="right_col " role="main">
                            <br>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn estilo" style="margin-top: 30px">Cadastrar</button>
                                </div>
                            </div>
                </form>
            </div>
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Admin Template by
                </div>
                <div class="clearfix"></div>
            </footer>
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