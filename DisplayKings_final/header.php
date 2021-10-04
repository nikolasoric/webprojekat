<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisplayKings</title>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- OwlCarousel2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS-->
    <link rel="stylesheet" href="style.css">

    <?php
        require ('functions.php');
    ?>

</head>
<body>
    <!-- header-->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-serif font-size-14 text-black-50 m-0">Nikola Soric 213/18 - IT </p>
            <div class="font-rale font-size-14">
                <a href="login.php" class="px-3 border-right border-left text-dark">Login</a>
                <a href="cart.php" class="px-3 border-right border-left text-dark">Wishlist</a>
            </div>
        </div>
    </header>
    <!-- kraj headera-->

    <!-- Navbar-->
    <nav id="" class="navbar navbar-expand-lg navbar-light navbar-dark color-secondary-bg">
        <a class="navbar-brand" href="index.php">Display Kings</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="brands.php">Brands</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <?php
                      
                      if (isset($_SESSION["useruid"])) {
                        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>';
                      }
                      else {
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="signup.php">Register</a></li>';
                      }
                      ?>
        </ul>
        <form action="#" class="font-size-14 font-rubik">
            <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('card')); ?></span>
            </a>
        </form>
        </div>
    </nav>
    <main id="main-site">