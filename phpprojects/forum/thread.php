
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Bootstrap demo</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
  </head>
  <body>
 <?php include 'parsals/header.php';?>
 <?php include 'parsals/db_connect.php';?>
 <?php
        $id = $_GET["threadid"];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
        $result = mysqli_query($conn,$sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
           $noResult = false;
          $title = $row["thread_title"];
          $desc = $row["thread_desc"];
           }

           if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid text-white bg-info">
                  <div class="container">
                   <p class="display-4">no thread is found</p>
                    <p class="lead">Be the first person to ask question.</p>
            </div>
          </div>';
          }
 ?>
    <div class="container my-4 text-white bg-info">
    <div class="jumbotron">
  <h1 class="display-4"><?php echo $title;?></h1>
  <p class="lead">  <?php echo $desc;?></p>
  <hr class="my-4">
  <p>this is a pree to pree forum for sharing knowledge with each other</p>
  <p class="lead">
    <p class="text text-dark">posted by:Harry</p>
</p>
</div>
    </div>
    <div class="container">
      <h1 class="py-2">iDiscussion</h1>
      <?php
       /* $id = $_GET["threadid"];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['thread_id'];
          $title = $row['thread_title'];
          $desc = $row['thread_desc'];
       echo '<div class="media my-3">
              <img class="mr-3" src="user.png"  width="34px" alt="Generic placeholder image">
                   <div class="media-body">
                 <h5 class="mt-0"><a href="thread.php">' .$title. '</a></h5>
                       ' .$desc. '
         </div>
    </div>';

}*/
?>
<!----<div class="media my-3">
  <img class="mr-3" src="user.png"  width="34px" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">unable To install pyaudio error in windows</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>--->
    </div>
 <?php include 'parsals/footer.php';?>
 
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>
  </body>
</html>