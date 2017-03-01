<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 30-Dec-16
 * Time: 4:54 PM
 */

include 'init.php';

if (isset($_POST['county'])){

    $county = $_POST['county'];

    $sql = "SELECT `constituency` FROM `counties` WHERE `county`='$county'";
    $result = mysqli_query($conn,$sql);

    echo "<label class='col-md-3 control-label w3-label' for='constituency'>Constituency:</label>";
    echo "<div class='col-md-9'>";
    echo "<select class='form-control' id='constituency' name='constituency'>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<option>".$row['constituency']."</option>";
    }
    echo "</select>";
    echo "</div>";

}
