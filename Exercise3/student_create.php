<?php

?>

<?php
    include 'includes/header.php';
?>
   <div class="container">
    <div class="row mt-5">
    
        <div class="col">
            <?php include 'message.php'; ?>
            <div class="card">
                <div class="card-header">
                    <h4>Student Add</h4> <a href="index.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="mb-3">
                            <label for="">Names:</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">Email:</label>
                            <input type="text" name="email" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">Phone:</label>
                            <input type="text" name="phone" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">Course:</label>
                            <input type="text" name="course" class="form-control" >
                        </div>
                        <div>
                            <input type="submit" name="save_student" class="btn btn-primary" value="Save Student">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>

<?php
    include 'includes/footer.php';
?>   