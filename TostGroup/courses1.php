<?php
include('blankpage.php');
?>
<div class="row justify-content-center">
                <div class="col-11">
                <div class="card">
                <div class="card-header">
                    <h4></h4> <p><a style="color:black" href="coursesaddnew.php">Add New</a></p>
                </div>
                <div class="card-body">
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $sql = "SELECT * FROM courses1";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        { ;?> 
                                <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td>
                                <p >
                                  
                                <a href="courses1view.php?id= <?php echo $row['id']; ?>" class="btn btn-success">View</a>
                                <a href="courses1edit.php?id= <?php echo $row['id']; ?>" class="btn btn-danger">Edit</a>
                                </p>
                                
                                </td>
                                </tr>
                            <?php  } ; ?>
                            
                        </tbody>
                    </table>
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
  </body>
</html>
