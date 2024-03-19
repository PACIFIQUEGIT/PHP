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
                    <h4>Student View Details <a href="index.php" class="btn btn-danger float-end">Back</a></h4> 
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
                        <div class="mb-3">
                            <label for="">Names:</label>
                            <p class="form-control">
                                <?php echo $student['name']; ?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="">Email:</label>
                            <p class="form-control">
                                <?php echo $student['email']; ?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="">Phone:</label>
                            <p class="form-control">
                                <?php echo $student['phone']; ?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="">Course:</label>
                            <p class="form-control">
                                <?php echo $student['course']; ?>
                            </p>
                        </div>
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