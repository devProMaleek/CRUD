<?php
$host="localhost"; //Add your SQL Server host here
$user="root"; //SQL Username
$pass=""; //SQL Password
$dbname="cheth_staff"; //SQL Database Name
//Connect your database
$con = mysqli_connect($host, $user, $pass, $dbname);
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Set your timezone
date_default_timezone_set('Africa/Lagos');
$error="";





// $Firstname = $_POST['fname'];
// $Lastname = $_POST['lname'];
// $Phonecontact = $_POST['contact'];
// $email = $_POST['email'];
// $gender = $_POST['gender'];
// $homeaddress = $_POST['homeaddress'];
// $deptname = $_POST['Department'];

// $sql="INSERT INTO employee_details(First_name,Last_name,Phone_Contact,Email_address,Gender,Home_Address,Dept_name) 
//     VALUES('$Firstname', '$Lastname', '$Phonecontact', '$email', '$gender', '$homeaddress', '$deptname')";
//     $query = mysqli_query($con, $sql);
// ?>

