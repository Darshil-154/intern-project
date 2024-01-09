<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> <?php
        $currentFile = $_SERVER['PHP_SELF'];
        $filename = basename($currentFile, '.php');
        $capital = ucfirst($filename);
        echo $capital;
        ?> page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta property="twitter:card" content="summary_large_image">

   
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage Grotesque"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap"
      data-tag="font"
    >
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  </head>
  <style>
       
        img{
            size: cover;
        }

        .image-container {
            display: inline-block;
            margin: 10px;
        }

        .image-container img {
            max-width: 100%;
            max-height: 500px;
            /* Adjust the max-height as needed */
            height: auto;


        }

        .file-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .file-container {
            flex: 0 0 calc(33.33% - 20px);
            margin: 10px;
            text-align: center;
        }

        .mt-0,
        .mb-0 {
            margin-top: 25px !important;
            margin-bottom: 25px !important;
        }

        .dropdown-menu.adjusted {
            left: auto !important;
            right: 0 !important;
            transform: translateX(0) !important;


            background-color: rgba(33, 33, 33, 0.5);
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

        .fixed-icon {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1000;
        }

        @media (max-width: 1000px) {
            .logo {
                display: none;
            }
        }

        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: rgba(33, 33, 33, 0.3);
            backdrop-filter: blur(70px);
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 30%;
            font-size: 16px;
        }

        #backToTopBtn:hover {
            background-color: rgb(33, 33, 33);
        }

        #dm {
            background-color: rgba(33, 33, 33, 0.3);
            backdrop-filter: blur(70px);
        }
    </style>
  <body>
    <link rel="stylesheet" href="./style.css" />
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container" style=" background-image:url('bg.jpg');">
      <div class="home-header">
      <nav class="navbar w-100 navbar-expand-lg bg-body-tertiary bg-light border-bottom border-body sticky-top" >

<div class="container-fluid" id="classpresent">


    <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left:-8px;">
        <a class="navbar-brand" href="#">
            <img src="logo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle">
            <?php
            $currentFile = $_SERVER['PHP_SELF'];
            $filename = basename($currentFile, '.php');
            $capital = ucfirst($filename);
            echo $capital;
            ?>
        </a>
    </button>
    <div class="logo">
        <a class="navbar-brand" href="#">
            <img src="logo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle">
            <?php
            $currentFile = $_SERVER['PHP_SELF'];
            $filename = basename($currentFile, '.php');
            $capital = ucfirst($filename);
            echo $capital;
            ?>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blogs.php">Blogs</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Downloads
                </a>
                <ul class="dropdown-menu" id="dm">
                    <li><a class="dropdown-item" href="images.php">Images</a></li>
                    <li><a class="dropdown-item" href="files.php">Files</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="upload.php">Upload</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contect us</a>
            </li>
        </ul>

        

        
    </div>
    <div class="fixed-icon">
        <div class="dropdown ml-2">
            <div class="btn-user-avatar" data-toggle="dropdown" aria-expanded="false" aria-controls="user_menu">
                <div class="profile-avatar">
                    <img src="<?php
                                require_once 'db_connect.php';
                                if (isset($_SESSION['email'])) {
                                    $email1 = $_SESSION['email'];

                                    $sql = "SELECT * FROM user WHERE email = '$email1'";

                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo !empty($row['image']) ? $row['image'] : 'uploads/defult.jpg';
                                        }
                                    }
                                }
                                ?>" width="35" height="35" class="d-inline-block align-text-top rounded-circle">

                </div>
            </div>
            <div id="user_menu" class="dropdown-menu dropdown-menu-left adjusted shadow mb-5 rounded transparent-blur">
                <div class="dropdown-item dropdown-item-user">
                    <div class="user-detail">
                        <div class="name"><strong>
                                <?php
                                
                                    if (isset($_SESSION['email'])) {
                                        $email1 = $_SESSION['email'];

                                        $sql = "SELECT * FROM user WHERE email = '$email1'";

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
                </a>
                
            </div>
        </div>
    </div>
    

</div>
</nav>
      </div>