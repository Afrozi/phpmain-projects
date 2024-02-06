<?php
 require_once('./oprations.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>image upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="text-center my-3">Registration Form</h1>
    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
             <?php inputfield("username","username","","text");?>
             <?php inputfield("mobile","mobile","","number");?>
             <?php inputfield("","file","","file");?>
             <button class="btn btn-dark" name="submit">submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>