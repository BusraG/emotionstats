<html ng-app="emotionStatsApp">
<head>
    <title>Homepage</title>
    <link href="styles/main.css" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Hook <span class="glyphicon glyphicon-menu-hamburger"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class="container-fluid">
    <div class="col-md-2">
        <div class="left">
            <div class="item">
                <span class="glyphicon glyphicon-th-large"></span>
                Dashboard
            </div>
            <div class="item active">
                <span class="glyphicon glyphicon-heart"></span>
                My Moods
            </div>
            <div class="item">
                <span class="glyphicon glyphicon-user"></span>
                Employees
            </div>
        </div>
    </div>


<div ng-view></div>

<script type="text/javascript" src="lib/angular.min.js"></script>
<script type="text/javascript" src="lib/angular-route.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="lib/bootstrap.min.js"></script>
<script type="text/javascript" src="controllers/homeController.js"></script>
<script type="text/javascript" src="mymood/mymoodController.js"></script>
</body>

</html>