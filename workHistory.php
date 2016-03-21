<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EMS Working History</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
                <li><a href="employee.php">Attendance</a></li>
                <li><a href="myprofile.php">My Profile</a></li>
                <li><a href="addEmployee.php">Add Employee</a></li>
                <li><a href="employeeStatus.php">Employee Status</a></li>
                <li><a href="leaveManagement.php">Leave Management</a></li>
                <li><a href="workHistory.php">Working Hour</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--/Nav-->
<!--working history-->

<div id="adminrole">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2">
                <label for="">Form :</label>
                <input type="text" name="dateOfBirth" class="form-control" id="datepicker">
            </div>
            <div class="col-sm-4">
                <label for="">To :</label>
                <input type="text" name="dateOfBirth" class="form-control" id="datepicker">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover">
                    <tr>
                        <td>Date</td>
                        <td>Hour</td>
                        <td>Over Time</td>
                        <td>Less Time</td>
                        <td>Reson</td>
                    </tr>
                    <tr>
                        <td>01-01-2016</td>
                        <td>10 hours</td>
                        <td>2 hours</td>
                        <td>0</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>02-01-2016</td>
                        <td>5 hours</td>
                        <td>0</td>
                        <td>3 hours</td>
                        <td>Reson written by Employee</td>
                    </tr>
                </table>
                <p class="text-center">Total Over Time 3 hours</p>
            </div>
        </div>
    </div>
</div>

<!--/working history-->

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
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<script src="js/main.js"></script>
</body>
</html>