<?php
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['add']))
{
    $Id = $_POST['E_id'];
    $Name = $_POST['userName'];
    $Email = $_POST['userEmail'];
    $Pass = $_POST['userPassword'];
    $Nid = $_POST['userNid'];
    $Dofb = $_POST['dateOfBirth'];
    $Bgroup = $_POST['bloodGroup'];
    $UserRol = $_POST['optionsRadio'];
    $Gend = $_POST['optionsRadios'];
    $Addess = $_POST['address'];
    $Mob = $_POST['mob'];
    $Father = $_POST['fName'];
    $Mother = $_POST['mName'];
    $Img = $_POST['Image'];

    $sql = "INSERT INTO employee_detail(e_id, name, email, password, user_role, gender, date_of_birth, blood_group, address, contact, 	image, 	nid, father_name, 	mother_name ) VALUES ('$Id', '$Name', '$Email', '$Pass','$UserRol', '$Gend', '$Dofb', '$Bgroup', '$Addess', '$Mob', '$Img', '$Nid', '$Father', '$Mother')";


    if ($dbcon->query($sql))
    {
        echo("<script>location.href='addEmployee.php'</script>");
    }
    else {
        $string = ' Sorry! Try again.\n';
        echo "<script>alert(\"$string\")</script>";
        echo("<script>location.href='login.php'</script>");
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
    <title>EMS Add Employee</title>

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
<!--Add Employee-->

<div id="AddEmployee">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h2>Add Employee Details</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="name">E-ID</label>
                        <input type="text" name="E_id" class="form-control" id="eId">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="userName" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="Designation">Password</label>
                        <input type="password" name="userPassword" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="address">NID :</label>
                        <input type="text" name="userNid" class="form-control" id="nId">
                    </div>
                        <label for="">Date of Birth :</label>
                        <input type="text" name="dateOfBirth" class="form-control" id="datepicker">
                    <div class="form-group">
                        <label for="address">Blood Group :</label>
                        <input type="text" name="bloodGroup" class="form-control" id="bGroup">
                    </div>
                    <div class="radio">
                        <lebel>User Role</lebel>
                        <br>
                        <label>
                            <input type="radio" name="optionsRadio" id="options1" value="admin" checked>
                            Admin
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadio" id="options2" value="employee">
                            Employee
                        </label>
                    </div>
                    <div class="radio">
                        <lebel>Gender</lebel>
                        <br>
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Female
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text"  name="address" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="address">Mobile No:</label>
                        <input type="text" name="mob" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="name">Father's Name</label>
                        <input type="text" name="fName" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="name">Mother's Name</label>
                        <input type="text" name="mName" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Input Image</label>
                        <input type="file" name="Image" id="exampleInputFile">
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--/Add Employee-->

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