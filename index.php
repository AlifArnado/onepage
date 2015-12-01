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
    <!--<script src="//maps.google.com/maps/api/js?sensor=true"></script>-->
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
                <li><a href="#home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                <li><a href="#about"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> About</a></li>
                <li><a href="#services"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Open Class</a></li>
                <li><a href="#information"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Information</a></li>
                <li><a href="#google_map"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Map location</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.content-pluid -->
    </nav>

    <!-- first section home -->
    <div id="home" class="home">
        <div class="lapisan">
            <div class="text-vcenter">
                <div class="logo-header">
                    <img src="images/ik.jpg" class="img-circle sample shadow-z-2 img-head"><br>
                     <p class="name-ukm">Unit Kegiatan Mahasiswa Informatika dan Komputer Yogyakarta</p>
                     <p class="name-kampus">STMIK AKAKOM YOGYAKARTA</p>
                </div>
                <!-- <a href="#about" class="btn btn-default btn-lg">Continue</a> -->
            </div>
        </div>

    </div><!-- /.home -->


    <!-- second section About -->
    <div id="about" class="pad-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="images/ik.jpg" class="img-circle img-head-about" alt="" /><br>
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
        <div class="container-fluid">
            <div class="raw">
                <div class="col-md-4">
                <p class="text-center">
                    Information Sosial Network <br>
                    <a href="" title=""><img src="images/icon/flat-facebook.png" class="img-circle sample shadow-z-2 img-footer"></a>
                    <a href="" title=""><img src="images/icon/flat-twitter.png" class="img-circle sample shadow-z-2 img-footer"></a>
                    <a href="" title=""><img src="images/icon/flat-instagram.png" class="img-circle sample shadow-z-2 img-footer"></a>
                    <a href="" title=""><img src="images/icon/flat-youtube.png" class="img-circle sample shadow-z-2 img-footer"></a>
                </p>
                </div>
                 <div class="col-md-4">
                 <p class="text-center">
                    Copyright &copy; Team UKM Informatika & Komputer STMIK AKAKOM YOGYAKARTA 2015 <br>
                    <img src="images/logo.jpg" class="img-circle sample shadow-z-2 img-footer">
                    <img src="images/ik.jpg" class="img-circle sample shadow-z-2 img-footer">
                </p>
                </div>
                 <div class="col-md-4">
                 <p class="text-center">
                Contact us<br>
                    <ul class="list-group">
                        <li class="list-group-item">Email : </li>
                        <li class="list-group-item">Telephone : </li>
                        <li class="list-group-item">Alamat : </li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.footer -->
</body>
</html>
