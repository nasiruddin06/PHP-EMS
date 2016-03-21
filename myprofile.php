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


    $sql = "SELECT * FROM employee_detail, employee_status WHERE employee_detail.e_id ='$e_id' AND employee_status.e_id='$e_id'";

    $data = $dbcon->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);

    $user_name = $row['name'];
    $user_designation = $row['designation'];
    $user_email = $row['email'];
    $user_addres = $row['address'];
    $user_age = $row['date_of_birth'];
    $user_gender = $row['gender'];
    $user_mob = $row['contact'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EMS My Profile</title>

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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--/Nav-->

<!--My Profile-->

<div id="myProfile">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Your Profile</h2>
            </div>
            <div class="col-sm-3">
                <a href="editprofile.php" class="btn btn-primary pull-right">Edit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
               <p> Name:<?php echo $user_name;?></p>
               <p> Designation:<?php echo $user_designation;?></p>
               <p> E-mail:<?php echo $user_email;?></p>
               <p> Address:<?php echo $user_addres;?></p>
               <p> Date of Birth:<?php echo $user_age;?></p>
               <p> Gender:<?php echo $user_gender;?></p>
               <p> Mobile:<?php echo $user_mob;?></p>
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