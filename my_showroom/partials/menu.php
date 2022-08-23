<?php include('config/constants.php')  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Link our CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/order-detail.css">
    <title>Toyota Motors - Home Page</title>
</head>

<body>
    <!-- Navbar Section Starts Here -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">
                <img src="images/logo.png" height="24" width="170px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php HOME_URL; ?>/my_showroom/index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php HOME_URL; ?>/my_showroom/cars.php">Automobiles</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php HOME_URL; ?>/my_showroom/booking.php">Online Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php HOME_URL; ?>/my_showroom/spare-parts.php">Spare Parts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php HOME_URL; ?>/my_showroom/about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php HOME_URL; ?>/my_showroom/contact-us.php">Contact Us</a>
                    </li>


                    <?php

                    if (isset($_SESSION['client_login'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php HOME_URL; ?>/showroom-pos/my-order.php">My Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php HOME_URL; ?>/showroom-pos/services.php">Services</a>
                        </li>
                    <?php
                    }

                    ?>

                </ul>
                <form class="d-flex">
                    <?php
                    if (isset($_SESSION['client_login'])) {

                    ?>
                        <a href="<?php HOME_URL; ?>/showroom-pos/logout.php" class="btn btn-outline-success mx-2" type="submit">Logout</a>
                    <?php

                    } else {
                    ?>
                        <a href="<?php HOME_URL; ?>/showroom-pos/login.php" class="btn btn-outline-success mx-2" type="submit">Login</a>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </nav>