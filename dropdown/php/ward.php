<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 22-Jan-17
 * Time: 1:29 PM
 */

include 'init.php';

if (isset($_POST['constituency'])){

    $constituency = $_POST['constituency'];

    $sql = "SELECT `ward` FROM `counties` WHERE `constituency`='$constituency'";
    $result = mysqli_query($conn,$sql);

    echo "<label class='col-md-3 control-label w3-label' for='ward'>Ward:</label>";
    echo "<div class='col-md-9'>";
    echo "<select class='form-control' id='ward' name='ward'>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<option>".$row['ward']."</option>";
    }
    echo "</select>";
    echo "</div>";
}