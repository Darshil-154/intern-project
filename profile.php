

<?php include_once 'top.php'?>
<style>
body{
    color:white;
}
  </style>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <h3>Select image to upload:</h3>
  <div class="mb-3">
    
  
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="margin-bottom: 13px;">
    <input type="submit" value="Upload" class="form-control" name="Upload">
  </div>

  
</form>
<?php

if (array_key_exists('Upload', $_POST)) {
  $target_dir = "uploads/";
  $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));




  // Get a list of files in the directory



  // Check if image file is a actual image or fake image
  if (isset($_POST["Upload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
     
      $uploadOk = 1;
    } else {
      echo "File is not an image.<br>";
      $uploadOk = 0;
    }
  }

  


  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
  }
  if (file_exists($target_file)) {
    if (isset($_SESSION['email'])) {
      $email = $_SESSION['email'];
      include 'db_connect.php';
      $sql = "UPDATE user SET image = '$target_file' WHERE email = '$email'";
      if (mysqli_query($conn, $sql)) { // Execute the SQL query
        
        echo "Image updated successfully.<br>";

      } else {
        echo "Error updating image : " . mysqli_error($conn);
      }

      mysqli_close($conn);
    }
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  else if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
    // if everything is ok, try to upload file
  } else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
      if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
       require_once 'db_connect.php';
        $sql = "UPDATE user SET image = '$target_file' WHERE email = '$email'";
        if (mysqli_query($conn, $sql)) { // Execute the SQL query
         
          echo "<p style='color:green'>Image updated successfully.</p><br>";

        } else {
          echo "Error updating image : " . mysqli_error($conn);
        }

        mysqli_close($conn);
      }
    } else {
      echo "Sorry, there was an error uploading your file.<br>";
    }
  }
}
?>

</div>

<?php include_once 'logout.php'?>
    
    <script src="js/sb-admin-2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
