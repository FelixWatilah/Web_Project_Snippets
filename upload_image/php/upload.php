<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 03-Jan-17
 * Time: 11:03 AM
 */

$conn = mysqli_connect("localhost","root","","db_image");

/*
function output_errors($error){
    echo $error;
}
*/

$msg = "";
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_FILES['image'])){

    $name = mysqli_real_escape_string($conn, htmlentities(strip_tags($_POST['name'])));
    $email = mysqli_real_escape_string($conn, htmlentities(strip_tags($_POST['email'])));
    $phone = mysqli_real_escape_string($conn, htmlentities(strip_tags($_POST['phone'])));

    $pic_tmp = $_FILES['image']['tmp_name'];
    $pic_name = $_FILES['image']['name'];
    $pic_type = $_FILES['image']['type'];

    $allowed_type = array('image/png', 'image/jpg', 'image/gif', 'image/jpeg');

    if (in_array($pic_type, $allowed_type)){
        $path = '../img/'.$pic_name;
    }else{
        $msg = 'File type not allowed';
    }

    if (!is_numeric($phone)){
        $msg = $phone.'is not numeric';
    }

    if (!empty($msg)){
        echo $msg;
    }elseif (empty($msg)){
        $msg = "";
        $sql = "INSERT INTO `image` (`name`, `email`, `phone`, `image`) VALUES('$email', '$name', '$phone', '$path')";
        move_uploaded_file($pic_tmp, $path);

        if (mysqli_query($conn, $sql)){
            echo "<script> alert('Successful');</script>";
            echo "<script>window.location.assign('../index.html');</script>";
        }else{
            echo mysqli_error($conn);
        }
    }
}