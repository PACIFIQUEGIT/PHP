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
                                    <div class="d-inline">
                                    <button onclick="delete_alert()" value="<?php echo $student['id'];?>" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                                </tr>
                            <?php } }else
                            { 
                                echo "<h4>No Records Found</h4>";
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    
<div id="del" class="delete" onclick="fade_alert()">
<div class="container text-center">
<p>Are you sure you want to delete?</p>
<form action="code.php" method="POST">
  <div class="d-inline">
  <button type="submit" class="btn btn-white border" name="delete_student" value="<?php echo htmlspecialchars($student['id']);?>" onclick="fade_alert">Yes</button>
  <button type="button" class="btn btn-white border">No</button>
  </div>
</form>
</div>
</div>
   </div>
</div>          

<?php include 'includes/footer.php'; ?>