
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
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `khan` WHERE categories_id=$id";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $catname = $row["categories_name"];
          $catdesc = $row["categories_description"];
           }
 ?>
 <?php
 $showalert = false;
 $method = $_SERVER['REQUEST_METHOD'];
 if ($method == 'post') {
    $th_title = $_POST['title'];
    $th_desc = $_POST['desc'];
    $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_user_id`, `thread_user_caterories`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp());";
    $result = mysqli_query($conn,$sql);
    $showalert = false;
    if ($showalert) {
         echo "ghjkjhg";
    }
 }
 ?>
    <div class="container my-4 text-white bg-info">
    <div class="jumbotron">
  <h1 class="display-4">welcome To the  <?php echo $catname;?> forums</h1>
  <p class="lead">  <?php echo $catdesc;?></p>
  <hr class="my-4">
  <p>this is a pree to pree forum for sharing knowledge with each other</p>
  <p class="lead">
    <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
    </div>
<div class="container">
<h1 class="py-2">Ask a question</h1>
<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">problem title</label>
    <input type="text" class="form-control" id="title" name="title">
    <small id="emailHelp" class="form-text text-muted">keep your title as short and crips as possible.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">description text</label>
    <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
  </div>
  <button type="submit" class="btn btn-success my-3">Submit</button>
</form>
</div>
    <div class="container">
      <h1 class="py-2">Browse Questions</h1>
      <?php
        $id = $_GET["catid"];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
        $result = mysqli_query($conn,$sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
          $noResult = false;
          $id = $row['thread_id'];
          $title = $row['thread_title'];
          $desc = $row['thread_desc'];
       echo '<div class="media my-3">
              <img class="mr-3" src="user.png"  width="34px" alt="Generic placeholder image">
                   <div class="media-body">
                 <h5 class="mt-0"><a href="thread.php?threadid=' .$id. '">' .$title. '</a></h5>
                       ' .$desc. '
         </div>
    </div>';
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
    </div>
 <?php include 'parsals/footer.php';?>
 
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>
  </body>
</html>