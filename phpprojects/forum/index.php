
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
   <!--slider start here--->
 <div id='carouselExampleIndicators' class='carousel slide'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='2' aria-label='Slide 3'></button>
  </div>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img src='https://source.unsplash.com/user/erondu/2400x900' class='d-block w-100' alt='...'>
    </div>
    <div class='carousel-item'>
      <img src='https://source.unsplash.com/WLUHO9A_xik/2400x900' class='d-block w-100' alt='...'>
    </div>
    <div class='carousel-item'>
      <img src='https://source.unsplash.com/random/2400x900' class='d-block w-100' alt='...'>
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>
  <!---categeries start here--->
    <div class='container'>
        <h1 class='text-center my-3'>iDiscuss Browse categeries</h1>
        <div class='row'>
          <!--- fetch this categerie all this sql use for loop categeries start here--->
           <?php
           $sql = 'SELECT * FROM `khan`';
           $result = mysqli_query($conn,$sql);
           while ($row = mysqli_fetch_assoc($result)) {
                  //echo $row['categories_id'];
                  //echo $row['categories_name'];
                  $id = $row['categories_id'];
                  $cat = $row['categories_name'];
                  $desc = $row['categories_description'];
                 echo"<div class='col-md-4 my-2'>
                  <div class='card' style='width: 18rem;'>
        <img src='https://source.unsplash.com/200x200/?$cat,coding' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'><a href='threads.php?catid=$id'>$cat</a></h5>
          <p class='card-text'>$desc</p>
          <a href='threads.php?catid=$id' class='btn btn-primary'>View Threads</a>
            </div>
          </div>
       </div>";


         }
         
      ?>
        </div>
    </div>
 <?php include 'parsals/footer.php';?>
 
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>
  </body>
</html>