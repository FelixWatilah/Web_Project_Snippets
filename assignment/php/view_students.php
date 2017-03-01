<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 10/28/2016
 * Time: 7:15 PM
 */
include "phpconfig/db_config.php";

mysqli_select_db($conn,'student');

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);


echo"<div class='panel panel-success'>
<div class='panel-heading'><h4 class='panel-title text-center'>List of Registered students</h4></div>
<div class='panel-body'>
<table class='table table-striped table-condensed table-responsive table-hover'>
<tr class='danger text-danger'>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Adm No</th>
<th>Y.O.S</th>
<th>Gender</th>
<th>Type</th>
<th>Category</th>
<th>Delete</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)){
    echo"
     <tr>
     <td>".strtoupper($row['full_name'])."</td>
     <td>".strtolower($row['email'])."</td>
     <td>".strtoupper($row['phone'])."</td>
     <td>".strtoupper($row['adm_no'])."</td>
     <td>".strtoupper($row['academic_year'])."</td>
     <td>".strtoupper($row['gender'])."</td>
     <td>".strtoupper($row['student_type'])."</td>
     <td>".strtoupper($row['category'])."</td>
     <td><a href='../php/delete_stud.php?email=".$row['email']."'><i class='fa fa-trash text-danger fa-fw'></i></a></td>
     </tr>";
}
echo"</table>
</div>
    <div class='panel-footer'>
            <h5 class='text-danger text-center'>
                <strong class='text-danger'>&nbsp;
                <a href='https://www.facebook.com/'><i class='fa fa-2x fa-facebook-square text-success sb'>&nbsp;</i></a>&nbsp;
                </strong>
                <strong class='text-danger'>&nbsp;
                <a href='#'><i class='fa fa-2x fa-github-square text-success sb'>&nbsp;</i></a>&nbsp;
                </strong>
                <strong class='text-danger text-capitalize'>&nbsp;
                <a href='#'><i class='fa fa-2x fa-twitter-square text-success sb'>&nbsp;</i></a>&nbsp;
                </strong>
            </h5>
    </div>
</div>";

mysqli_free_result($result);

mysqli_close($conn);

?>