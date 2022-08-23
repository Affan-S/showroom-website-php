<!-- Menu Section Start -->
<?php
include('../config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../css/admin.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Toyota - Dashboard</title>

</head>

<body>
    <div class="main_container">

        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li> <a href="index.php">Home</a> </li>
                    <li> <a href="manage-admin.php">Admin</a> </li>
                    <li> <a href="manage-cars.php">Cars</a> </li>
                    <li> <a href="manage-variant.php">Variants</a> </li>
                    <li> <a href="manage-colors.php">Colors</a> </li>
                    <li> <a href="manage-spare-parts.php">Spare Parts</a> </li>
                    <li>

                        <div class="dropdown">
                            <a class="dropbtn">Car Orders</a>
                            <div class="dropdown-content">
                                <a href="manage-orders.php">New Orders</a>
                                <a href="processing-orders.php">In Progress</a>
                                <a href="completed-orders.php">Completed</a>
                                <a href="failed-orders.php">Failed Orders</a>
                            </div>
                        </div>

                    </li>
                    <li> <a href="logout.php">Logout</a> </li>
                </ul>
            </div>