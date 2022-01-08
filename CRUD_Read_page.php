<?php
 
require('dbconnection.php');
 
$emp_id = null;
 
if(!empty($_GET['emp_id'])){
    $emp_id = $_REQUEST['emp_id'];
}
 
if(null == $emp_id){
    header("Location: CRUD_Landing_page.php");
}else{
    $sql = "SELECT * FROM employee_details WHERE emp_id=".$emp_id;
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    body{
    background-image:url(cheth.jpg); 
    background-size:cover; 
    background-repeat:no-repeat;
    }
    #data {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px #888888;
        width: 500px;
    }
    .row:hover{
    background-color:rgb(202, 75, 75);
    }
</style>
<body>
<div class="row">
    <p style="position: absolute; right:0; padding: 15px;">
        <a href="Logout_page.php" class="btn btn-danger">Logout</a>
    </p>
</div>
<div class="container" style="margin-top:20px;">
    <h3>Staff Data</h3>
    <a href="CRUD_Landing_page.php" class="btn btn-info pull-right">Back</a>
    <div id="data">
        <p>emp_id : <strong><?php echo $row['emp_id']; ?></strong></p>
        <p>First Name : <strong><?php echo $row['First_name']; ?></strong></p>
        <p>Last Name : <strong><?php echo $row['Last_name']; ?></strong></p>
        <p>Phone contact : <strong><?php echo $row['Phone_Contact']; ?></strong></p>
        <p>Email : <strong><?php echo $row['Email_address']; ?></strong></p>
        <p>Gender : <strong><?php echo $row['Gender']; ?></strong></p>
        <p>Home address : <strong><?php echo $row['Home_Address']; ?></strong></p>
        <p>Department Name : <strong><?php echo $row['Dept_name']; ?></strong></p>
    </div>
</div>
</body>
</html>