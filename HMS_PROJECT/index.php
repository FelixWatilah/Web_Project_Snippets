<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 29-Jan-17
 * Time: 10:40 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hostel Management System</title>
    <script type="text/javascript" src="framework/modernizr/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="framework/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="framework/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="framework/Hover/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="framework/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="framework/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" type="text/css" href="framework/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" type="text/css" href="framework/lightbox/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/w3css.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<!--==========
//NAV BAR//
==========-->
<nav class="navbar navbar-default" id="nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><strong><i class="fa fa-hotel"></i>&nbsp;HOSTEL MANAGEMENT SYSTEM</strong></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#"><i class="fa fa-map-pin">&nbsp;Mission</i></a></li>
            <li><a href="#"><i class="fa fa-eye-slash">&nbsp;Vision</i></a></li>
            <li><a href="#"><i class="fa fa-phone-square">&nbsp;Contact</i></a></li>
            <li><a href="#"><i class="fa fa-info-circle">&nbsp;About Us</i></a></li>
        </ul>
    </div>
</nav>

<!--==========
//MAIN CONTENT//
==========-->
<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="panel panel-default" id="side-bar">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-power-off">&nbsp;Login Option</i></h4>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item"><i class="fa fa-user"></i>&nbsp;Administrator</a>
                        <a href="pages/student_login.php" class="list-group-item login-option"><i class="fa fa-users"></i>&nbsp;Student</a>
                        <a href="pages/guest_login.php" class="list-group-item login-option"><i class="fa fa-user-o"></i>&nbsp;Guest</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9" id="content">
            <div class="panel panel-success login-area">
                <div class="panel-heading">
                    <h4 class="panel-title"><strong>ADMINISTRATOR</strong></h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="pages/admin_panel.php" method="post">
                        <div id="form">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="admin">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="text" class="form-control" name="password" placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="w3-btn btn btn-success" href="#">
                                    <i class="fa fa-sign-in">&nbsp;</i>SIGN IN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <small class="text-muted">In case of a problem, contact <strong>0712423121</strong> for appropriate assistance</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==========
//FOOTER//
==========-->
<footer class="container-fluid">

</footer>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="framework/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="framework/circliful/js/jquery.circliful.min.js"></script>
<script type="text/javascript" src="framework/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="framework/lightbox/js/lightbox.js"></script>
<script type="text/javascript" src="framework/moment/moment-with-locales.min.js"></script>
<script type="text/javascript" src="framework/WOW/wow.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
