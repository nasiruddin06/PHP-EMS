<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EMS View On Click</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--Nav-->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">EMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Attendance</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Add Employee</a></li>
                <li><a href="#">Employee Status</a></li>
                <li><a href="#">Leave Management</a></li>
                <li><a href="#">Working Hour</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--/Nav-->
<!--My Profile-->

<div id="clickview">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <p> Name:Linkon Islam</p>
                <p> Designation:Mentor</p>
                <p> E-mail:linlon@coderstrust.com</p>
                <p> Address:Dhaka,1205</p>
                <p> Age:26years</p>
                <p> Gender:Male</p>
                <p> Mobile:01700000000</p>
            </div>
            <div class="col-sm-3">
                <img src="images/Car(1).jpg" alt="" class="img-responsive pull-right">
            </div>
        </div>
    </div>
</div>

<!--/My Profile-->

<!--Footer-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>&copy;nasir 2016 | All Right Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!--/Footer-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>