<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICONICAGENCIES</title>
  <link rel="stylesheet" href="selection.css">
  <script src="selection.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>

  <header>
    <h1>Car Rental Portal</h1>
  </header>

  <form  method="post" action="">
    <section id="car-selection">
      <h2>Car Selection</h2>
      <div class="car-selection" >
        <select id="car-type" name="cars" onchange="changeImage()">
        <option id="defult" value="defult" disabled selected>Choose car</option>
          <option id="compact" value="compact">Compact</option>
          <option id="suv" value="suv">SUV</option>
          <option id="super" value="super">Sedan</option>
        </select>
        <!-- <div id="car-image"></div> -->
        <input type="text" name="pickup-location" class="form-control" id="pickup-location" placeholder="Pickup Location" required>
        <div class="invalid-feedback">Please, enter your name!</div>
        <input type="text" name="drop-location" class="form-control" id="drop-location" placeholder="Drop Location" required>
        <div class="invalid-feedback">Please, enter your name!</div>


        <input type="datetime-local" name="pickup-time" class="form-control" id="pickup-time" placeholder="Pickup Time" required>
        <div class="invalid-feedback">Please, enter your name!</div>
        <input type="datetime-local" name="drop-time" class="form-control" id="drop-time" placeholder="Drop Time" required>
        <div class="invalid-feedback">Please, enter your name!</div>



        <input class="btn btn-success" type="submit" name="submit" value="Continue">
      </div>

      <div class="container" style="margin-top: 20px;">
        <div class="frame">
          <div class="overlay"></div>
          <div class="image">
            <img id="car-image" src="" alt="Car Image">
          </div>
        </div>
      </div>
    </section>
  </form>

  <?php
  // Initialize variables
  $car =  $pickup = $drop = $picktime = $droptime ="";

 

  // Form validation and data handling
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
      
    if(!empty($_POST['cars'])) {
        $car = $_POST['cars'];
    } 
      $pickup = $_POST['pickup-location'];
      $drop = $_POST['drop-location'];
      $picktime = $_POST['pickup-time'];
      $droptime = $_POST['drop-time'];

  
      require_once 'db_connect.php';
      if (isset($_SESSION['email'])) {
        $email1 = $_SESSION['email'];

        
        $sql = "UPDATE user SET car='$car',pickuplocation='$pickup',droplocation='$drop',pickuptime='$picktime',droptime='$droptime'  WHERE email = '$email1'"; 
    }
        if (mysqli_query($conn, $sql)) {
          echo '<script>window.location.href = "payment.php";</script>';
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      
    }
    mysqli_close($conn);
    // Close the database connection
  }
  ?>


</body>

</html>