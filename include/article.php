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
    <div class="bs-callout bs-callout-success" id="callout-btn-group-tooltips">
        <h4>You Con Write Post Article</h4>
        <p>Form Ready for wirte Article</p>
    </div>
    <textarea name="article" rows="8" cols="20" class="ckeditor">
        <script>
            CKEDITOR.replace('editor1', {
                skin: 'monocolor,/myskins/monocolor/'
            });
        </script>
    </textarea>
    <button type="button" class="btn btn-primary">POST</button>
    <button type="button" class="btn btn-warning">CANCEL</button>
</body>
