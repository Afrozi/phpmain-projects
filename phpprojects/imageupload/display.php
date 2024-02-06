<?php include 'connet.php'; 
     $show = false;
     if(isset($_POST['submit'])) {
        $username=$_POST['username'];
        $mobile=$_POST['mobile'];
        $image=$_FILES["file"];
        /*echo $username;
        echo "<br>";
        echo $mobile;
        echo "<br>";
        print_r($image);
        echo "<br>";*/

        $imagefilename = $image['name'];
         //print_r($imagefilename);
        echo "<br>";

        $imagefileerr = $image['error'];
        // print_r($imagefileerr);
        echo "<br>";

        $imagfiletemp=$image['tmp_name'];
         // print_r($imagfiletemp);
         echo "<br>";

         $filename_separate=explode('.',$imagefilename);
         // print_r($filename_separate);
         echo "<br>";
         
         $file_extension=strtolower(end($filename_separate));
           //print_r($file_extension);

         $extension=array('jpeg','jpg','png');
         if (in_array($file_extension,$extension)) {
              $upload_image='image/'.$imagefilename;
              move_uploaded_file($imagfiletemp,$upload_image);
              $sql="INSERT INTO `image` (`name`, `mobile`, `image`) VALUES ('$username', '$mobile', '$upload_image')";
              $result= mysqli_query($conn,$sql);
              if ($result) {
                    
                    $show = true;
              }
              else {
                  die(mysqli_error($conn));
              }
         }
       
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        img{
            width:200px;
        }
    </style>
</head>
<body>
    <h1 class="text-center my-4">user data</h1>
    <?php if ($show) {
            echo '<div class="alert alert-primary mt-5 d-flex justify-content-center" role="alert">
            your data has been insert successhul!
       </div>';
    }?>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">sno</th>
      <th scope="col">username</th>
      <th scope="col">mobile</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `image`";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        while ($rows=mysqli_fetch_assoc($result)) {
               $id=$rows["sno"];
               $name=$rows["name"];
               $mobile=$rows["mobile"];
               $image=$rows["image"];
               echo ' <tr>
               <th scope="row">' .$id.'</th>
               <td>'.$name.'</td>
               <td>'.$mobile.'</td>
               <td><img src='.$image.' /></td>
             </tr>';
        }
    }
    ?>
  </tbody>
</table>
    </div>
   
</body>
</html>
