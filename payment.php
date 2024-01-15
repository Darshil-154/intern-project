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

  <section id="final-cost">
    <h2>Final Cost</h2>
    <?php 
 if (isset($_SESSION['email'])) {
  $email1 = $_SESSION['email'];

  $sql = "SELECT * FROM user WHERE email = '$email1'";

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "pickup-location :" + $row['pickuplocation'] ;
      }
  }
  mysqli_close($conn);
}
?>
    <p>GST: $3</p>
    <p>TAX: $5</p>
    <p>Total Cost: $150 per day</p>
    <a class="btn btn-success ms-2" href="home.php" role="button">Click to Pay</a>
    <p>you will get notification in your gmail</p>
</section>

</body>
</html>
