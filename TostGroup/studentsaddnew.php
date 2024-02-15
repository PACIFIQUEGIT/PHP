<?php
include('blankpage.php');
?>
                <div class="row justify-content-center">
                <div class="col-11">
        <div  class="card">
                <div class="card-header">
                    <h4></h4> 
                </div>
                <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <table class="w-100">
                        <div class="row">
                        <thead>
                            <tr>
                                <th>
                                    <input class="form-control" type="text" name="title" value="<?php echo htmlspecialchars($title);?>" >
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td>
                                    <input class="form-control" type="text" name="description" value="<?php echo htmlspecialchars($title);?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea class="form-control" value="<?php echo htmlspecialchars($paragraph);?>" name="testimony" id="" cols="30" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" value="" type="file" name="image">
                                </td>
                            </tr>
                        </tbody>
                        </div>
                        </table>
                        <button type="submit" name="students_upload" class="btn-info">Save</button>
                        </form>
                </div>
            </div>
                </div>
                </div>
                <div class="row mt-4">
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
      function table1() 
      {
        table1 = document.getElementById("table1");
        if(table1.style.display=="none")
        {
            table1.style.display="block";
        }else
        {
            table1.style.display="none";
        }
      }
    </script>
  </body>
</html>