<?php
require 'navbar.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     include 'connect.php';
     $name = $_POST['name'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];
     if ($password == $cpassword) {
          $qsl = "INSERT INTO `made` (`name`, `password`, `dt`) VALUES ('$name', '$password', current_timestamp())";
          $result = mysqli_query($conn,$qsl);
          if ($result) {
              header("location: login.php");
          }
          else {
              echo "data not insert";
          }
     }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>insert data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-4">data insert</h1>
    <div class="container">
    <form action="/session/insert.php" method="POST">
  <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label class="form-label">confirm Password</label>
    <input type="password" class="form-control" name="cpassword">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>