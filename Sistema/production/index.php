<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Sys'Odont </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <style>

    #myCarousel{
      width: 800px;
    }
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
        <!-- top tiles -->
        <div class="row tile_count">

          <div class="col-md-3 col-sm-5 col-xs-7  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Atendimentos Diários para Atendimento</span>
            <div class="count">4,567</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
          </div>
          <div class="col-md-3 col-sm-5 col-xs-7 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Atendimentos Diários Encerrados</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Bem-vindo(a) <small>Excelência em saúde bucal</small></h3>
                </div>
              </div>
              <div align="center">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img class="d-block w-100" src="./assets/sorrisao.jpg" alt="Sorriso">
                  </div>

                  <div class="item">
                    <img class="d-block w-100"src="./assets/ortodontia_2.jpg" alt="Proteses">
                  </div>

                  <div class="item">
                    <img class="d-block w-100" src="./assets/sorrisores.jpg" alt="Restauração">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              </div>

            </div>

            <div class="clearfix"></div>
          </div>
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
  <script src="../assets/sorriso1"></script>

  <!-- Initialize datetimepicker -->
</body>

</html>