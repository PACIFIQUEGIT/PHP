<?php
include('blankpage.php');
?>
<div class="row justify-content-center">
                <div class="col-11">
                <div class="card">
                <div class="card-header">
                    <h4></h4> 
                </div>
                <div class="card-body">
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Paragraph</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        if(isset($_GET['id']))
                        {
                        $row_id = mysqli_real_escape_string($con, $_GET['id']);
                        $sql = "SELECT * FROM images WHERE id = $row_id";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                                { ;?> 
                                <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['header']; ?></td>
                                <td><?php echo $row['paragraph']; ?> </td>
                                <td><img id="im" src="img/<?php echo $row['file']; ?>" alt="Los Angeles" class="d-block" style="width:100px; height: 100px"> </td>
                                </tr>
                            <?php  }} ; ?>
                            
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
