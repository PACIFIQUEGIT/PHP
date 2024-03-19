<?php
include('blankpage.php');
?>
                <div class="row justify-content-center">
                <div class="col-11">
                <div class="card">
                <div class="card-header">
                    <h4>Registered Students</h4> 
                </div>
                <div class="card-body">
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Names</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Email</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>Sector</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "SELECT * FROM registered_students";
                            $query_run = mysqli_query($con, $sql);
                            if(mysqli_num_rows($query_run)>0)
                            {
                                foreach($query_run as $student){ ?> 
                                <tr>
                                <td><?php echo $student['id']; ?></td>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['gender']; ?></td>
                                <td><?php echo $student['course']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['province']; ?></td>
                                <td><?php echo $student['district']; ?></td>
                                <td><?php echo $student['sector']; ?></td>
                                <td><?php echo $student['status']; ?></td>
                                <td>
                                
                                <p >
                                  
                                <form class="d-inline" action="" method="post">
        <input type="hidden" name="approve_student" value="<?php echo $student['id']; ?>">
        <?php
        $status=$student['status'];
        if($status=="Pending"){
        ?>
        <button type="submit" class="btn btn-success approove px-0">Approve</button>
<?php }?>

    </form>
                                  <form class="d-inline" action="" method="post">
        <input type="hidden" name="delete_student" value="<?php echo $student['id']; ?>">
        <button type="submit" class="btn btn-danger px-0" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
    </form>
                                </p>
                                
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
                <div id="del" class="delete" onclick="fade_alert()">
<div class="container text-center">
<p>Are you sure you want to delete?</p>
<form action="code.php" method="POST">
  <div class="d-inline">
  <button type="submit" class="btn btn-white border" name="delete_student" value="<?php echo $student['id'];?>" onclick="fade_alert()">Yes</button>
  <button type="button" class="btn btn-white border">No</button>
  </div>
</form>
</div>
</div>
            </div>
                </div>
                </div>
                <div class="row mt-4">
                    
                </div>
            </div>
        </div>
        
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      function delete_alert() 
      {
        document.getElementById("del").style.display="block";
      }
      function fade_alert() 
      {
        document.getElementById("del").style.display="none";
      }
    </script>
  </body>
</html>