<?php

//Establishing connection with the server
$connection=mysqli_connect('localhost','root','');


if (!$connection) {
	die('Could not connect to the Database'.mysqli_error());
}
echo 'Connected successfully.<br />';

/*
//creating database
$sql='CREATE DATABASE IF NOT EXISTS Reg_db';
$retval=mysqli_query($sql,$connection);
if (!$retval) {
	die('Could not create database:'.mysqli_error());
}
echo 'Database was successfully created.<br />';
*/

//Selecting database
$db=mysql_select_db('Registration_db',$connection);

/*
//creating table
$sqlTable='CREATE TABLE IF NOT EXISTS Reg_tb('.
'ID INT(10) NOT NULL AUTO_INCREMENT,'.
'NAME VARCHAR(255) NOT NULL'.
'EMAIL VARCHAR(255) NOT NULL,'.
'PASSWORD VARCHAR(255) NOT NULL,'.
'PRIMARY KEY(ID))';
*/

//fetching values from URL
$name=$_POST['name1'];
$email=$_POST['email1'];
$password=($_POST['password1']); //Password encryption

//check if email address syntax is valid or not
$email=filter_var($email, FILTER_SANITIZE_EMAIL); //Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo 'Invalid Email!';
}else{
	$result=mysql_query("SELECT * FROM Registration_tb WHERE email='$email'");
	$data=mysql_num_rows($result);

	if (($data)==0) {
		//Insert query
		$query=mysql_query("INSERT INTO Registration_tb(name,email,password) VALUES('$name','$email','$password')");
		if ($query) {
			echo "You have successfully registered";
		}else{
			echo "Error";
		}
	}else{
		echo "This email is already registered, Please try another email.";
	}

	//connection closed
	mysql_close($connection);
}
?>