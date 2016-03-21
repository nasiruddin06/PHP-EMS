<?php
session_start();

if ($_SESSION['login'] != "True"){
  $string = 'Sorry! You have to login first to view this page.';
    echo "<script> alert(\"$string\")</script>>";
    echo "<script>location.href='login.php'</script>>";
}
else{
    $e_id = $_SESSION['userId'];

    include('pdo_connection.php');
    include('database_config.php');
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
}

date_default_timezone_set('Asia/Dhaka');

if(isset($_POST['save']))
{
    $timeupdate = $_POST['timeInOut'];
    $message = $_POST['reson'];
    $Date = date('y-m-d');
    $check = "SELECT count(*) AS count FROM work_history WHERE e_id='$e_id' AND date='$Date'";
    $store = $dbcon->query($check);

    $cnt = $store->fetch(PDO::FETCH_ASSOC);
    $tcnt = $cnt['count'];


    if ($timeupdate == 'inTime' && $tcnt == 0 )
    {
        $time = date('H:i');
        $insert = "INSERT INTO work_history (e_id, check_in_time, check_out_time, reason, date) VALUES ('$e_id', '$time', '00:00:00', '$message', '$Date')";
        $dbcon->query($insert);
        $str = 'Your Time has been set';
        echo "<script>alert(\"$str\")</script>";
        echo ("<script>location.href = 'myprofile.php'</script>");
    }
    else {
        $in = 'Sorry you have already submit your time';
        echo "<script>alert(\"$in\")</script>";
        echo ("<script>location.href = 'myprofile.php'</script>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EMS Employee</title>

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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="myprofile.php">My Profile</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--/Nav-->
<!--employee-->

<div id="employee">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h2>In time / Out Time</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputInOut" class="sr-only">In time / Out time</label>
                        <select name="timeInOut" id="exampleInputInOut" class="form-control">
                            <option value="inTime">In Time</option>
                            <option value="outTime">Out Time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="sr-only">Reson</label>
                        <input type="text" name="reson" class="form-control" id="exampleInputReson" placeholder="Reson">
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--/employee-->

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