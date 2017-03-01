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
    <script type="text/javascript" src="../framework/modernizr/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/Hover/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="../framework/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/lightbox/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../css/w3css.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
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
//ADMIN PANEL//
==========-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav" id="admin-nav">
            <li class="rooms"><a href="#">&nbsp;Rooms</a>
                <ul>
                    <li><a href="#">Add Rooms</a></li>
                    <li><a href="#">View Rooms</a></li>
                    <li><a href="#">Allot Rooms</a></li>
                    <li><a href="#">View Room Allotment</a></li>
                </ul>
            </li>
            <li class="students"><a href="#">&nbsp;Students</a>
                <ul>
                    <li><a href="#">Add Students</a></li>
                    <li><a href="#">View Students</a></li>
                    <li><a href="#">View Registration</a></li>
                    <li><a href="#">Mess Card</a></li>
                    <li><a href="#">View Mess Card</a></li>
                </ul>
            </li>
            <li class="reports"><a href="#">&nbsp;Reports</a>
                <ul>
                    <li><a href="#">View Fees</a></li>
                    <li><a href="#">View Mess Bill</a></li>
                    <li><a href="#">View Billing</a></li>
                </ul>
            </li>
            <li class="settings"><a href="#">&nbsp;Settings</a>
                <ul>
                    <li><a href="#">Add Employee</a></li>
                    <li><a href="#">View Employee</a></li>
                    <li><a href="#">Add Course</a></li>
                    <li><a href="#">View Courses</a></li>
                    <li><a href="#">Add Blocks</a></li>
                    <li><a href="#">View Blocks</a></li>
                    <li><a href="#">Add Fee Type</a></li>
                    <li><a href="#">View Fee Type</a></li>
                </ul>
            </li>
            <li class="profile"><a href="#">&nbsp;Profile</a>
                <ul>
                    <li><a href="#">View Profile</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Change Password</a></li>
                </ul>
            </li>
            <li class="logout"><a href="#">&nbsp;Logout</a></li>
        </ul>
    </div>
</nav>

<!--==========
//MAIN CONTENT//
==========-->
<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-12 col-md-12" id="content">

        </div>
    </div>
</div>

<!--==========
//FOOTER//
==========-->
<footer class="container-fluid">

</footer>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript" src="../framework/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../framework/circliful/js/jquery.circliful.min.js"></script>
<script type="text/javascript" src="../framework/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../framework/lightbox/js/lightbox.js"></script>
<script type="text/javascript" src="../framework/moment/moment-with-locales.min.js"></script>
<script type="text/javascript" src="../framework/WOW/wow.min.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>
