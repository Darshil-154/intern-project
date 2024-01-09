<?php include_once 'top.php'?>
<style>
body{
    color:white;
}
form{
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   margin: auto;
}
  </style>
<?php
// Database connection configuration (You need to set your own values here)

require_once 'db_connect.php';

// Initialize variables for feedback messages
$successMessage = "";
$errorMessage = "";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Validate input (add more validation as needed)
    if (empty($newUsername) || empty($newPassword)) {
        $errorMessage = "Both username and password are required.";
    } 
    elseif (strlen($newPassword)>10) {
        $errorMessage = "password must be at least 6 and max 10 characters.";
    }
    else  {
        $check = "SELECT * FROM user WHERE username = '$newUsername'";
        $result = mysqli_query($conn, $check);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username already exists')</script>";
        }
    
        else{
        if (isset($_SESSION['email'])) {
            $email1 = $_SESSION['email'];

            // Update the user's information in the database (you need to adapt this to your database structure)
            $sql = "UPDATE user SET username='$newUsername', password= md5('$newPassword') WHERE email = '$email1'"; // Replace 'users' and 'user_id' with your actual table and unique identifier
        }
    }
}
        if ($conn->query($sql) === TRUE) {
            $successMessage = "Username and password updated successfully.";
        } else {
            $errorMessage = "Error updating username and password: " . $conn->error;
        }
    
    $conn->close();
}

?>
<h2>Choose Your Username</h2>
<form method="post" action="">
    <div class="text-center w-60" style="margin: auto">
        <div class="input-group flex-nowrap mb-4">
            <span class="input-group-text text-light bg-primary" id="addon-wrapping"><strong>Username</strong></span>
            <input type="text" id="form3Example2" class="form-control" name="username" placeholder="Username" aria-describedby="addon-wrapping" aria-label="username" required>
        </div>
        <div class="input-group flex-nowrap mb-4">
            <span class="input-group-text text-light bg-primary" id="addon-wrapping"><strong>Password</strong></span>
            <input type="password" class="form-control" name="password" placeholder="*  *  *  *  *  *  *" aria-label="password" aria-describedby="addon-wrapping" required>
        </div>

        <input type="submit" name="submit" value="Save" class="btn btn-primary btn-block mb-4">
    </div>
</form>

<?php
if (!empty($successMessage)) {
    echo "<p style='color:green'>$successMessage</p>";
}
if (!empty($errorMessage)) {
    echo "<p style='color:red'>$errorMessage</p>";
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
