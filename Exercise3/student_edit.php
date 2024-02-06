<?php
require 'db_con.php';
?>

<?php
    include ('includes/header.php');
?>
   <div class="container">
    <div class="row mt-5">
    
        <div class="col">
            <?php include 'message.php'; ?>
            <div class="card">
                <div class="card-header">
                    <h4>Student Edit <a href="index.php" class="btn btn-danger float-end">Back</a></h4> 
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id']))
                    {    
                    $student_id = mysqli_real_escape_string($con, $_GET['id']);
                    $sql = "SELECT * FROM Students WHERE id = $student_id";
                    $query_run = mysqli_query($con, $sql);
                    if(mysqli_num_rows($query_run)>0)
                    {
                        $student = mysqli_fetch_array($query_run);
                    ?>
                        <form action="code.php" method="post">
                            <input type="hidden" name="student_id" value="<?php echo htmlspecialchars($student['id']) ; ?>">
                        <div class="mb-3">
                            <label for="">Names:</label>
                            <input type="text" name="name" value="<?php echo htmlspecialchars($student['name']) ; ?>" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">Email:</label>
                            <input type="text" name="email" value="<?php echo htmlspecialchars($student['email']) ; ?>" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">Phone:</label>
                            <input type="text" name="phone" value="<?php echo htmlspecialchars($student['phone']) ; ?>" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">Course:</label>
                            <input type="text" name="course" value="<?php echo htmlspecialchars($student['course']) ; ?>" class="form-control" >
                        </div>
                        <div>
                            <input type="submit" name="update_student" class="btn btn-primary" value="Update Student">
                        </div>
                    </form>
                    <?php
                    }else{echo '<h4> No Such Id Found</h4>';} 
                    }                
                    
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
   </div>

<?php
    include 'includes/footer.php';
?>   