<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- attch css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-material/dist/css/material.min.css">
    <link rel="stylesheet" href="node_modules/css/style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- attch javascript -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap-material/dist/js/material.min.js"></script>
    <!--<script src="//maps.google.com/maps/api/js?sensor=true"></script>-->
    <script type="text/javascript" src="node_modules/jquery/jquery-1.11.0.min.js"></script>
    <script src="node_modules/ckeditor/ckeditor.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <!-- navbar panel -->
    <nav class="navbar navbar-default " role="navigation">
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
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <div id="menu-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-success">
                          <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                                <li><a href="#"><span class="glyphicon " aria-hidden="true"></span> Home</a></li>
                                <li><a href="?page=writearticle"><span class="glyphicon " aria-hidden="true"></span> Pos Article</a></li>
                                <li><a href="#"><span class="glyphicon " aria-hidden="true"></span> List Pos</a></li>
                                <li><a href="#"><span class="glyphicon " aria-hidden="true"></span> Profil</a></li>
                                <li><a href="#"><span class="glyphicon " aria-hidden="true"></span> Setting</a></li>
                                <li><a href="#"><span class="glyphicon " aria-hidden="true"></span> About</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                                include 'include/article.php';
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
