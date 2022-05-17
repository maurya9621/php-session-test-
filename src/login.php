<?php
session_start(); 
?>

<?php
$email=$_POST["email"];
$Pass=$_POST["Password"];

    if ( $_SESSION["pass"]== $Pass) {

    $message = "login succesfully";
 echo "<script type='text/javascript'>alert('$message');</script>";
  echo "Hello World !";
              
 }
 else {
     $message = "password didnt matched";
     echo "<script type='text/javascript'>alert('$message');</script>";   
 }


?>
<a href="logout.php">Log Out Btn</a>

