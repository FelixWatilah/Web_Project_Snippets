<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 06-Jan-17
 * Time: 11:23 PM
 */

$conn = mysqli_connect("localhost","root","","db_image");

$email = $_GET['email'];

$delete = mysqli_query($conn,"DELETE FROM `image` WHERE email='$email'");

if ($delete){
    echo "<script> alert('Deleted Successful');</script>";
    echo "<script>window.location.assign('../index.html');</script>";
}else{
    echo "Failed";
}
