<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>So'Dont</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/37b548cb8d.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-tooth"></i> <span>So'Dont</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span>
                <h3>John Doe</h3>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i>Cadastros<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cadastroFuncionario.html">Cadastro de  Funcionários</a></li>
                      <li><a href="cadastroPaciente.html">Cadastro de Paciente</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabelaConsultas.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
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
                <a id="menu_toggle"><i class="fas fa-ellipsis-v"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class=" fas fa-sign-out-alt"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                             </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <form class="form-horizontal" action="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="NomeCompleto">Nome Completo:<span class="required">*</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" required="required" id="NomeCompleto">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">CPF:<span class="required">*</span></label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="CPF"
                    required="required">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="DataNascimento">Data de nascimento:<span class="required">*</span></label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" required="required" id="DataNascimento" data-inputmask="'mask': '99/99/9999'">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="RG">RG:<span class="required">*</span></label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" required="required" id="RG">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Endereco">Endereço:<span class="required">*</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" required="required" id="Endereco">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">CEP:<span class="required">*</span></label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="CEP">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="NumCasa">Número:<span class="required">*</span></label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" required="required" id="NumCasa" maxlength="4">

                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="Telefone">Telefone:<span class="required">*</span></label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="Telefone">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Email">Email:<span class="required">*</span></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" required="required" id="Email">
                </div>
            </div>
            <div class="form-group">
              <div class="col-auto my-1" style="margin-left:98px">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Plano Odontológico(Convênio)</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                  <option selected>Escolha</option>
                  <option value="1">Hapvida</option>
                  <option value="2">OdontoSystem</option>
                  <option value="3">Unimed</option>
                </select>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="convenio">Código convênio:<span class="required">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" required="required" id="convenio">
                    </div>
                </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </div>
            </div>
            
        </form>
        </div>

        <!-- footer content -->
        <footer>
         
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html> 