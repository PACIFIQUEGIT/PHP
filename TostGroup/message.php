<?php
if (isset($_SESSION['name']))
{ 
?>
    <?php echo htmlspecialchars($_SESSION['name']); ?>
<?php 
} ;
?>