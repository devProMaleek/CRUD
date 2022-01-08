<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing page</title>
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
</style>
</head>
<body>
<div class="rows">
    <p style="position: absolute; right:0; padding: 15px;">
        <a href="Logout_page.php" class="btn btn-danger">Logout</a>
    </p>
</div>

<div class="container">
    <div class="row">
        <h3>EMPLOYEE DETAILS</h3>
    </div>
 
    <div class="row">
        <p>
            <a href="CRUD_Create_page.php" class="btn btn-success">Add Employee</a>
        </p>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <td>Emp_id</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Phone Contact</td>
                <td>Email</td>
                <td>Gender</td>
                <td>Home Address</td>
                <td>Department Name</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            <?php
            include('dbconnection.php');
            $sql_query = "SELECT * FROM employee_details ORDER BY emp_id DESC";
            $query = mysqli_query($con, $sql_query);
            while ($row = mysqli_fetch_assoc($query)){
                echo '<tr>';
                    echo '<td>'.$row['emp_id'].'</td>';
                    echo '<td>'.$row['First_name'].'</td>';
                    echo '<td>'.$row['Last_name'].'</td>';
                    echo '<td>'.$row['Phone_Contact'].'</td>';
                    echo '<td>'.$row['Email_address'].'</td>';
                    echo '<td>'.$row['Gender'].'</td>';
                    echo '<td>'.$row['Home_Address'].'</td>';
                    echo '<td>'.$row['Dept_name'].'</td>';
                    echo '<td>
                                <a href="CRUD_update_page.php?emp_id='.$row['emp_id'].'" class="btn btn-success">Update</a>
                                <a href="CRUD_Read_page.php?emp_id='.$row['emp_id'].'" class="btn btn-default">Read</a>
                                <a href="CRUD_Delete_page.php?emp_id='.$row['emp_id'].'" class="btn btn-danger">Delete</a>
                            </td>';
                echo '</tr>';
            } 
            ?>
            </tbody>
        </table>
    </div>
</div>
 
</body>
</html>
