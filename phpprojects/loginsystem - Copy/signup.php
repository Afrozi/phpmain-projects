<?php
$showalert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include 'parsal/_bdconnect.php';
      $username = $_POST["username"];
      $password = $_POST["Password"];
      $cpassword = $_POST["cpassword"];
       $exists=false;
      if (($password == $cpassword) && $exists==false){
           $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `usersafroz` (`username`, `password`, `dt`) VALUES ( '$username', '$hash', current_timestamp())";
              $result = mysqli_query($conn,$sql);
              if ($result) {
                 $showalert = true;
              }
      }
      else {
        $showError = "password does not match";
      }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'parsal/_nav.php' ?>
    <?php
    if ($showalert) {
         echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>success</strong> you can now creat a account and now login.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
    }
    if ($showError) {
         echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong> Error </strong>'.$showError.'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
    }
    ?>
    <div class="container">
        <h1 class="text-center my-3">signup to our website</h1>
        <form action="/loginsystem/signup.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
  <div class="mb-3">
    <label for="confirm Password" class="form-label">confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
  </div>
  <button type="submit" class="btn btn-primary">signup</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>