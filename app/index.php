<!DOCTYPE HTML>
<html lang="en" ng-app='App'>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=egde"/>
    <title>NS Minecraft Panel</title>


    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular-route.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular-resource.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootswatch/3.3.6/superhero/bootstrap.min.css">-

    <link href="css/nsminecraft.css" rel="stylesheet">


    <script src="app.js"></script>
    <script src="js/services.js"></script>
    <script src="js/routes.js"></script>
    <script src="js/controllers.js"></script>


</head>

<body class="container">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#/view1">Home</a></li>
                <li><a href="#/home">Login</a></li>
                <li><a href="#/register">Register</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-sm-2">

        </div><!--/span-->
        <div class="col-sm-12">
            <div class="jumbotron">
                <h1>NSMinecraft Panel v1</h1>
                <p>Currently just the structure</p>
            </div>


            <div class="row-fluid" ng-view>

            </div>

        </div><!--/span-->
    </div><!--/row-->

</div><!--/.fluid-container-->

</body>
</html>
