<?php
 session_start();

$_SESSION["name"] = $_POST["Name"];
 $_SESSION["mail"] = $_POST["mail"];
 $_SESSION["pass"] =$_POST["password"];
 $_SESSION["repass"] =$_POST["repassword"];

if ( $_SESSION["pass"]==$_SESSION["repass"]) {

   $message = "registerd succesfully";
echo "<script type='text/javascript'>alert('$message');</script>";             
}
else {
    $message = "password didnt matched1";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<!-- login form -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
  </head>
  <body>
     <form method="post" action="login.php">

  <div class="logininput-group1">
    <label for="email">mail</label>
    <input type="text" name="email" placeholder="Enter mail" value="<?php echo $email; ?>" required >
  </div>
  
  <div class="logininput-group1">
    <label for="Password">Password </label>
    <input type="password"  placeholder="Enter Password" name="Password" required>
  </div>

  </br>
  <div class="logininput-group1">
    <button type="submit" class="btn" name="login_user">login</button>
  </div> 
  </form>
  </body>
</html>