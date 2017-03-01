<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 29-Sep-16
 * Time: 14:18
 */

//Establishing connection with the server
$conn=mysqli_connect('localhost','root','');

//Fetching values from URL
if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    //Check if email address syntax is valid or not
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);

    //creating database
    $sqldb='CREATE DATABASE IF NOT EXISTS `Clients`';
    $retval=mysqli_query($conn, $sqldb);

    //Selecting database
    mysqli_select_db($conn,'Clients');

    //creating table
    $sqltb="CREATE TABLE IF NOT EXISTS `Info` (`NAME` VARCHAR(40) NOT NULL, `EMAIL` VARCHAR(40) NOT NULL, `PHONE` INT NOT NULL, `MESSAGE` VARCHAR(255) NOT NULL, PRIMARY KEY(`EMAIL`))";
    mysqli_query($conn, $sqltb);

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Invalid Email";
    }else{
        //determine number of rows result set
        $result = mysqli_query($conn, "SELECT * FROM `Info` WHERE `email`='$email'");
        $data = mysqli_num_rows($result);

        //close result set
        mysqli_free_result($result);

        if($data == 0){
            //Insert Query
            $query = mysqli_query($conn, "INSERT INTO Info(name,email,phone,message) VALUES('$name','$email','$phone','$message')");
            if($query){
                echo "<div class='text-success'>Message sent.</div>";
            }else{
                echo "<div class='text-danger'>There is an error.</div>".mysqli_error($conn);
            }
        }else{
            echo "<div class='text-danger'>This Email already exists</div>";
        }

        //closing the connection
        mysqli_close($conn);
    }
}else{
    echo "<div class='text-danger'>Nothing is set.</div>";
}

?>