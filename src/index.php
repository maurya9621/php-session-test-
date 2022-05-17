<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>
  </head>
  <body>
     <form  action="registration.php" method="POST">

     <div class="logininput-group1">
    <label for="name">name</label>
    <input type="text" name="Name" placeholder="Enter name" value="<?php echo $name; ?>" required >
  </div>

  <div class="logininput-group1">
    <label for="mail">mail</label>
    <input type="text" name="mail" placeholder="Enter mail" value="<?php echo $mail; ?>" required >
  </div>
  
  <div class="logininput-group1">
    <label for="password">Password </label>
    <input type="password"  placeholder="Enter Password" name="password" required>
  </div>

  <div class="logininput-group1">
    <label for="repassword">repeat Password </label>
    <input type="password"  placeholder="Enter Password" name="repassword" required>
  </div>

  </br>
  <div class="logininput-group1">
    <button type="submit" class="btn" name="register_user">register</button>
  </div>
  </form>
  </body>
</html>