<?php 

  include('config/db_connect.php');

  $sql = "SELECT title, ingredients, id FROM pizzas ORDER BY created_at";

  $result = mysqli_query($conn, $sql);

  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  mysqli_free_result($result);

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
     <?php include('templates/header.php'); ?>
     <h4 class="text-center">Pizzas!</h4>
     <div class="container px-5">
        <div class="row px-5 mx-5">
            <?php foreach($pizzas as $pizza){ ?>
                <div class="col-4 my-5">
                    <div class="card">
                        <img width="100px" height="100px" src="img/pizza.svg" alt="" class="pizza">
                        <div class="card-body text-center">
                            <h6> <?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                                <?php foreach(explode(',',$pizza['ingredients']) as $ingredient){ ?>
                                    <li><?php echo htmlspecialchars($ingredient);?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="details.php?id=<?php echo htmlspecialchars($pizza['id']); ?>" class="float-end footer-brand">MORE INFO</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
     </div>
     <?php include('templates/footer.php'); ?>
</html>