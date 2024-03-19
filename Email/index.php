<?php


require 'vendor/autoload.php'; // Path to Composer autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

$mail = new PHPMailer(); // Remove the redundant namespace

try {
    
if(isset($_POST['submit']))
{


$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    

    $mail->setFrom('', '');
    $mail->addAddress($email);

    $mail->isHTML();
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'Plain text message body if HTML is not supported';
    
    // Disable SMTP debug mode
    $mail->SMTPDebug = SMTP::DEBUG_OFF;

    if($mail->send())
    {
        $_SESSION['message'] = 'Message has been sent';
    }
   }}
 
 catch (Exception $e) {
    // Don't echo anything in case of an error
}
?>


<?php
include ('includes/header.php');

?>

<div class="container-fluid">

<div class="card">
<?php
if(isset($_SESSION['message'])){
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?php echo $_SESSION['message']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
unset($_SESSION['message']); 
};
?>

<form action="index.php" method="POST">
    <h2>Gmail sender</h2>
    <div>
    Email to: <br>
    <input name="email" type="text">
    </div>
    <div>
    Subject: <br>
    <input name="subject" type="text">
    </div>
    <div>
    Message: <br>
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-success" value="Send">
</form>
</div>

</div>




<?php
include ('includes/footer.php');
?>