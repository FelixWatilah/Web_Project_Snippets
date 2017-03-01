<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 04-Jan-17
 * Time: 10:49 AM
 */

$conn = mysqli_connect("localhost", "root", "", "jquery");
/*
if (isset($_POST['name']) && is_array($_POST['name'])){

    $name = implode(",", $_POST['name']);

    echo $name;

}

*/
$arr = array('Felix',2,3,4,5,6,7,8,9,10);

foreach ($arr as $num){
    //$ar = $_POST[$num];

    $sql = mysqli_query($conn, "INSERT INTO `array` (`num`) VALUES ('$num')");

    if($sql){
        echo "Successful";
    }else{
        echo "Failed".mysqli_error($conn);
    }

}
