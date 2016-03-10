<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EMS Contact</title>

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
                <li><a href="login.php">Login</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--/Nav-->
<!--contact-->

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2>Address</h2>
                <address>
                    Coders Trust,Bangladesh <br>
                    Hosna Villa, House - 82 <br>
                    Block - E, Road - 19, Banani. <br>
                    Email: ctbd@coderstrust.com <br>
                    Phone: 1516171819
                </address>
            </div>
            <div class="col-sm-5">
                <form>
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="email" class="form-control" id="exampleInputName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <label for="exampleInput">Message</label>
                    <textarea class="form-control" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--/contact-->
<!--map-->

<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d116834.13673771221!2d90.41932575!3d23.780636450000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1456205074332" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<!--/map-->
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