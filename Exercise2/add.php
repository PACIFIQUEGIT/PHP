<?php 

  include('config/db_connect.php');

  $title = $email = $ingredients = '';
  $errors = array('email' => '', 'title' => '', 'ingredients' => '');
  
  if (isset($_POST['submit'])) {
    
    if(empty($_POST['email'])) {
        $errors['email'] = 'An email is required';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    if(empty($_POST['title'])) {
        $errors['title'] = 'A title is required';
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    if(empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required';
    } else {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list'; 
        }
    }

    if(!array_filter($errors)){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

    $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

    if(mysqli_query($conn, $sql)) {
        header('Location: index.php');
    }

    }

    mysqli_close($conn);

  }
 
?>

<!DOCTYPE html>
<html lang="en">
     <?php include('templates/header.php'); ?>

     <section class="container text-muted">
        <h4 class="text-center">Add a Pizza</h4>
        <form action="add.php" method="POST" class="bg-white">
            <div class="form-floating p-1">
            <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>" class="form-control border-0 rounded-0 border-bottom">
            <label for="email">Your Email:</label>    
            <div class="text-danger"><?php echo $errors['email'];?></div>        
            </div>
            <div class="form-floating p-1">
            <input type="text" name="title" value="<?php echo htmlspecialchars($title);?>" class="form-control border-0 rounded-0 border-bottom">    
            <label for="title">Pizza Title:</label>
            <div class="text-danger"><?php echo $errors['title'];?></div>
            </div>
            <div class="form-floating p-1">
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients);?>" class="form-control border-0 rounded-0 border-bottom">
            <label for="ingredients">Ingredients (comma separated):</label>
            <div class="text-danger"><?php echo $errors['ingredients'];?></div>
            </div>
            <div class="text-center p-2">
                <input type="submit" name="submit" value="submit" class="btn brand text-white">
            </div>
        </form>
     </section>

     <?php include('templates/footer.php'); ?>
</html>