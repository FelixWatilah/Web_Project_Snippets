<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fa/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<!--<div class="container-fluid">-->
<div class='panel panel-success'>
    <div class='panel-heading'>
        <div class='row'>
            <div class='col-md-12 col-sm-12'>
                <h4 class='panel-title text-center'>Update Student Details.</h4>
            </div>
        </div>
    </div><!-- end panel-heading -->
    <div class='panel-body'>
        <form class='form-horizontal' role='form' action='../php/update.php' method='POST'>
            <div class="col-md-8 col-sm-8">
                <div class='form-group'>
                    <label class="col-md-3 col-sm-3">Admission Number:</label>
                    <div class='col-md-7 col-sm-7'>
                        <input type='text' class='form-control' name='search' id='search' placeholder='CIT-221-010/2014'>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for='search_input' class="col-md-2 col-sm-2"><button type='submit' class='btn btn-default reg' name="search_upd" id='search_button'><i class="fa fa-search"></i>&nbsp;Search</button></label>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['search_upd'])){

            $search = $_POST['search'];

            include "phpconfig/db_config.php";

            mysqli_select_db($conn,'student');

            $sql = "SELECT * FROM `student` WHERE `adm_no` = '$search'";
            $result = mysqli_query($conn,$sql);

            while ($row = mysqli_fetch_assoc($result)){
                if ($search ===$row['adm_no']){

                    $full_name=$row['full_name'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $adm_no=$row['adm_no'];
                    $academic_year=$row['academic_year'];
                    $dob=$row['dob'];
                    $gender=$row['gender'];
                    $student_type=$row['student_type'];
                    $county=$row['county'];
                    $town=$row['town'];
                    $address=$row['address'];
                    $category=$row['category'];
                    $tribe=$row['tribe'];

                    echo "<form class='form-horizontal' action='update_new_student.php' method='post' id='add_new_form'>
                        <div class='row'>
                        <div class='col-md-6 col-sm-6'>
                        <section >
                        <!--==form-groups==-->
                        <div class='form-group'>
                        <label for='full_name' class='control-label col-md-3 col-sm-3'>Full Name:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='text' class='form-control' name='full_name' value='$full_name' id='full_name' placeholder='Felix Watilah' disabled='disabled'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='email' class='control-label col-md-3 col-sm-3'>Email:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='email' class='form-control' name='email' value='$email' id='email' placeholder='fwatilah@gmail.com'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='phone' class='control-label col-md-3 col-sm-3'>Phone:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='text' class='form-control' name='phone' value='$phone' id='phone' placeholder='0790388511'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='adm_no' class='control-label col-md-3 col-sm-3'>Adm No:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='text' class='form-control' name='adm_no' value='$adm_no' id='adm_no' placeholder='CIT-221-010/2014' disabled='disabled'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='academic_year' class='control-label col-md-3 col-sm-3'>Academic Year:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='text' class='form-control' name='academic_year' value='$academic_year' id='academic_year' placeholder='Y3S1'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='dob' class='control-label col-md-3 col-sm-3'>D.O.B:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='text' class='form-control' name='dob' value='$dob' id='dob' placeholder='01/01/1900'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label class='control-label col-md-3 col-sm-3'>Gender:</label>
                        <div class='col-md-9 col-sm-9'>
                        <label for='male' class='control-label radio-inline'><input type='radio' class='radio gender' name='gender' id='male' value='male' checked='checked'>Male</label>
                        <label for='female' class='control-label radio-inline'><input type='radio' class='radio gender' name='gender' id='female' value='female'>Female</label>
                        </div>
                        </div>
                        <!--==end form-groups==-->
                        </section><!-- end form-horizontal -->
                        </div><!-- end col-md-6 -->
                        <div class='col-md-6 col-sm-6'>
                        <section>
                        <!--==form-groups==-->
                        <div class='form-group'>
                        <label for='student_type' class='control-label col-md-3 col-sm-3'>Student Type:</label>
                        <div class='col-md-9 col-sm-9'>
                        <select id='student_type' class='form-control' name='student_type' disabled='disabled'>
                        <option value='Regular' selected='selected'>Regular</option>
                        <option value='Self-Sponsored'>Self-Sponsored</option>
                        </select>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='county' class='control-label col-md-3 col-sm-3'>County:</label>
                        <div class='col-md-9 col-sm-9'>
                        <select class='form-control' id='county' name='county'>
                        <option value='Trans-Nzoia' selected='selected'>Trans-Nzoia</option>
                        <option value='Nairobi'>Nairobi</option>
                        </select>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='town' class='control-label col-md-3 col-sm-3'>Town:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='text' class='form-control' name='town' value='$town' id='town' placeholder='Kitale'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='address' class='control-label col-md-3 col-sm-3'>Address:</label>
                        <div class='col-md-9 col-sm-9'>
                        <input type='text' class='form-control' name='address' value='$address' id='address' placeholder='200 - 30200 Kitale'>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='category' class='control-label col-md-3 col-sm-3'>Category:</label>
                        <div class='col-md-9 col-sm-9'>
                        <select class='form-control' id='category' name='category'>
                        <option value='Boarder' selected='selected'>Boarder</option>
                        <option value='Day Scholar'>Day Scholar</option>
                        </select>
                        </div>
                        </div>
                        <div class='form-group'>
                        <label for='tribe' class='control-label col-md-3 col-sm-3'>Tribe:</label>
                        <div class='col-sm-9'>
                        <input type='text' class='form-control' name='tribe' value='$tribe' id='tribe' placeholder='Luhya'>
                        </div>
                        </div>
                        <!-- ==end form-groups== -->
                        </section><!-- end form-horizontal -->
                        </div><!-- end col-md-6 -->
                        </div><!-- end row -->
                        <div class='form-group text-center' id='buttons'>
                        <input role='button' type='submit' class='btn btn-primary fbtn' name='update' id='update' value='Update'>
                        <input role='button' type='button' class='btn btn-danger fbtn' id='exit' value='Exit'>
                        </div><!-- end buttons -->
                        </form><!-- end form-horizontal -->";
                }else{
                    header("update.php");
                }
            }
            mysqli_close($conn);
        }
        ?>
    </div><!-- end panel-body -->
    <div class='panel-footer'>
        <h5 class='text-danger text-center'>
            <strong class='text-danger'>&nbsp;<a href='https://www.facebook.com/'><i class='fa fa-2x fa-facebook-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            <strong class='text-danger'>&nbsp;<a href='#'><i class='fa fa-2x fa-github-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            <strong class='text-danger text-capitalize'>&nbsp;<a href='#'><i class='fa fa-2x fa-twitter-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
        </h5>
    </div>
</div><!-- end panel -->
<!--</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>-->