<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Interior.In </title>
	</head>

	
	<body>
        <style>
               .dropdown-menu.adjusted {
            left: auto !important;
            right: 0 !important;
            transform: translateX(0) !important;
           

            background-color: rgba(33, 33, 33, 0.1);
            /* Adjust the alpha (fourth value) for transparency */
            backdrop-filter: blur(70px);
            /* Adjust the blur value */

        }


        .profile-avatar {
            cursor: pointer;

        }

        #Settings:hover {
            background-color: rgba(33, 33, 33, 0.3);
        }

        #Logout:hover {
            background-color: rgba(33, 33, 33, 0.3);
        }

        #Profile:hover {
            background-color: rgba(33, 33, 33, 0.3);
        }

        </style>

<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Interior.IN<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li><a class="nav-link" href="shop.php">Shop</a></li>
						<li><a class="nav-link" href="about.php">About us</a></li>
						<li><a class="nav-link" href="services.php">Services</a></li>
						<li><a class="nav-link" href="blog.php">Blog</a></li>
						<li><a class="nav-link" href="contact.php">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li> <div class="dropdown ml-2">
                    <div class="nav-link" data-toggle="dropdown" aria-expanded="false" aria-controls="user_menu">
                        <div class="profile-avatar">
                            <img src="images/user.svg">

                        </div>
                    </div>
                        <div id="user_menu" class="dropdown-menu dropdown-menu-left adjusted shadow mb-5 rounded transparent-blur">
                        <div class="dropdown-item dropdown-item-user">
                            <div class="user-detail">
                                <div class="name"><strong>
                                        <?php
                                        
                                            if (isset($_SESSION['email'])) {
                                                $email1 = $_SESSION['email'];

                                                $sql = "SELECT * FROM info WHERE email = '$email1'";

                                                $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo !empty($row['username']) ? $row['username'] : $row['firstname'];
                                                    }
                                                }

                                            }
                                        
                                        ?>
                                    </strong></div>
                                <div class="mail">
                                    <?php
                                    if (isset($_SESSION['email'])) {
                                        $email = $_SESSION['email'];
                                        echo $email;
                                    } ?>
                                </div>
                            </div>
                            <hr class="dropdown-divider">
                        </div>

                        <div class="grid-menu">
                            <a class="dropdown-item" id="Profile" href="profile.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" id="Settings" href="settings.php">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2"></i>
                                Settings
                            </a>
                            <hr class="dropdown-divider">
                        </div>

                        <a class="dropdown-item" href="#" id="Logout" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                            Logout
                        </a></li>
						<li><a class="nav-link" href="cartIN.html"><img src="images/cart.svg"></a></li>
					</ul>
						
				</div>
                </div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
		<?php include_once 'contact.php';?>

		  <form class="needs-validation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
			<div class="row">
			  <div class="col-6">
				<div class="form-group">
				  <label class="text-black" for="fname">First name</label>
				  <input type="text" class="form-control" id="fname" name="fname" required>
				</div>
			  </div>
			  <div class="col-6">
				<div class="form-group">
				  <label class="text-black" for="lname">Last name</label>
				  <input type="text" class="form-control" id="lname" name="lname" required>
				</div>
			  </div>
			</div>
			<div class="form-group">
			  <label class="text-black" for="email">Email address</label>
			  <input type="email" class="form-control" id="email" name="email" required>
			</div>

			<div class="form-group mb-5">
			  <label class="text-black" for="message">Message</label>
			  <textarea name="message" class="form-control" id="message" cols="30" rows="5" required></textarea>
			</div>

			<input type="submit" name="submit" value="Send Message" class="btn btn-primary-hover-outline">
		  </form>
		  <?php
// Initialize variables
$fname = $email = $lname =$message = "";


// Function to sanitize user input
function sanitize($info)
{
    
    $info = htmlspecialchars($info);
  
    return $info;
}

// Form validation and data handling
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['submit'])){
			
            $fname = sanitize($_POST["fname"]);
            $lname = sanitize($_POST["lname"]);
            $email = sanitize($_POST["email"]);
            $message = sanitize($_POST["message"]);
    
    require_once 'db_connect.php';

            $sql = "INSERT INTO interier (fname, email, lname,message) VALUES ('$fname', '$email','$lname' ,'$message')";
           
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Responce submitted successfully')</script>";
            
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
          }
		  else{echo "Enter given fildes";}
		  mysqli_close($conn);
        }
       
 
        
?>
<script src="js/sb-admin-2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>