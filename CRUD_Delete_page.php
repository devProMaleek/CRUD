<?php
 
//include connection file
include('dbconnection.php');
 
$emp_id = null;
 
if(!empty($_GET['emp_id'])){
    $emp_id = $_REQUEST['emp_id'];
}
 
if ( null==$emp_id ) {
    header("Location: CRUD_Landing_page.php");
}
 
//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $emp_id = $_POST['emp_id'];
 
    $sql = "DELETE FROM employee_details WHERE emp_id=".$emp_id;
    $query = mysqli_query($con, $sql);
 
    if($query){
        header("Location: CRUD_Landing_page.php");
    }
    if(!$query){
        die("DAMMIT");
    }else{ echo "Success";}
    if($query){
        header("Location: CRUD_Landing_page.php");
        exit();
    }else{
        echo "Something went wrong. Please try again later.";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD_Delete_page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
    body{
        background-image:url(cheth.jpg); 
        background-size:cover; 
        background-repeat:no-repeat;
    }
    .rows:hover{
    background-color:rgb(202, 75, 75);

}
></style>
</head>
<body>
<div class="rows">
    <p style="position: absolute; right:0; padding: 15px;">
        <a href="Logout_page.php" class="btn btn-danger">Logout</a>
    </p>
</div>

<div class="container">
 
        <div class="row">
            <h3>Delete a Staff details</h3>
        </div>
 
        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="hidden" name="emp_id" value="<?php echo $emp_id;?>"/>
            <p class="alert alert-danger">Are you sure you want to delete this?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger">Yes</button>
                <a class="btn btn-default" href="CRUD_Landing_page.php">No</a>
            </div>
        </form>
</div>
</body>
</html>