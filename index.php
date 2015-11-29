<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="content">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- attch css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-material/dist/css/material.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- attch javascript -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap-material/dist/js/material.min.js"></script>
    <script src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <!-- navbar panel -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UKM Informatika & Komputer</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-collapse-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#information">Information</a></li>
                <li><a href="#google_map">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.content-pluid -->
    </nav>

    <!-- first section home -->
    <div id="home" class="home">
        <div class="text-vcenter">
            <!-- <h1>Unit Kegiatan Mahasiswa</h1> -->
            <img src="images/ik.jpg" class="img-circle sample shadow-z-2 img-head">
            <h3>Unit Kegiatan Mahasiswa Informatika & Komputer Yogyakarta</h3>
            <a href="#about" class="btn btn-default btn-lg">Continue</a>
        </div>
    </div> <!-- /.home -->

    <!-- second section About -->
    <div id="about" class="pad-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="images/ik.jpg" class="img-circle img-head-about" alt="" />
          </div>
          <div class="col-sm-6 text-center">
            <h2>UKM Informatika & Komputer</h2>
            <p class="lead">masih dikerjakan</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /second section -->

    <!-- third section Service -->
    <div id="services" class="pad-section">
        <div class="container">
            <h2 class="text-center">Open Class UKM Informatika & Komputer</h2><hr/>
                <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <i class="glyphicon glyphicon-phone"></i>
                    <h4>Pemograman</h4>
                    <p>masihs dikerjakan</p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="glyphicon glyphicon-cloud"></i>
                    <h4>Jaringan Komputer</h4>
                    <p>masih dikerjakan</p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="glyphicon glyphicon-camera"></i>
                    <h4>Multimedia</h4>
                    <p>masih dikerjakan</p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="glyphicon glyphicon-bullhorn"></i>
                    <h4>English Club</h4>
                    <p>masih dikerjakan</p>
                </div>
                </div>
        </div>
    </div> <!-- /.service -->

    <!-- fourth section Information -->
    <div id="information" class="pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title">tempat information</h2>
                        </div>
                            <div class="panel-body lead">
                                masih dikerjakan
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title">tempat information</h2>
                        </div>
                            <div class="panel-body lead">
                                masih dikerjakan
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.information -->

    <!-- fifth section -->
    <div id="services" class="pad-section">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">
                <!-- <h3>Parallax scrolling effect is in action</h3> -->
                <h4>Address on Google maps</h4>
            </div>
            </div>
        </div>
    </div>
    <!-- /.fifth section -->

    <!-- google map -->
    <div id="google_map"></div>
    <!-- /.google map -->

    <!-- footer -->
    <footer>
        <hr>
        <div class="container">
            <p class="text-right">
                <img src="images/logo.jpg" class="img-circle sample shadow-z-2 img-footer">
                <img src="images/ik.jpg" class="img-circle sample shadow-z-2 img-footer">
                Copyright &copy; Team UKM Informatika & Komputer 2015
            </p>
        </div>
    </footer>
    <!-- /.footer -->
</body>
</html>
