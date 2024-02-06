<?php
require ('db_con.php');
?>

<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="row mt-5">
    
        <div class="col">
            <?php include 'message.php'; ?>
            <div class="card">
                <div class="card-header">
                    <h4>Student Details <a href="student_create.php" class="btn btn-primary float-end">Add Student</a></h4> 
                </div>
                <div class="card-body">
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "SELECT * FROM Students";
                            $query_run = mysqli_query($con, $sql);
                            if(mysqli_num_rows($query_run)>0)
                            {
                                foreach($query_run as $student){ ?> 
                                <tr>
                                <td><?php echo $student['id']; ?></td>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['phone']; ?></td>
                                <td><?php echo $student['course']; ?></td>
                                <td>
                                    <a href="student_view.php?id= <?php echo $student['id']; ?>" class="btn btn-info">View</a>
                                    <a href="student_edit.php?id= <?php echo $student['id']; ?>" class="btn btn-success">Edit</a>
                                    <form action="code.php" method="POST" class="d-inline">
                                    <button name="delete_student" value="<?php echo $student['id'];?>" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                </tr>
                            <?php } }else
                            { 
                                echo "<h4>No records found</h4>";
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    

<?php include 'includes/footer.php'; ?>